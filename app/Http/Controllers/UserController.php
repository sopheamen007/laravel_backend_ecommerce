<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all()->map(function ($user) {
            $userArray = $user->toArray();
            $userArray['online_status'] = $user->isOnline();
            $userArray['email_marketing'] = $user->emailMarketing();
            $userArray['keep_signed_in'] = $user->keepSignedIn();
            return $userArray;
        });
    
        return response()->json($users);
    }
  
}

