<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vegetable extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'color', 'price'];
    public $timestamps = false;
}


class vegetableRepository
{
    function insert()
    {
        vegetable::create([
            'name' => 'tomato',
            'color' => 'red',
            'price' => 100
        ]);

    }

    function update()
    {
        vegetable::where('name', '=', 'tomato')->update([
            'name' => 'tomatotoooo',
            'color' => 'redred',
            'price' => 777
        ]);

    }

    function delete()
    {
        vegetable::where('name', '=', 'cucumber')->delete();

    }

    function select()
    {
        $select = vegetable::all();
        return $select;
    }

    function select_p($param)
    {
        if($param <> ""){
            $select = vegetable::where('name', '=' , $param)->first();
            return $select;
        }
        else{
            $select = vegetable::all();
            return $select[0];
        }
        
    }

}

