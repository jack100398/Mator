<?php

namespace App\Http\Services;

use App\Banner;
use App\Http\Repositories\ClientRepository;

class ClientService
{
    /** @var ClientRepository */
    private $repository;

    public function __construct(ClientRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getBanner(string $route): Banner
    {
        $banner = $this->repository->getBanner($route);

        if (!filter_var($banner->desktop_url, FILTER_VALIDATE_URL)) {
            $banner->desktop_url = asset($banner->desktop_url);
        }

        if (!filter_var($banner->mobile_url, FILTER_VALIDATE_URL)) {
            $banner->desktop_url = asset($banner->mobile_url);
        }

        return $banner;
    }
}
