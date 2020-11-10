<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Amanah extends Model
{
    use HasFactory, SoftDeletes;

    protected $table    = 'amanah';

    protected $fillable = [
        'name'
    ];

    protected $hidden   = [];
}
