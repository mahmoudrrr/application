<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class aboutcontroller extends Controller
{
   public function about()
    {
        $users = ['mahmoud','ahmed','abdo'];
         return view('pages.about',compact('users'));
    }
}

