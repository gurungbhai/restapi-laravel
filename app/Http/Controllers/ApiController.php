<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use App\Models\Student;

class ApiController extends Controller
{
    public function create(Request $request)
    {
       
        $student= new Student();

        $student->fname= $request-> input('fname');
        $student->lname= $request-> input('lname');
        $student->email= $request-> input('email');
        $student->password= $request-> input('password');
        $student->save();
        return response()->json($student);

    }
    public function show()
    {
       
        $student= Student::all();
        return response()->json($student);

    }
    
    public function showbyid($id)
    {
        $student =Student::find($id); # this can find data base through id
        return response()->json($student);
    }

    public function updatebyid(Request $request, $id)
    {
        $student =Student::find($id);
        
        $student->fname= $request-> input('fname');
        $student->lname= $request-> input('lname');
        $student->email= $request-> input('email');
        $student->password= $request-> input('password');
        $student->save();
        return response()->json($student);
    }

    public function delete(Request $request,$id)
    {
        $student =Student::find($id);
        $student->delete();
        return response()->json($student);
    }


}
