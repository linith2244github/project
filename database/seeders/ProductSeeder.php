<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                "product_name" => "I Phone 13 Pro",
                "quantity" => 10,
                "price" => 400.50,
                "created_at" => now(),
                "updated_at"=> now(),
            ],
            [
                "product_name" => "I Phone 12 Pro",
                "quantity" => 20,
                "price" => 300.50,
                "created_at" => now(),
                "updated_at"=> now(),
            ],
            [
                "product_name" => "I Phone 11 Pro",
                "quantity" => 30,
                "price" => 200.50,
                "created_at" => now(),
                "updated_at"=> now(),
            ],
            [
                "product_name" => "I Phone 15 Pro",
                "quantity" => 6,
                "price" => 500.50,
                "created_at" => now(),
                "updated_at"=> now(),
            ],
            [
                "product_name" => "I Phone 16 Pro",
                "quantity" => 5,
                "price" => 600.50,
                "created_at" => now(),
                "updated_at"=> now(),
            ],
            [
                "product_name" => "Sumsung Galaxy S21 Ultra",
                "quantity" => 20,
                "price" => 200.50,
                "created_at" => now(),
                "updated_at"=> now(),
            ]
        ];

        DB::table("products")->insert($products);
    }
}
