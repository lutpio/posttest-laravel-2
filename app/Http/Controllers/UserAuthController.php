<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    public function registration( Request $request ){
        $validate = $request->validate([
            'name' => 'required|min:4|max:255',
            'nickname' => 'required|min:3',
            'email' => 'required|email:dns|unique:users',
            'password'=> 'required|min:5|max:255|confirmed',
        ]);       


        // https://www.tutorialspoint.com/how-to-get-the-last-inserted-id-using-laravel-eloquent
        // https://laravel.com/docs/10.x/queries#auto-incrementing-ids

        // Query Builder
        // Create
        $id = DB::table('users')->insertGetId(
            [
                'name' => $request->name, 
                'email' => $request->email, 
                'password' => Hash::make($request->password), 
                'role' => 'participant'
            ]
        );               

        // ORM
        // Create
        Participant::create([
            'user_id' => $id,
            'nickname' => $request->nickname,
        ]);

        // https://laravel.com/docs/10.x/redirects#redirecting-with-flashed-session-data
        return redirect('/')->with('success', 'Berhasil daftar, silahkan login');

        
    }
    // https://laravel.com/docs/10.x/authentication#authenticating-users
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
                       
            return redirect()->intended('/dashboard');            
           

        }
        // https://laravel.com/docs/10.x/redirects#redirecting-with-flashed-session-data
        return back()->with('error','Email atau password salah');
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
