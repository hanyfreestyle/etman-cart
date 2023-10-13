<?php

namespace Database\Seeders\customer;

use App\Models\customer\UserCustomersProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB ;

class UserCustomersProductSeeder extends Seeder
{

    public function run(): void
    {
        UserCustomersProduct::unguard();
        $tablePath = public_path('db/user_customers_products.sql');
        DB::unprepared(file_get_contents($tablePath));
    }
}
