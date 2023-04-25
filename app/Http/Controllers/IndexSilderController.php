<?php

namespace App\Http\Controllers;

use App\Http\Transformer\IndexSilder\IndexSilderTransformer;
use App\Http\Transformer\IndexSilder\InputTransformer;
use App\IndexSilder;
use Illuminate\Http\Request;

class IndexSilderController extends Controller
{
    protected const PAGE_CATEGORY = '首頁內文輪播';

    protected const PAGE_TITLE = '首頁內文輪播管理';

    public function __construct(
        protected InputTransformer $input_transformer,
        protected IndexSilderTransformer $transformer
    ) {
    }

    public function index(Request $request)
    {
        $index_silder = IndexSilder::query()->get();

        return view('Backstage.IndexSilder.index', [
            'page_categroy' => self::PAGE_CATEGORY,
            'page_title'    => self::PAGE_TITLE,
            'items'         => $this->transformer->transformCollection($index_silder),
            'site'          => $request->site
        ]);
    }

    public function create()
    {
        return view('Backstage.IndexSilder.edit', [
            'page_categroy' => self::PAGE_CATEGORY,
            'page_title'    => self::PAGE_TITLE,
            'id'       => 0
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->input_transformer->transform($request->all());

        return response()->json(IndexSilder::query()->create($data));
    }


    public function show(IndexSilder $item)
    {
        return response()->json($this->transformer->transform($item));
    }


    public function edit(Request $request)
    {
        return view('Backstage.IndexSilder.edit', [
            'page_categroy' => self::PAGE_CATEGORY,
            'page_title'    => self::PAGE_TITLE,
            'id'       => $request->id
        ]);
    }


    public function update(Request $request, IndexSilder $item)
    {
        $data = $this->input_transformer->transform($request->all());

        return response()->json($item->update($data));
    }


    public function destroy(IndexSilder $item)
    {
        $item->delete();
    }
}
