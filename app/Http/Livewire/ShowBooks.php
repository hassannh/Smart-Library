<?php

namespace App\Http\Livewire;

use App\Models\Books;
use Livewire\Component;

class ShowBooks extends Component
{
    public $search;
    public $books;
    public function render()
    {
        //dd($this->search);
        $this->books = Books::where('name', 'LIKE', "%{$this->search}%")
        ->orWhere('description', 'LIKE', "%{$this->search}%")
        ->orWhere('created_at', 'LIKE', "%{$this->search}%")
            ->get();
       

        return view('livewire.show-Books');

        //return view('livewire.show-posts', ['movies' => Books::where('name', 'LIKE', "%{$this->search}%")->get()] );
    }
}
