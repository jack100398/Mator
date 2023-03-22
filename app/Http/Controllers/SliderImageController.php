<?php

namespace App\Http\Controllers;

use App\Http\Transformer\SliderImage\InputTransformer;
use App\Http\Transformer\SliderImage\SliderImageTransformer;
use App\SliderImage;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SliderImageController extends Controller
{
    protected const PAGE_CATEGORY = '首頁輪播';

    protected const PAGE_TITLE = '首頁輪播管理';

    public function __construct(
        protected SliderImageTransformer $transformer,
        protected InputTransformer $input_transformer
    ) {
    }

    public function index(): View
    {
        $datas = SliderImage::query()->get();

        return view('Backstage.SliderImages.index', [
            'page_categroy' => self::PAGE_CATEGORY,
            'page_title'    => self::PAGE_TITLE,
            'items'       => $this->transformer->transformCollection($datas)
        ]);
    }

    public function create()
    {
        return view('Backstage.SliderImages.edit', [
            'page_categroy' => self::PAGE_CATEGORY,
            'page_title'    => self::PAGE_TITLE,
            'id'       => 0
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->input_transformer->transform($request->all());

        return response()->json(SliderImage::query()->create($data));
    }


    public function show(SliderImage $item)
    {
        return response()->json($this->transformer->transform($item));
    }


    public function edit(Request $request)
    {
        return view('Backstage.SliderImages.edit', [
            'page_categroy' => self::PAGE_CATEGORY,
            'page_title'    => self::PAGE_TITLE,
            'id'       => $request->id
        ]);
    }


    public function update(Request $request, SliderImage $item)
    {
        $data = $this->input_transformer->transform($request->all());

        return response()->json($item->update($data));
    }


    public function destroy(SliderImage $item)
    {
        $item->delete();
    }
}
