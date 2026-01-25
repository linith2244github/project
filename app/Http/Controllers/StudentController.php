<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use function Ramsey\Uuid\v1;

class StudentController extends Controller
{
    public function index(){
        return view("students.index");
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(),[
            'name' => 'required|string',
            'course' => 'required|string'
        ]);
        if($validator->fails()){
            return response()->json([
                "status"=> false,
                "message"=> "Validator error",
                "errors"=> $validator->errors()
            ]);
        }
        try{
            $student = new  Student();
            $student->name = $request->name;
            $student->gender = $request->gender;
            $student->course = $request->course;
            $student->save();

            return response()->json([
                "status"=> true,
                "message"=> "Create student success"
            ]);

        }catch(\Exception $e){
            return response()->json([
                "status"=> false,
                "message"=> "An error occured while creating student",
                "errors"=> $e->getMessage()
            ]);
        }
    }
}
