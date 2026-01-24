<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function show(){
        return "Hello Laravel 10";
    }

    public function show1(){
        return "Laravel 100";
    }

    public function index(){
        return view("index");
    }

    public function test(){
        return view("test", ["name"=> "Linith Seang","gender"=> "Male","address"=> "Pursat"]);
    }
    public function test2(){
        $students = [
            [
                "id"=> 1,
                "name"=> "Linith",
                "gender"=> "Male",
            ],
            [
                "id"=> 2,
                "name"=> "Near",
                "gender"=> "Female",
            ],
            [
                "id"=> 3,
                "name"=> "Dara",
                "gender"=> "Male",
            ],
            [
                "id"=> 4,
                "name"=> "Sok",
                "gender"=> "Male",
            ],
            [
                "id"=> 5,
                "name"=> "Minea",
                "gender"=> "Male",
            ],
            [
                "id"=> 6,
                "name"=> "Lika",
                "gender"=> "Female",
            ]
        ];
        return view("test2", ["students"=> $students]);
    }
    public function student(){
        $students = Student::all();
        return view("student", ["students"=> $students]);
    }

    public function studentStore(Request $request){
        dd($request->all());
    }
}
