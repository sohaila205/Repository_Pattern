<?php

namespace App\Http\Controllers\api;

use App\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\RepositoryInterface\UserRepositoryInterface;

class UserController extends Controller
{
    
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

   

    public function getAllUsers()
    {
        
        $user = $this->userRepository->all();

        return response()->json(['user' => $user, 'code' => 200]);
    }

}
