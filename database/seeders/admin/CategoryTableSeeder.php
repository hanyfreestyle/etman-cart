<?php

namespace Database\Seeders\admin;


use App\Models\admin\CategoryTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB ;


class CategoryTableSeeder extends Seeder
{

    public function run(): void
    {
        CategoryTable::unguard();
        $tablePath = public_path('db/category_tables.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
