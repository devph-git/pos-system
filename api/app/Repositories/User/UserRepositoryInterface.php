<?php

namespace App\Repositories\User;

use Illuminate\Http\Request;

interface UserRepositoryInterface {

    public function login(Request $request);
    public function register(Request $request);
    public function details();
    public function logout(Request $request);

}






?>