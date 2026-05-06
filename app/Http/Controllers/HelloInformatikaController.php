<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloInformatikaController extends Controller
{
    //
    public function HelloInformatika(): String{
        return view('HelloInformatikaView');
    }
}


