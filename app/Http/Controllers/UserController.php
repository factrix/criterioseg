<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
//declarar el modelo que se requiere usar
use App\Models\User;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    const JOB_SEEKER='seeker';
    public function createSeeker(){

        return(view('user.seeker-register'));
    }

 
    public function storeSeeker(){
        /*
        se usa para validar la respuesta se elimina pr que se usa el seekerregistrationrequest-php creado en 
        php artisan make:request SeekerResgistrationRequest 
        request()->validate([
            'name' => ['required','string', 'max:255'],
            'email' => ['required','string', 'email', 'max:255','unique:users'],
            'password' => ['required','string', 'max:255']         
        ]);*/

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

    public function login(){

        return(view('user.login'));
    }

    public function postLogin(Request $request){

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $credentails = $request->only ('email', 'password');

        if(Auth::attempt($credentails)){
            return redirect()->intended('dashboard');

        }
    }
}
