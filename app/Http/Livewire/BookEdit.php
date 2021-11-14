<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;
use Illuminate\Validation\Rule;

class BookEdit extends Component
{
  public $bookId, $isbn, $title, $author, $price, $release_year, $status, $description;

  protected $listeners = ['bookHandlerEdit'];

  public function render()
  {
    return view('livewire.book-edit');
  }

  public function update()
  {
    $book = Book::find($this->bookId);
    $data = $this->validate([
      'isbn' => ['required', 'string', Rule::unique('books')->ignore($book)],
      'title' => ['required', 'string'],
      'author' => ['required', 'string'],
      'price' => ['required', 'numeric'],
      'release_year' => ['required', 'numeric'],
      'status' => ['required', 'string'],
      'description' => ['required', 'string'],
    ]);

    $book->update($data);


    $this->resetInput();

    $this->emit('bookHandlerUpdate', $book);
  }

  public function bookHandlerEdit($book)
  {
    $this->bookId = $book['id'];
    $this->isbn = $book['isbn'];
    $this->title = $book['title'];
    $this->author = $book['author'];
    $this->price = $book['price'];
    $this->release_year = $book['release_year'];
    $this->status = $book['status'];
    $this->description = $book['description'];
  }

  public function resetInput()
  {
    $this->bookId = null;
    $this->isbn = null;
    $this->title = null;
    $this->author = null;
    $this->price = null;
    $this->release_year = null;
    $this->status = null;
    $this->description = null;
  }
}
