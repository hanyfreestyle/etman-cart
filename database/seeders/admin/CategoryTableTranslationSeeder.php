<?php

namespace Database\Seeders\admin;


use App\Models\admin\CategoryTableTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB ;

class CategoryTableTranslationSeeder extends Seeder
{

    public function run(): void
    {
       CategoryTableTranslation::unguard();
        $tablePath = public_path('db/category_table_translations.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
