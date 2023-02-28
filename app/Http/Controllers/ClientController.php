<?php

namespace App\Http\Controllers;

use App\Helpers\TimeHelper;
use App\Http\Services\ClientService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClientController extends Controller
{
    /** @var ClientService */
    private $service;


    public function __construct(ClientService $service)
    {
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

        return view('Frontstage.zh.index', compact('banner'));
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

        return view('Frontstage.zh.product', compact('banner'));
    }

    /**
     * 文章
     *
     * @param Request $requeset
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
     * @param Request $requeset
     *
     * @return View
     */
    public function productList(Request $request): View
    {
        $banner = $this->service->getBanner('product');

        return view('Frontstage.zh.product_list', compact('banner'));
    }

    /**
     * 產品列表
     *
     * @param Request $requeset
     *
     * @return View
     */
    public function productDetail(Request $request): View
    {
        $banner = $this->service->getBanner('product');

        return view('Frontstage.zh.product_detail', compact('banner'));
    }
}
