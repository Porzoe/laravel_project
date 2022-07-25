<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vegetable extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'color', 'price'];
}


class vegetableRepository{
    
    function insert()
    {
        vegetable::create([
            'name' => 'tomato',
            'color' => 'red',
            'price' => 100
        ]);
    }
}

$ooo = new vegetableRepository();
$ooo->insert();

