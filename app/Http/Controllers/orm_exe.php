<?php

namespace App\Http\Controllers;

use App\Models\vegetableRepository;
use Illuminate\Http\Request;

class orm_exe extends Controller
{
    public function showPage($param = ''){

        require_once("/home/porzoe/Source/laravel_project/app/Models/vegetable.php");
        $vege = new vegetableRepository();
        $vege_data = $vege->select_p($param);              

        $vege_name = $vege_data["name"];
        $vege_color = $vege_data["color"];
        $vege_price = $vege_data["price"];

        return view('test',compact('vege_name','vege_color','vege_price', 'param'));
    }
}
