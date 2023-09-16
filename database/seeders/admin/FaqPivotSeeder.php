<?php

namespace Database\Seeders\admin;

use App\Models\admin\FaqPivot;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class FaqPivotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FaqPivot::unguard();
        $tablePath = public_path('db/faqcategory_faq.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
