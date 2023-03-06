<?php

use App\Helpers\ConfigHelper;
use App\ThirdLink;
use Illuminate\Database\Seeder;

class ThirdLinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $links = ConfigHelper::getConfig('Seeder.ThirdLink');

        $links->each(function (array $link) {
            ThirdLink::query()->firstOrCreate($link);
        });
    }
}
