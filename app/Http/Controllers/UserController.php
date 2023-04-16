<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function hello($name){
        return "Hello ".$name;
    }

    public function user($id,$name="ahmed"){

        return $id . $name;
    }

    public function getData(){
        
    }
}
