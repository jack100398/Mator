<?php

use App\GlobalSetting;
use App\Helpers\ConfigHelper;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = ConfigHelper::getConfig('Seeder.Setting');

        $settings->each(fn (array $setting) => GlobalSetting::query()->firstOrCreate($setting));
    }
}
