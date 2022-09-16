<?php

namespace App\Http\Livewire\Books;

use App\Models\Book;

use Livewire\Component;

class Index extends Component
{
    public function LoadBooks() {
        $books = Book::orderBy('created_at',('desc'))->get();

        return compact('books');
    }


    public function render()
    {
        return view('livewire.books.index', $this->LoadBooks());
    }
}
