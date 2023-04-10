<?php

namespace App\Http\Controllers;

use App\Commodity;
use App\Helpers\UrlHelper;
use App\Http\Services\CommodityService;
use App\Http\Transformer\Commodity\CommodityTransformer;
use App\Http\Transformer\Commodity\InputTransformer;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CommodityController extends Controller
{
    protected const PAGE_CATEGORY = '商品';

    protected const PAGE_TITLE = '商品管理';

    public function __construct(
        protected CommodityService $service,
        protected CommodityTransformer $transformer,
        protected InputTransformer $input_transformer
    ) {
    }

    public function index()
    {
        $commodities = Commodity::query()->get();

        return view('Backstage.Commodity.index', [
            'page_categroy' => self::PAGE_CATEGORY,
            'page_title'    => self::PAGE_TITLE,
            'items'         => $this->transformer->transformCollection($commodities),
        ]);
    }

    public function show(Commodity $commodity)
    {
        return response()->json($this->transformer->transform($commodity));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Request $request
     * @return View
     */
    public function edit(Request $request): View
    {
        return view('Backstage.Commodity.edit', ['id' => $request->id]);
    }

    public function create()
    {
        return view('Backstage.Commodity.edit', [
            'page_categroy' => self::PAGE_CATEGORY,
            'page_title'    => self::PAGE_TITLE,
            'id'       => 0
        ]);
    }

    public function update(Commodity $commodity, Request $request)
    {
        $commodity->update($this->input_transformer->transform($request->all()));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $commodity = Commodity::query()->create($data);

        return response()->json($commodity->id);
    }

    public function getCommodities()
    {
        $commodities = Commodity::query()->get()->map(function (Commodity $commodity) {
            return view('Backstage.component.card', [
                'id' => $commodity->id,
                'name' => $commodity->name,
                'src' => UrlHelper::formatOutPutUrl($commodity->picture_one)
            ])->toHtml();
        });

        return response($commodities);
    }

    public function destroy(Commodity $commodity)
    {
        $commodity->delete();
    }

    public function search(Request $request)
    {
        $data = $request->validate([
            'video' => 'required',
            'direction' => 'required',
            'resolution' => 'required',
            'weight' => 'required',
            'acceleration' => 'required',
            'acceleration_time' => 'required',
            'constant_time' => 'required',
            'distance' => 'required',
            'linear_ruler' => 'required',
        ]);
        if ($data['direction'] === "0") {
            $data['weight'] = $data['weight'] * 2;
        }

        $commodities = $this->service->searchCommoditiesByInfo($data);

        $speeding_up = $this->service->countSpeedingUp($data);
        $speeding_up_time = $this->service->countSpeedUpTime($speeding_up, $data);
        $constant_time = $this->service->countConstantTime($data);
        $data['total_time'] = $speeding_up_time * 2 + $constant_time;
        $data['speeding_up'] = $speeding_up;

        $commodity = $this->service->transformCommodities($commodities, $data)->first();

        if ($commodity === null) {
            return '沒有符合的產品';
        } else {
            return response()->json($this->transformer->transform($commodity));
        }
    }
}
