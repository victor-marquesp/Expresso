<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Enums\Size;
use App\Enums\Heat;

class Coffee extends Model
{
    
    protected $filliable = [
        'name',
        'description',
        'price',
        'size',
        'heat',
        'volume_ml'
    ];

    protected $casts = [
        'size' => Size::class,
        'heat' => Heat::class
    ];
}
