<?php

namespace App\Http\Controllers;
use App\Detention;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function show($student_slug)
    {
        $student = \App\Student::where('slug', $student_slug)->first();

        if (!$student) {
            abort(404, 'Student not found');
        }

        $view = view('student/show');
        $view->student = $student;
        return $view;
    }

    public function index()
    {
        $students = \App\Student::all()->orderBy('name', 'ASC')->get();

        if (!$students) {
            abort(404, 'Students not found');
        }

        $view = view('student/index');
        $view->students = $students;
        return $view;
    }

    public function store(Request $request)
    {
        
        $detention = new Detention();
        $detention->subject = request('subject');
        $detention->description = request('description');

        $detention->save();

        return redirect(action('HomeController@index'));
    }
}
