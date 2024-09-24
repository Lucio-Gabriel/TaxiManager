<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function users(){

    return view('register.user_register');

    }

    public function users_action(Request $request)
    {

    $data = $request->only(
        'name',
        'cpf',
        'address',
        'telephone',
        'email',
        'password'
    );

    $data['password'] = Hash::make($data['password']);

    $userCreated = User::create($data);

    return redirect(route('home'));


    // dd($data);

    }

}
