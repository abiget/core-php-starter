<?php
namespace App\Controllers;

use App\Models\User;

class UserController {

    public function index()
    {
        $users = User::all();
        view('users/index', $users);
    }
}