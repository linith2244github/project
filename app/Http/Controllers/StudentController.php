<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class StudentController extends Controller
{
    public function index(){
        return view("students.index");
    }
}
