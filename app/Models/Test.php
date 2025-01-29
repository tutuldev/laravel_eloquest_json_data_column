<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsArrayObject;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $casts = [
        // 'meta_data' =>'array'
        // when used 1 update method then use it
        'meta_data' =>'json'

        // when used 2 update method then use it
        // 'meta_data' =>AsArrayObject::class,

    ];
}
