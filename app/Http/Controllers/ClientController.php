<?php

namespace App\Http\Controllers;

use App\Helpers\TimeHelper;
use App\Http\Services\ClientService;
use App\Http\Services\ProductTypeService;
use App\Http\Transformer\News\NewsTransformer;
use App\Http\Transformer\Product\ProductDetailTransformer;
use App\Http\Transformer\Product\ProductTransformer;
use App\Http\Transformer\ProductType\ProductTypeTransformer;
use App\News;
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
        protected ProductDetailTransformer $product_detail_transformer,
        protected NewsTransformer $news_transformer
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
        $news = $this->service->getNews();

        return view('Frontstage.zh.news', [
            'banner' => $banner,
            'news' => $news->setCollection($this->news_transformer->transformCollection($news)),
        ]);
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
    public function article(News $news): View
    {
        return view('Frontstage.zh.article', [
            'banner' => $this->service->getBanner('news'),
            'news' => $this->news_transformer->transform($news)
        ]);
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
