<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BookShow extends Component
{
  public $isbn, $title, $author, $price, $release_year, $status, $description;

  protected $listeners = [
    'bookHandlerShow'
  ];
  public function render()
  {
    return view('livewire.book-show');
  }

  public function bookHandlerShow($book)
  {
    $this->isbn = $book['isbn'];
    $this->title = $book['title'];
    $this->author = $book['author'];
    $this->price = $book['price'];
    $this->release_year = $book['release_year'];
    $this->status = $book['status'];
    $this->description = $book['description'];
  }
}
