<?php

namespace App\Http\Controllers;

use App\Http\Transformer\News\InputTransformer;
use App\Http\Transformer\News\NewsTransformer;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    protected const PAGE_CATEGORY = '最新消息';

    protected const PAGE_TITLE = '貼文管理';

    public function __construct(
        protected InputTransformer $input_transformer,
        protected NewsTransformer $transformer
    ) {
    }

    public function index()
    {
        $news = News::query()->get();

        return view('Backstage.News.index', [
            'page_categroy' => self::PAGE_CATEGORY,
            'page_title'    => self::PAGE_TITLE,
            'items'       => $this->transformer->transformCollection($news),
        ]);
    }

    public function create()
    {
        return view('Backstage.News.edit', [
            'page_categroy' => self::PAGE_CATEGORY,
            'page_title'    => self::PAGE_TITLE,
            'id'       => 0
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->input_transformer->transform($request->all());

        return response()->json(News::query()->create($data));
    }


    public function show(News $news)
    {
        return response()->json($this->transformer->transform($news));
    }


    public function edit(Request $request)
    {
        return view('Backstage.News.edit', [
            'page_categroy' => self::PAGE_CATEGORY,
            'page_title'    => self::PAGE_TITLE,
            'id'       => $request->id
        ]);
    }


    public function update(Request $request, News $news)
    {
        return response()->json($news->update($request->all()));
    }


    public function destroy(News $news)
    {
        $news->delete();
    }
}
