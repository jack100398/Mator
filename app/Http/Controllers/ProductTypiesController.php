<?php

namespace App\Http\Controllers;

use App\Http\Services\ClientService;
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
        protected InputTransformer $input_transformer,
        protected ClientService $client_service
    ) {
    }

    public function index(Request $request): View
    {
        if (!is_null($request->site)) {
            $typies = $this->client_service->getProductTypesBySite($request->site);
        } else {
            $typies = ProductType::query()->get();
        }

        return view('Backstage.ProductTypies.index', [
            'page_categroy' => self::PAGE_CATEGORY,
            'page_title'    => self::PAGE_TITLE,
            'items'         => $this->transformer->transformCollection($typies),
            'site'          => $request->site
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
        $data = $this->input_transformer->transform($request->all());

        return response()->json($type->update($data));
    }


    public function destroy(ProductType $type)
    {
        $type->delete();
    }
}
