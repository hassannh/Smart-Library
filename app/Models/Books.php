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

// public function Searchfilter($query, array $filters){

//     if($search){

        
//     }

    // $query->when($filters['search'] ?? false, fn($query, $search) =>
    //     $query->where(fn($query) =>
    //         $query->where('name', 'like', '%' . request('search') . '%')
    //         ->orWhere('created_at', 'like', '%' . request('search') . '%')
    //             ->orWhere('description', 'like', '%' . request('search') . '%')
                // ->orWhere('category', 'like', '%' . request('search') . '%')

    // )
    // );
// }


// public function Searchfilter($query, array $filters){
//     $query->when($filters['search'] ?? false, function($query, $search) {
//         $query->where(function($query) use ($search) {
//             $query->where('name', 'like', '%' . $search . '%')
//                   ->orWhere('created_at', 'like', '%' . $search . '%')
//                   ->orWhere('description', 'like', '%' . $search . '%');
//                   // ->orWhere('category', 'like', '%' . $search . '%');
//         });
//     });
// }