<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function guest_index(){
        return view('courses',[
            'courses'=>Course::all()
        ]);
    }
    public function auth_index(){
        return view('dashboard.participant.course.index',[
            "title" => "Kelas",
            'courses'=>Course::all()
        ]);
    }
    public function show(Course $course){
        return view('dashboard.participant.course.show',[
            "title" => "Kelas",
            "hrefReturn" => "/dashboard/participant/courses",
            "course"=> $course
        ]);
    }
}
