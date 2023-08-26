<?php

namespace Database\Seeders\admin;

use App\Models\admin\BlogPostTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB ;


class BlogPostTranslationSeeder extends Seeder
{

    public function run(): void
    {
        BlogPostTranslation::unguard();
        $tablePath = public_path('db/blog_post_translations.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
