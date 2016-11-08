<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class logincontroller extends Controller
{
    public function index()
    {
    	if(username==mahmoud)
    		echo 'you are loged in'; 
    	else
    		echo 'wrong';
    }
}
