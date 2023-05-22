<?php

namespace App\Http\Controllers;

use App\Http\Services\ProductTypeService;
use App\Http\Transformer\Product\InputTransformer;
use App\Http\Transformer\Product\ProductTransformer;
use App\Http\Transformer\ProductType\ProductTypeTransformer;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected const PAGE_CATEGORY = '產品';

    protected const PAGE_TITLE = '產品管理';

    public function __construct(
        protected ProductTransformer $transformer,
        protected InputTransformer $input_transformer,
        protected ProductTypeTransformer $product_type_transformer,
        protected ProductTypeService $type_service,
    ) {
    }

    public function index(Request $request)
    {
        $product = $this->type_service->getProductsBySite($request->site);
        $products = $this->transformer->transformCollection($product);

        return view('Backstage.Product.index', [
            'page_categroy' => self::PAGE_CATEGORY,
            'page_title'    => self::PAGE_TITLE,
            'types'         => $products->groupBy('type_id'),
            'site'          => $request->site
        ]);
    }

    public function create()
    {
        $typies = $this->type_service->getAll();

        return view('Backstage.Product.edit', [
            'page_categroy' => self::PAGE_CATEGORY,
            'page_title'    => self::PAGE_TITLE,
            'product_typies' => $this->product_type_transformer->transformCollection($typies),
            'id'       => 0
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->input_transformer->transform($request->all());

        return response()->json(Product::query()->create($data)->Type->site);
    }


    public function show(Product $product)
    {
        return response()->json($this->transformer->transform($product));
    }


    public function edit(Request $request)
    {
        $typies = $this->type_service->getAll();

        return view('Backstage.Product.edit', [
            'page_categroy' => self::PAGE_CATEGORY,
            'page_title'    => self::PAGE_TITLE,
            'product_typies' => $this->product_type_transformer->transformCollection($typies),
            'id'       => $request->id
        ]);
    }


    public function update(Request $request, Product $product)
    {
        $data = $this->input_transformer->transform($request->all());
        $product->update($data);

        return response()->json($product->Type->site);
    }

    public function destroy(Product $product)
    {
        $product->delete();
    }
}
