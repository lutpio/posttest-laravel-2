<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Speaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class SuperSpeakerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.super.speaker.index',[
            "title" => "Pemateri",
            "speakers"=> Speaker::all()
        ]);        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.super.speaker.create',[
            "title" => "Pemateri",
            "hrefReturn" => "/dashboard/super/speaker",            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {      
        $validatedData = $request->validate([
            'name' => 'required|min:4|max:255',        
            'email' => 'required|email:dns|unique:users',                    
            'photo'=> 'required|image|file|max:1024',//1 mb            
            'note' => 'required'
            
        ]);

        if($request->file('photo')){
            $validatedData['photo'] = $request->file('photo')->store('speaker-images');
        }
        
        $id = DB::table('users')->insertGetId(
            [
                'name' => $validatedData['name'], 
                'email' => $validatedData['email'], 
                'password' => Hash::make('123456'), 
                'role' => 'speaker'
            ]
        );
        
        Speaker::create([
                'user_id' => $id,
                'note' => $validatedData['note'],
                'photo' => $validatedData['photo'],
                'status' =>'aktif'
            ]);

        return redirect('/dashboard/super/speaker')->with('success', 'speaker berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show($speaker)
    {
        $data = Speaker::where('id',Crypt::decrypt($speaker))->first();

        
        
        return view('dashboard.super.speaker.show',[
            "title" => "Pemateri",
            "hrefReturn" => "/dashboard/super/speaker",
            "speaker"=> $data
        ]);  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Speaker $speaker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Speaker $speaker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Speaker $speaker)
    {
        //
    }
}
