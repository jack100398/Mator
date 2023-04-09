<?php

namespace App\Http\Controllers;

use App\Http\Services\ClientService;
use App\Http\Services\ProductTypeService;
use App\Http\Transformer\News\NewsTransformer;
use App\Http\Transformer\Product\ProductDetailTransformer;
use App\Http\Transformer\Product\ProductTransformer;
use App\Http\Transformer\ProductType\ProductTypeTransformer;
use App\Http\Transformer\SliderImage\SliderImageTransformer;
use App\News;
use App\Product;
use App\ProductType;
use App\SliderImage;
use App\ThirdLink;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\View\View;

class EnClientController extends Controller
{
    public function __construct(
        protected ClientService $service,
        protected ProductTypeTransformer $product_type_transformer,
        protected ProductTransformer $product_transformer,
        protected ProductTypeService $product_type_service,
        protected ProductDetailTransformer $product_detail_transformer,
        protected NewsTransformer $news_transformer,
        protected SliderImageTransformer $slider_image_transformer
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
        $product_typies = $this->service->getProductTypesBySite('en');
        $slider_images = SliderImage::query()->where('disabled', true)->get();

        return view('Frontstage.en.index', [
            'settings' => $this->service->getSettings(),
            'banner' => $this->service->getBanner('index', 'en'),
            'slider_images' => $this->slider_image_transformer->transformCollection($slider_images),
            'product_tyipes' => $this->product_type_transformer->transformCollection($product_typies)
        ]);
    }

    /**
     * 關於我們
     *
     * @return View
     */
    public function about(): View
    {
        return view('Frontstage.en.about', [
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
        $news = $this->service->getNews('en');

        return view('Frontstage.en.news', [
            'banner' => $this->service->getBanner('news', 'en'),
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
        return view('Frontstage.en.contact', [
            'banner' => $this->service->getBanner('contact', 'en'),
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
        return view('Frontstage.en.recommend', [
            'banner' => $this->service->getBanner('recommend', 'en'),
            'recommend_banner' => $this->service->getBanner('recomment_banner', 'en'),
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
        $product_types = $this->service->getProductTypesBySite('en');

        return view('Frontstage.en.product', [
            'banner' => $this->service->getBanner('product', 'en'),
            'third_links' => ThirdLink::query()->get(),
            'product_typies' => $this->product_type_transformer->transformCollection($product_types),
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
        return view('Frontstage.en.article', [
            'banner' => $this->service->getBanner('news', 'en'),
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

        $types = $this->service->getProductTypesBySite('en');
        $current_type = $types->filter(fn ($type) => $type->id == $request->id)->first();
        $products = $this->service->getProductsByType($type_id, Arr::get($data, 'page', 1));

        $path = $products->path();
        $products->setPath("$path?id=$type_id");

        return view(
            'Frontstage.en.product_list',
            [
                'banner' => $this->service->getBanner('product', 'en'),
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

        return view('Frontstage.en.product_detail', compact('banner', 'product', 'settings'));
    }

    /**
     * 產品搜尋
     *
     * @param Request $request
     *
     * @return View
     */
    public function search(Request $request): View
    {
        $products = $this->service->searchProduct($request->all());

        return view('Frontstage.en.search_result', [
            'products' => $this->product_transformer->transformCollection($products),
            'banner' => $this->service->getBanner('product'),
            'settings' => $this->service->getSettings()
        ]);
    }
}
