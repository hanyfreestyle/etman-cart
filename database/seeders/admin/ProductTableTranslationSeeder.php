<?php

namespace Database\Seeders\admin;

use App\Models\admin\ProductTableTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB ;

class ProductTableTranslationSeeder extends Seeder
{

    public function run(): void
    {
        ProductTableTranslation::unguard();
        $tablePath = public_path('db/product_table_translations.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
