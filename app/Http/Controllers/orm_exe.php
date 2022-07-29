<?php

namespace App\Http\Controllers;

use App\Models\vegetableRepository;
use Illuminate\Http\Request;

class orm_exe extends Controller
{
    public function showPage(){

        require_once("/home/porzoe/Source/laravel_project/app/Models/vegetable.php");
        $vege = new vegetableRepository();
        $vege_data = $vege->select();

        $vege_name = $vege_data[0]["name"];
        $vege_color = $vege_data[0]["color"];
        $vege_price = $vege_data[0]["price"];

        return view('test',compact('vege_name','vege_color','vege_price'));
    }
}
