<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

use App\Http\Requests;

class StudentsController extends Controller
{

    /**
     * @return mixed
     */
    public function index()
    {
        $students = Student::all();

        return view('students.index', compact('students'));
    }

    /**
     * @param Request $request
     *
     * @return mixed
     */
    public function store(Request $request)
    {
        $this->validate($request, [
          'name'  => 'required',
          'email' => 'required|email',
        ]);

        $student = Student::create($request->all());

        return redirect()
          ->back()
          ->withSuccess('Thanks, dude bro!');
    }

}
