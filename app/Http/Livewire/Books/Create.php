<?php

namespace App\Http\Livewire\Books;

use Livewire\Component;
use App\Models\Book;

class Create extends Component
{
    public $title, $author, $email, $contact_number,  $genre, $year;

    public function addBook()    {
        $this->validate([
            'title'                           =>                  ['required', 'string', 'max:255'],
            'author'                        =>                  ['required', 'string', 'max:255'],
            'email'                            =>                  ['required', 'email', 'unique:books'],
            'contact_number'           =>                  ['required', 'numeric'],
            'genre'                  =>                   ['required', 'string','max:255'],
            'year'                              =>                   ['required', 'numeric'],
        ]);
        Book::create([
            'title'                          =>      $this->title,
            'author'                       =>      $this->author,
            'email'                          =>     $this->email,
            'contact_number'         =>     $this->contact_number,
            'genre'                           =>      $this->genre,
            'year'                            =>        $this->year,
        ]);
        return redirect('/index')->with('message', 'Book Added Successfully');
    }
    public function updated($propertyEmail) {
        $this->validateOnly($propertyEmail, [
            'email'                           =>                  ['required', 'email', 'unique:books']
        ]);
    }

    public function render()
    {
        return view('livewire.books.create');
    }
}

