<?php

namespace App\Http\Controllers;

use App\Http\Transformer\ProductType\InputTransformer;
use App\Http\Transformer\ProductType\ProductTypeTransformer;
use App\ProductType;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductTypiesController extends Controller
{
    protected const PAGE_CATEGORY = '產品類型';

    protected const PAGE_TITLE = '產品類型管理';

    public function __construct(
        protected ProductTypeTransformer $transformer,
        protected InputTransformer $input_transformer
    ) {
    }

    public function index(): View
    {
        $typies = ProductType::query()->get();

        return view('Backstage.ProductTypies.index', [
            'page_categroy' => self::PAGE_CATEGORY,
            'page_title'    => self::PAGE_TITLE,
            'items'       => $this->transformer->transformCollection($typies)
        ]);
    }

    public function create()
    {
        return view('Backstage.ProductTypies.edit', [
            'page_categroy' => self::PAGE_CATEGORY,
            'page_title'    => self::PAGE_TITLE,
            'id'       => 0
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->input_transformer->transform($request->all());

        return response()->json(ProductType::query()->create($data));
    }


    public function show(ProductType $type)
    {
        return response()->json($this->transformer->transform($type));
    }


    public function edit(Request $request)
    {
        return view('Backstage.ProductTypies.edit', [
            'page_categroy' => self::PAGE_CATEGORY,
            'page_title'    => self::PAGE_TITLE,
            'id'       => $request->id
        ]);
    }


    public function update(Request $request, ProductType $type)
    {
        return response()->json($type->update($request->all()));
    }


    public function destroy(ProductType $type)
    {
        $type->delete();
    }
}
