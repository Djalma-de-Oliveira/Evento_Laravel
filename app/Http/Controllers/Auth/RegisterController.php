<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Address;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
   public function create()
   {
        return view('auth.register');
   }
   public function store(Request $request)
   {
        $requestData = $request->all();


        $requestData['user']['role'] = 'participant';

        //comentado para inserir o mutator

        //$password = bcrypt($requestData['password']);

        //$requestData['password'] = $password;

        $user = User::create($requestData['user']);

        $requestData['address']['user_id'] = $user->id;

        Address::create($requestData['address']);
   }
}
