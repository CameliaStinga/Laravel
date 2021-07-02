<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    use HasFactory;

    public static function create(array $validatedData)
    {
    }
    public $timestamps=false;


    public function category()
    {


        return $this->belongsTo(Category::class);
       // return $this->belongsTo("App\Category");
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
