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
        $products = $this->product_type_service->getProducts();

        return view('Frontstage.zh.index', [
            'settings' => $this->service->getSettings(),
            'banner' => $this->service->getBanner('index'),
            'products' => $this->product_transformer->transformCollection($products)
        ]);
    }

    /**
     * 關於我們
     *
     * @return View
     */
    public function about(): View
    {
        return view('Frontstage.zh.about', [
            'settings' => $this->service->getSettings(),
            'banner' => $this->service->getBanner('about'),
        ]);
    }

    /**
     * 最新資訊
     *
     * @return View
     */
    public function news(): View
    {
        $news = $this->service->getNews();

        return view('Frontstage.zh.news', [
            'banner' => $this->service->getBanner('news'),
            'settings' => $this->service->getSettings(),
            'news' => $news->setCollection($this->news_transformer->transformCollection($news))
        ]);
    }

    /**
     * 聯繫我們
     *
     * @return View
     */
    public function contact(): View
    {
        return view('Frontstage.zh.contact', [
            'banner' => $this->service->getBanner('contact'),
            'settings' => $this->service->getSettings()
        ]);
    }

    /**
     * 配對
     *
     * @return View
     */
    public function recommend(): View
    {
        return view('Frontstage.zh.recommend', [
            'banner' => $this->service->getBanner('recommend'),
            'recommend_banner' => $this->service->getBanner('recomment_banner'),
            'settings' => $this->service->getSettings()
        ]);
    }

    /**
     * 產品
     *
     * @return View
     */
    public function product(): View
    {
        return view('Frontstage.zh.product', [
            'banner' => $this->service->getBanner('product'),
            'third_links' => ThirdLink::query()->get(),
            'product_typies' => $this->product_type_transformer->transformCollection(ProductType::query()->get()),
            'settings' => $this->service->getSettings()
        ]);
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
            'news' => $this->news_transformer->transform($news),
            'settings' => $this->service->getSettings()
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
                'settings' => $this->service->getSettings()
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
        $settings = $this->service->getSettings();

        return view('Frontstage.zh.product_detail', compact('banner', 'product', 'settings'));
    }
}
