<?php

namespace Database\Seeders\admin;

use App\Models\admin\OurClient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB ;

class OurClientSeeder extends Seeder
{

    public function run(): void
    {
        OurClient::unguard();
        $tablePath = public_path('db/our_clients.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
