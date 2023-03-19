<?php

namespace App\Http\Controllers;

use App\GlobalSetting;
use App\Http\Transformer\Settings\SettingTransformer;
use Illuminate\Http\Request;

class GlobalSettingController extends Controller
{
    protected const PAGE_CATEGORY = '設定';

    protected const PAGE_TITLE = '設定管理';

    public function __construct(protected SettingTransformer $transformer)
    {
    }

    public function index()
    {
        $setting = GlobalSetting::query()->get();

        return view('Backstage.Settings.index', [
            'page_categroy' => self::PAGE_CATEGORY,
            'page_title'    => self::PAGE_TITLE,
            'items'       => $this->transformer->transformCollection($setting),
        ]);
    }

    public function show(GlobalSetting $setting)
    {
        return response()->json($this->transformer->transform($setting));
    }


    public function edit(Request $request)
    {
        return view('Backstage.Settings.edit', [
            'page_categroy' => self::PAGE_CATEGORY,
            'page_title'    => self::PAGE_TITLE,
            'id'       => $request->id
        ]);
    }


    public function update(Request $request, GlobalSetting $setting)
    {
        return response()->json($setting->update($request->all()));
    }
}
