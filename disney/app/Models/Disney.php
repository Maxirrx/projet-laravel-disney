<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disney extends Model
{
    use HasFactory;


    protected $table = 'disneys';


    protected $fillable = [
        'name',
        'price',
        'description',
        'image',
        'datenaissance'
    ];
}
