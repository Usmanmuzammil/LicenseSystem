<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::create([
            'key' =>'site_name',
            'value' =>'dls',
        ]);

        Setting::create([
            'key' =>'site_email',
            'value' =>'info@dls.com',
        ]);

        Setting::create([
            'key' =>'app_enviroment',
            'value' =>'local',
        ]);

        Setting::create([
            'key' =>'app_debug',
            'value' =>'true',
        ]);

        Setting::create([
            'key' =>'site_logo',
            'value' =>'assets/backend/uploads/site_logo/logo.png',
        ]);

        Setting::create([
            'key' =>'site_favicon',
            'value' =>'assets/backend/uploads/site_favicon/favicon.png',
        ]);

        
    }
}
