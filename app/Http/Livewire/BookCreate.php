<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use App\Models\Book;
use Livewire\Component;
use Illuminate\Support\Str;

class BookCreate extends Component
{
  use WithFileUploads;

  public $isbn, $title, $author, $price, $release_year, $status, $img;
  public function render()
  {
    return view('livewire.book-create');
  }

  public function store()
  {
    $data = $this->validate([
      'isbn' => ['required', 'string', 'unique:books,isbn'],
      'title' => ['required', 'string'],
      'author' => ['required', 'string'],
      'price' => ['required', 'numeric'],
      'release_year' => ['required', 'numeric'],
      'status' => ['required', 'string'],
    ]);
    dd($this);
    if ($this->hasFile('img')) {
      if ($this->file('img')->isValid()) {
        $data['img'] = $this->file('img')->store('public/img');
        $data['img'] = Str::afterLast($data['img'], '/');
      } else {
        dd($this->file());
      }
    } else {
      $data['img'] = 'default.png';
    }

    $book = Book::create($data);

    $this->resetInput();

    $this->emit('bookHandlerCreate', $book);
  }

  public function resetInput()
  {
    $this->isbn = null;
    $this->title = null;
    $this->author = null;
    $this->price = null;
    $this->release_year = null;
    $this->status = null;
    $this->img = null;
  }
}
