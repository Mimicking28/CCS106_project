<?php

namespace App\Http\Controllers;

use App\Http\Requests\EnrollmentRequest;
use App\Models\Enrollment;
use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    public function create()
    {
        $students = Student::all();
        $courses = Course::all();

        return view('dashboard.enrollment.add', compact('students', 'courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param EnrollmentRequest $request
     * @return RedirectResponse
     */
    public function store()
    {
    

        $enrollments = Enrollment::create([
            'student_id' => request()->get('student'),
            'course_id' =>request()->get('course'),
        ]);

        return redirect()->route('enrollment')->with('success', 'Successfully Registered!');
    }

    public function list()
    {
        $enrollments = Enrollment::all();
        return view('dashboard.enrollment.list', ['enrollment' => $enrollments]);
    }



    public function destroy($id)
    {
        $enrollments = Enrollment::findorfail($id);
        $enrollments -> delete();
        return back()->with('success' , 'Enrollment has been deleted');
    }

}