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
                "product_name" => "I Phone 13 Pro Max",
                "quantity" => "10",
                "price" => "400.50",
                "created_at" => now(),
                "updated_at"=> now(),
            ],
            [
                "product_name" => "I Phone 15 Pro Max",
                "quantity" => "13",
                "price" => "500.50",
                "created_at" => now(),
                "updated_at"=> now(),
            ],
            [
                "product_name" => "I Phone 12 Pro Max",
                "quantity" => "15",
                "price" => "300.50",
                "created_at" => now(),
                "updated_at"=> now(),
            ],
            [
                "product_name" => "I Phone 11 Pro Max",
                "quantity" => "20",
                "price" => "200.50",
                "created_at" => now(),
                "updated_at"=> now(),
            ],
            [
                "product_name" => "I Phone 16 Pro Max",
                "quantity" => "30",
                "price" => "600.50",
                "created_at" => now(),
                "updated_at"=> now(),
            ],
            [
                "product_name" => "I Phone 17 Pro Max",
                "quantity" => "10",
                "price" => "1900.50",
                "created_at" => now(),
                "updated_at"=> now(),
            ],
            [
                "product_name" => "I Phone 14 Pro Max",
                "quantity" => "20",
                "price" => "500.50",
                "created_at" => now(),
                "updated_at"=> now(),
            ],
            [
                "product_name" => "Sumsung Galaxy S21 Ultra",
                "quantity" => "10",
                "price" => "200.50",
                "created_at" => now(),
                "updated_at"=> now(),
            ],
            [
                "product_name" => "Sumsung Galaxy S24 Ultra",
                "quantity" => "10",
                "price" => "500.50",
                "created_at" => now(),
                "updated_at"=> now(),
            ],
            [
                "product_name" => "Sumsung Galaxy S26 Ultra",
                "quantity" => "20",
                "price" => "1900.50",
                "created_at" => now(),
                "updated_at"=> now(),
            ],
            [
                "product_name" => "Sumsung Galaxy S22 Ultra",
                "quantity" => "50",
                "price" => "300.50",
                "created_at" => now(),
                "updated_at"=> now(),
            ],
        ];
        DB::table("products")->insert($products);
    }
}
