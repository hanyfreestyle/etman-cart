<?php

namespace Database\Seeders\admin;

use App\Models\admin\BannerTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB ;

class BannerTranslationSeeder extends Seeder
{
    public function run(): void
    {
        BannerTranslation::unguard();
        $tablePath = public_path('db/banner_translations.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
