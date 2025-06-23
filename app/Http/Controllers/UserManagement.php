<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class UserManagement extends Controller
{


    ///for user management
    public function index(){
        $users=User::all();
        return view("user_management.list")->with("page","User Management")->with("users",$users);
    }

    public function add(){
        return view("user_management.add")->with("page","Add Users");
    }






}