<?php

namespace App\Http\Livewire\Books;

use Livewire\Component;
use App\Models\Book;

class Delete extends Component
{
    public $bookId;

    public function getBookProperty(){
        return Book::select('id','title', 'author', 'genre', 'year')
        ->find($this->bookId);

    }
    public function deleteBook(){
        $this->book->delete();

        return redirect('/index')->with('message', 'Deleted Successfully!');


    }
    public function back()  {
        return redirect('/index');
    }
    public function render()
    {
        return view('livewire.books.delete');
    }
}
