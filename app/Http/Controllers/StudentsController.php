<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

use App\Http\Requests;

class StudentsController extends Controller
{

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
