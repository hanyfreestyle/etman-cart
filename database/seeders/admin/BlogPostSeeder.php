<?php

namespace Database\Seeders\admin;

use App\Models\admin\BlogPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB ;


class BlogPostSeeder extends Seeder
{

    public function run(): void
    {
        BlogPost::unguard();
        $tablePath = public_path('db/blog_posts.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
