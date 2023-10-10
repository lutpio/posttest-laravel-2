<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Course;
use App\Models\Speaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class SuperCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.super.course.index',[
            "title" => "Kelas",
            "courses"=> Course::all(),
            "speakerr"=> DB::table('speakers')->count(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $speaker = Speaker::where('status','aktif')->with('user')->get();
        return view('dashboard.super.course.create',[
            "title" => "Kelas",
            "hrefReturn" => "/dashboard/super/courses",
            "speaker" => $speaker,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',        
            'speaker_id' => 'required',
            'image'=> 'image|file|max:1024',//1 mb
            'location'=> 'required|max:255',//1 mb
            'price'=> 'required|numeric',//1 mb
            'body' => 'required'
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('course-images');
        }                    
        $validatedData['slug'] = $request->slug . "-" . time();
        $validatedData['status'] = "aktif";
        
        Course::create($validatedData);
        return redirect('/dashboard/super/courses')->with('success', 'post berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        return view('dashboard.super.course.show',[
            "title" => "Kelas",
            "hrefReturn" => "/dashboard/super/courses",
            "course"=> $course
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }

    
}
