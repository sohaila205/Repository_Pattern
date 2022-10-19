<?php

namespace App\Http\Controllers\api;

use App\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    

   

    public function getAllUsers()
    {
        
        $user = $this->userRepository->all();

        return response()->json(['user' => $user, 'code' => 200]);
    }

}
