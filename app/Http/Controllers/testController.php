<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    //
    protected $user;

    public function __construct(UserRespository $users)
    {
        $this->users = $users;

    }
}
