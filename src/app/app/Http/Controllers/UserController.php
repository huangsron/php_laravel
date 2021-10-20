<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        Log::info('Showing the user profile for user: '.$id);

        // $user = new User();
        // $user->password ='123';
        // $user->email = 'the-email@example.com';
        // $user->name = 'My Name';
        // $user->save();

        $user=User::findOrFail($id);

        Log::error($user);

        // return view('user');
        return view('user', ['user' => $user]);
    }
}
