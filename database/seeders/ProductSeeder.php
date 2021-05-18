<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
           'name' => 'Iphone 12 Mini',
           'price' => 8.2,
           'information' => 'thats awesomeee',
           'product_category' => 1,
        ]);
    }
}
