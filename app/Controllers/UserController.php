<?php

use App\Models\User;
use function App\View\view as renderView;

class UserController {
    public function index()
    {
        $users = User::all();
        renderView('users/index', $users);
    }
}