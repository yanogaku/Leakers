<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leak extends Model
{
    protected $table='leaks';
    protected $fillable=['title','content'];
}
