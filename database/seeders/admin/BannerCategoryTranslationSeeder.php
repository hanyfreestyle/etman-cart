<?php

namespace Database\Seeders\admin;

use App\Models\admin\BannerCategoryTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB ;

class BannerCategoryTranslationSeeder extends Seeder
{
    public function run(): void
    {
        BannerCategoryTranslation::unguard();
        $tablePath = public_path('db/banner_category_translations.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
