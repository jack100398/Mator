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
        return $this->repository->getBanner($route);
    }
}
