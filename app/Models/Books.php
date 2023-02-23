<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    protected $fillable = ['name', 'description', 'auth', 'picture', 'category'];
    use HasFactory;
}
