<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class likes extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(user::class);
    }
    public function books()
    {
        return $this->belongsTo(books::class);
    }
}
