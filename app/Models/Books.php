<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class books extends Model
{
    protected $fillable = ['name', 'description', 'auth', 'picture', 'category'];
    use HasFactory;
 
}
