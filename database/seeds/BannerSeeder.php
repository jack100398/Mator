<?php

use App\Banner;
use App\Helpers\ConfigHelper;
use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banners = ConfigHelper::getConfig('Seeder.Banner');

        $banners->each(function (array $banner) {
            Banner::query()->firstOrCreate($banner);
        });
    }
}
