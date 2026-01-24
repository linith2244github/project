<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            [
                "id"=> 1,
                "name"=> "Linith",
                "gender"=> "Male",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> 2,
                "name"=> "Near",
                "gender"=> "Female",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> 3,
                "name"=> "Dara",
                "gender"=> "Male",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> 4,
                "name"=> "Sok",
                "gender"=> "Male",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> 5,
                "name"=> "Minea",
                "gender"=> "Male",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> 6,
                "name"=> "Lika",
                "gender"=> "Female",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> 7,
                "name"=> "Tena",
                "gender"=> "Male",
                "created_at"=> now(),
                "updated_at"=> now()
            ],
            [
                "id"=> 8,
                "name"=> "Mina",
                "gender"=> "Female",
                "created_at"=> now(),
                "updated_at"=> now()
            ]
        ];
        DB::table("students")->insert($students);
    }
}
