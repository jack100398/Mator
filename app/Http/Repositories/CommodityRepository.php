<?php

namespace App\Http\Repositories;

use App\Commodity;

class CommodityRepository
{
    public function searchCommoditiesByInfo(array $conditions)
    {
        return Commodity::query()
            ->where('linear_ruler', $conditions['linear_ruler'])
            ->where('resolution', $conditions['resolution'])
            ->get();
    }
}
