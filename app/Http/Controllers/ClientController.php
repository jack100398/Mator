<?php

namespace App\Http\Controllers;

use App\Helpers\TimeHelper;
use App\Http\Services\ClientService;
use App\Http\Services\ProductTypeService;
use App\Http\Transformer\Product\ProductDetailTransformer;
use App\Http\Transformer\Product\ProductTransformer;
use App\Http\Transformer\ProductType\ProductTypeTransformer;
use App\Product;
use App\ProductType;
use App\ThirdLink;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\View\View;

class ClientController extends Controller
{
    public function __construct(
        protected ClientService $service,
        protected ProductTypeTransformer $product_type_transformer,
        protected ProductTransformer $product_transformer,
        protected ProductTypeService $product_type_service,
        protected ProductDetailTransformer $product_detail_transformer
    ) {
        $this->service = $service;
    }

    /**
     * 首頁
     *
     * @return View
     */
    public function index(): View
    {
        $banner = $this->service->getBanner('about');
        $products = $this->product_type_service->getProducts();
        $products = $this->product_transformer->transformCollection($products);

        return view('Frontstage.zh.index', compact('banner', 'products'));
    }

    /**
     * 最新資訊
     *
     * @return View
     */
    public function news(): View
    {
        $banner = $this->service->getBanner('news');

        return view('Frontstage.zh.news', compact('banner'));
    }

    /**
     * 聯繫我們
     *
     * @return View
     */
    public function contact(): View
    {
        $banner = $this->service->getBanner('contact');

        return view('Frontstage.zh.contact', compact('banner'));
    }

    /**
     * 配對
     *
     * @return View
     */
    public function recommend(): View
    {
        $banner = $this->service->getBanner('recommend');

        return view('Frontstage.zh.recommend', compact('banner'));
    }

    /**
     * 產品
     *
     * @return View
     */
    public function product(): View
    {
        $banner = $this->service->getBanner('product');
        $third_links = ThirdLink::query()->get();
        $product_typies = $this->product_type_transformer->transformCollection(ProductType::query()->get());

        return view('Frontstage.zh.product', compact('banner', 'third_links', 'product_typies'));
    }

    /**
     * 文章
     *
     * @param Request $request
     *
     * @return View
     */
    public function article(Request $request): View
    {
        $banner = $this->service->getBanner('news');

        $title = '營養師教你吃冰消暑不怕胖，2招有助改善吃冰頭痛';
        $date = TimeHelper::formatjnFY('2022-08-08');
        $content = "炎炎夏日，你是不是也習慣來點冰涼的飲品或冰棒，瞬間消消暑氣呢？不過，不少人都有吃冰會感到頭有點疼痛的困擾，是否有什麼潛在的疾病？如何吃冰消暑又不怕肥胖呢？ <br><br>";

        return view('Frontstage.zh.article', compact('banner', 'title', 'date', 'content'));
    }

    /**
     * 產品列表
     *
     * @param Request $request
     *
     * @return View
     */
    public function productList(Request $request): View
    {
        $data = $request->all();
        $type_id = $data['id'];

        $types = ProductType::query()->get();
        $current_type = $types->filter(fn ($type) => $type->id == $request->id)->first();
        $products = $this->service->getProductsByType($type_id, Arr::get($data, 'page', 1));

        $path = $products->path();
        $products->setPath("$path?id=$type_id");

        return view(
            'Frontstage.zh.product_list',
            [
                'banner' => $this->service->getBanner('product'),
                'product_typies' => $this->product_type_transformer->transformCollection($types),
                'current_type' => $this->product_type_transformer->transform($current_type),
                'products' => $products->setCollection($this->product_transformer->transformCollection($products)),
            ]
        );
    }

    /**
     * 產品列表
     *
     * @param Request $request
     *
     * @return View
     */
    public function productDetail(Product $product): View
    {
        $banner = $this->service->getBanner('product');
        $product = $this->product_detail_transformer->transform($product);

        return view('Frontstage.zh.product_detail', compact('banner', 'product'));
    }
}
