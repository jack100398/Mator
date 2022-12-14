<?php

namespace App\Http\Services;

use App\Commodity;
use App\Http\Repositories\CommodityRepository;
use Illuminate\Database\Eloquent\Collection;

class CommodityService 
{
    /** @var CommodityRepository */
    private $repository;

    public function __construct(CommodityRepository $repository)
    {
        $this->repository = $repository;
    }

    public function transformCommodities(Collection $commodities, array $data)
    {
        return $commodities->transform(function (Commodity $commodity) use ($data) {
            //升溫 = 熱抗 * (荷重 + 可動子重量) ^ 2 * 電阻 / 推力定數 ^ 2 / 需要時間 * 總時間
            $weight_param = ($data['weight'] + $commodity->kgf) * ($data['weight'] + $commodity->kgf);
            $force_constant = $commodity->force_constant * $commodity->force_constant;
            $need_time = $data['acceleration_time'] * 2 + $data['constant_time'];
            $heat_up = $commodity->heat_resistance * $weight_param * $commodity->ohm / $force_constant / $need_time * $data['total_time'];
            $commodity->setAttribute('heat_up', $heat_up);

            //需要電流  = 加速度 * (荷重 + 可動子重量) / 推力定數
            $need_current = $data['speed_up'] * ($data['weight'] + $commodity->kgf) / $commodity->force_constant;
            $commodity->setAttribute('need_current', $need_current);

            //需要電壓 = 電流 * 指定馬達阻抗 + 最大速度(mm/sec) / 1000 * 指定馬達 逆起電力定數
            $need_voltage = $need_current * $commodity->ohm + ($data['acceleration'] * $data['acceleration_time'] * 9.8) / 1000 * $commodity->Siemens;
            $commodity->setAttribute('need_voltage', $need_voltage);

            return $commodity;
        })->filter(function (Commodity $commodity) {
            return $commodity->heat_up <= 50 && $commodity->need_voltage <= 85;
        });
    }

    /**
     * 基本資訊符合的馬達
     *
     * @param array $conditions
     * @return Collection
     */
    public function searchCommoditiesByInfo(array $conditions): Collection
    {
        return $this->repository->searchCommoditiesByInfo($conditions);
    }

    /**
     * 加速度中加速度
     *
     * @param array $data
     * @return float
     */
    public function countSpeedingUp(array $data)
    {
        // '9.8 * ( 加速度 + 摩擦係數 + (垂直1/平行0 * 以時間決定?1:-1) )
        $is_time_value = $data['video'] == 'option1' ? 1 : -1;
        $is_direction_value = $data['direction'] == 0 ? 1 : 0;

        return 9.8 * ($data['acceleration'] + 0.1 + ($is_time_value * $is_direction_value));
    }

    /**
     * 加速度時間
     *
     * @param float $speeding_up
     * @param array $data
     * @return float
     */
    public function countSpeedUpTime(float $speeding_up, array $data): float
    {
        return $speeding_up * $speeding_up * $data['acceleration_time'] / 1000;
    }

    /**
     * 定速移動時間
     *
     * @param array $data
     * @return float
     */
    public function countConstantTime(array $data):float
    {
        $is_direction_value = $data['direction'] == 0 ? 1 : 0;

        $speed = 9.8 * (0.1 + $is_direction_value);

        return $speed * $speed * $data['constant_time'] / 1000;
    }
}
