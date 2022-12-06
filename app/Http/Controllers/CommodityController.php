<?php

namespace App\Http\Controllers;

use App\Commodity;
use Illuminate\Http\Request;

class CommodityController extends Controller
{
    public function index() {
        return view('commodity');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $commodity = Commodity::query()->create($data);
        
        return response()->json($commodity->id);
    }

    public function getCommodities()
    {
        $commodities = Commodity::query()->get()->map(function (Commodity $commodity) {
            return view('component.card', ['name' => 'aaaa']);
        });

        dd($commodities);

        return response($commodities);
    }
}
