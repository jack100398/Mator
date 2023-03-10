<?php

namespace App\Http\Controllers;

use App\Commodity;
use App\Helpers\UrlHelper;
use App\Http\Services\CommodityService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CommodityController extends Controller
{
    /** @var CommodityService */
    private $service;


    public function __construct(CommodityService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return view('Backstage.Commodity.commodity');
    }

    public function show($id)
    {
        return Commodity::query()->where('id', $id)->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Request $request
     * @return View
     */
    public function edit(Request $request): View
    {
        return view('Backstage.Commodity.editCommodity', ['id' => $request->id]);
    }

    public function update($id, Request $request)
    {
        $data = $request->all();

        $data['picture_one'] = UrlHelper::formatInputUrl($data['picture_one']);
        $data['picture_two'] = UrlHelper::formatInputUrl($data['picture_two']);
        $data['picture_three'] = UrlHelper::formatInputUrl($data['picture_three']);
        $data['picture_four'] = UrlHelper::formatInputUrl($data['picture_four']);

        Commodity::query()->where('id', $id)->update($data);
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
            return $commodity;
        }
    }
}
