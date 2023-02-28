<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BannerController extends Controller
{
    /** @var string 主標題 */
    protected const PAGE_CATEGORY = 'Banner';

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $banners = Banner::query()->get();

        return view('Backstage.Banner.banner', [
            'page_categroy' => self::PAGE_CATEGORY,
            'page_title'    => 'Banner總覽',
            'banners'       => $banners
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return response()->json(Banner::query()->create($request->all()));
    }

    /**
     * Display the specified resource.
     *
     * @param  Banner $banner
     * @return JsonResponse
     */
    public function show(Banner $banner): JsonResponse
    {
        return response()->json($banner);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Request $request
     * @return View
     */
    public function edit(Request $request): View
    {
        return view('Backstage.Banner.editBanner', [
            'page_categroy' => self::PAGE_CATEGORY,
            'page_title'    => 'Banner修改',
            'id'       => $request->id
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        return response()->json($banner->update($request->all()));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banner  $banner
     * @return JsonResponse
     */
    public function destroy(Banner $banner): JsonResponse
    {
        return response()->json($banner->delete());
    }
}
