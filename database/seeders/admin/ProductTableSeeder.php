<?php

namespace Database\Seeders\admin;

use App\Models\admin\ProductTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB ;

class ProductTableSeeder extends Seeder
{

    public function run(): void
    {
        ProductTable::unguard();
        $tablePath = public_path('db/product_tables.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
