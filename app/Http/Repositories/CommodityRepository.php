<?php

namespace App\Http\Repositories;

use App\Commodity;

class CommodityRepository 
{
    public function searchCommoditiesByInfo(array $conditions)
    {
        return Commodity::query()
            ->when($conditions['direction'] == 0, function ($query) use ($conditions) {
                $query->where('vertical_load', '>=', $conditions['weight']);
            })
            ->when($conditions['direction'] == 1, function ($query) use ($conditions) {
                $query->where('horizontal_load', '>=', $conditions['weight']);
            })
            ->where('resolution', $conditions['resolution'])
            ->where('travel', $conditions['distance'])
            ->get();
    }
}
