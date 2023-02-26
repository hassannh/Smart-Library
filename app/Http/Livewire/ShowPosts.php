<?php

namespace App\Http\Livewire;

use App\Models\Books;
use Livewire\Component;

class ShowPosts extends Component
{
    public $search;
    public $books;
    public function render()
    {
        //dd($this->search);
        $this->books = Books::where('name', 'LIKE', "%{$this->search}%")->get();

        return view('livewire.show-posts');

        //return view('livewire.show-posts', ['movies' => Books::where('name', 'LIKE', "%{$this->search}%")->get()] );
    }
}
