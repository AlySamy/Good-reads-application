<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\author;

class post extends Model
{
    use HasFactory;
    protected $table='postes';
    protected $guarded = [];
    // public $timestamps = false;

    function author(){

        return $this->belongsTo(author::class);

    }

}
