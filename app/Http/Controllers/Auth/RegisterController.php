<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
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

          return $requestData;

        $requestData['role'] = 'participant';

        //comentado para inserir o mutator

        //$password = bcrypt($requestData['password']);

        //$requestData['password'] = $password;

        User::create($requestData);
   }
}
