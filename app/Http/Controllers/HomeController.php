<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home',[
            'courses'=>Course::take(2)->get()
        ]);
    }
}
