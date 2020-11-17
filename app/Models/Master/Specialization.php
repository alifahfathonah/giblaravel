<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Specialization extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable=[
        'name'
    ];

    protected $hidden=[];

    public function users()
    {
        $this->hasMany(User::class);
    }
}
