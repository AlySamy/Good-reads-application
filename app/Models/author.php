<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\post;

class author extends Model
{
    use HasFactory;
    protected $guarded = [];

    function postes(){
        return $this->hasMany(post::class);
    }
}
