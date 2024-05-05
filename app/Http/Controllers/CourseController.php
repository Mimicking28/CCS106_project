<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Http\Requests\CourseStudentRequest;
use App\Http\Requests\StudentRequest;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Enrollment;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function create(){

        $courses = Course::with('teacher')->get();

        return view('dashboard.courses.add', [
            'courses' =>  $courses,
            'teachers' => Teacher::all()
        ]); 

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CourseRequest $request
     * @return RedirectResponse
     */

    public function store()
     {
        $course = Course::create([
            'course_name' => request()->get('course_name', ''),
            'unit' => request()->get('unit', ''),
            'location' => request()->get('location', ''),
            'schedule' => request()->get('schedule', ''),
            'teacher_id' => request()->get('teacher', '')
        ]); 

        return redirect()->route('course')->with('success', 'Sucessfully Registered!');
    }


    public function  list()
    {
        $course = Course::all();
        return view('dashboard.courses.list' ,['course' => $course]);
    }

    // public function show($id)
    // {
    //     $course = Course::findOrFail($id);
    //     $teachers = Teacher::all(); // Retrieve all teachers
    
    //     return view('dashboard.courses.edit', compact('course', 'teachers'));
    // }   

    // public function update(CourseRequest $request, $id){
    //     $validated = $request->validated();
    //     $info = Student::findorfail($id);
    //     $info->update($validated);

    //     $request->session()->regenerate();
    //     return redirect('/student')->with('success', "Successfully Edited");
    // }


    public function destroy($id)
    {
        $course = Course::findorfail($id);
        $course -> delete();
        return back()->with('success' , 'Course has been deleted');
    }



}
