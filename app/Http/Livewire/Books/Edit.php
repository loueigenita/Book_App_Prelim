<?php

namespace App\Http\Livewire\Books;

use App\Models\Book;
use Livewire\Component;

class Edit extends Component
{
    public $bookId;
    public $title, $author, $email, $contact_number,  $genre, $year;

    public function mount() {
        $this->title = $this->book->title;
        $this->author = $this->book->author;
        $this->email = $this->book->email;
        $this->contact_number = $this->book->contact_number;
        $this->genre = $this->book->genre;
        $this->year = $this->book->year;
    }

    public function editBook()   {
        $this->validate([
            'title'                           =>                  ['required', 'string', 'max:255'],
            'author'                        =>                  ['required', 'string', 'max:255'],
            'email'                            =>                  ['required', 'email', 'unique:books'],
            'contact_number'           =>                  ['required', 'numeric'],
            'genre'                  =>                   ['required', 'string','max:255'],
            'year'                              =>                   ['required', 'numeric'],
        ]);
        $this->book->update([
            'title'                          =>      $this->title,
            'author'                       =>      $this->author,
            'email'                          =>     $this->email,
            'contact_number'         =>     $this->contact_number,
            'genre'                           =>      $this->genre,
            'year'                            =>        $this->year,
        ]);
        return redirect('/index')->with('message', 'Updated Successfully');

    }

    public function getBookProperty()    {
        return Book::find($this->bookId);
    }
    public function back()  {
        return redirect('/index');
    }

    public function render()
    {
        return view('livewire.books.edit');
    }
}
