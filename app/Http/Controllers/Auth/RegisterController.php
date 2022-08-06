<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\{User, Address};
use App\http\Requests\Auth\RegisterRequest;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
   public function create()
   {
        return view('auth.register');
   }
   public function store(RegisterRequest $request)
   {
        $requestData = $request->all();

        return $requestData;

        $requestData['user']['role'] = 'participant';

        //comentado para inserir o mutator

        //$password = bcrypt($requestData['password']);

        //$requestData['password'] = $password;

        $user = User::create($requestData['user']);

        //$requestData['address']['user_id'] = $user->id;

       //Address::create($requestData['address']);

       $user->address()->create($requestData['address']);

       foreach($requestData['phones'] as $phone){
            $user->phones()->create($phone);
       }
   }
}
