<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $student = student::all();
        return view('student',['students'=>$student,'layout'=>'index']);
    }

    public function create()
    {
        $student = student::all();
        return view('student',['students'=>$student,'layout'=>'create']);
    }

    public function store(Request $request)
    {
        $student = new student();
        $student->cne = $request->input('cne');
        $student->firstName = $request->input('firstName');
        $student->secondName = $request->input('secondName');
        $student->age = $request->input('age');
        $student->speciality = $request->input('speciality');
        $student->save();
        return redirect('/');
    }

    public function show($id)
    {
        $student = student::find($id);
        $student = student::all($id);
        return view('student',['students'=>$student,'student'=>$student,'layout'=>'show']);
    }

    public function update(Request $request, $id)
    {
        $student = student::find($id);
        $student->cne = $request->input('cne');
        $student->firstName = $request->input('firstName');
        $student->secondName = $request->input('secondName');
        $student->age = $request->input('age');
        $student->speciality = $request->input('speciality');
        $student->save();
        return redirect('/');
    }

    public function detroy($id)
    {
        $student = student::find($id);
        $student->delete();
        return redirect('/');
    }
}
