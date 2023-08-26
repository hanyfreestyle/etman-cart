<?php

namespace Database\Seeders\admin;

use App\Models\admin\Banner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB ;

class BannerSeeder extends Seeder
{
    public function run(): void
    {
        Banner::unguard();
        $tablePath = public_path('db/banners.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
