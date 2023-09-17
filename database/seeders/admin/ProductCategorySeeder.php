<?php

namespace Database\Seeders\admin;

use App\Models\admin\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProductCategorySeeder extends Seeder
{
    public function run(): void
    {
        ProductCategory::unguard();
        $tablePath = public_path('db/product_category.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
