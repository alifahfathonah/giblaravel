<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sosmed extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable=[
        'name'
    ];

    protected $hidden=[];
}
