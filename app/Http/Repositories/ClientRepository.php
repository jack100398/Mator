<?php

namespace App\Http\Repositories;

use App\Banner;

class ClientRepository
{
    public function getBanner(string $route): Banner
    {
        return Banner::query()->where('route', $route)->first();
    }
}
