<?php

namespace Database\Seeders\admin;

use App\Models\admin\AttributeTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB ;

class AttributeTableSeeder extends Seeder
{

    public function run(): void
    {
        AttributeTable::unguard();
        $tablePath = public_path('db/attribute_tables.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
