<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate(
            [
                'name' => 'admin'
            ],
            [
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
            ]
        );

        $this->call(BannerSeeder::class);
        $this->call(ThirdLinkSeeder::class);
        $this->call(SettingSeeder::class);
    }
}
