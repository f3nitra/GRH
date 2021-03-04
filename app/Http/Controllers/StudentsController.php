<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\Console\Input\Input;

class StudentsController extends Controller
{
    public function list(){
        $students = Student::all();

        return view('list', [
            'students' => $students
        ]);
    }

    public function store(){
        $data = request()->validate([
            'firstname' => 'required|min:3',
            'lastname'  => 'required|min:3',
            'birthdate' => 'required|min:3',
            'national_id_card' => 'required|numeric',
            'adress' => 'required|min:3',
            'contact' => 'required|numeric',
            'email' => 'email|required|min:3',
            'faculty' => 'required|min:3',
            'level' => 'required|max:2',
            'sex' => 'required|min:3',
            'status' => 'required|min:3'
        ]);

        Student::create($data);

        return Redirect::to('list');
    }
}


