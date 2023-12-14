<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
//declarar el modelo que se requiere usar
use App\Models\User;

class UserController extends Controller
{
    const JOB_SEEKER='seeker';
    public function createSeeker(){

        return(view('user.seeker-register'));
    }

 
    public function storeSeeker(){
        request()->validate([
            'name' => ['required','string', 'max:255'],
            'email' => ['required','string', 'email', 'max:255','unique:users'],
            'password' => ['required','string', 'max:255']         
        ]);

        User::create([
            'name' => request('name'),
            'username' => request('username'),
            'email' => request('email'),
            'password' => bcrypt(request ('password')),
            'status' => "activo",
            'about' => "",            
            'user_type' => self::JOB_SEEKER

        ]);
        return back();
    }
}
