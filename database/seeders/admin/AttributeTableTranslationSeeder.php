<?php

namespace Database\Seeders\admin;


use App\Models\admin\AttributeTableTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class AttributeTableTranslationSeeder extends Seeder
{

    public function run(): void
    {
        AttributeTableTranslation::unguard();
        $tablePath = public_path('db/attribute_table_translations.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
