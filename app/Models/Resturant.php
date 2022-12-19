<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resturant extends Model
{
    protected $table = "resturants";
    public $timestamps = false;

    use HasFactory;
}
