<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class top extends Controller
{
    public function showPage(){
        return view('top');
    }
}
