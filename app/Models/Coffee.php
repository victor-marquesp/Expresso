<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Enums\Size;
use App\Enums\Heat;

class Coffee extends Model
{

    use HasFactory;
    
    protected $fillable = [
        'name',
        'description',
        'picture_path',
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
