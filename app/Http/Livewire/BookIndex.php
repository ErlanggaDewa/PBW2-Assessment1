<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;

class BookIndex extends Component
{

  public $showCreate = false, $showUpdate = false, $showDetail = false;

  protected $listeners = [
    'bookHandlerCreate', 'bookHandlerUpdate'
  ];


  public function render()
  {
    return view('livewire.book-index', ['books' => Book::latest()->get()]);
  }

  public function bookHandlerCreate($book)
  {
    $this->showCreate = false;
    session()->flash('bookAdded', "Buku " . $book['title'] . " telah ditambahkan !");
  }

  public function bookHandlerUpdate($book)
  {
    $this->showUpdate = false;
    session()->flash('bookUpdated', "Buku " . $book['title'] . " telah diedit !");
  }

  public function getDetailBook($id)
  {
    $this->showDetail = true;
    $book = Book::find($id);
    $this->emit('bookHandlerShow', $book);
  }

  public function getEditBook($id)
  {
    $this->showUpdate = true;
    $book = Book::find($id);
    $this->emit('bookHandlerEdit', $book);
  }

  public function getBookDelete($id)
  {
    $this->showDetail = true;
    $book = Book::find($id);
    $this->emit('bookHandlerDelete', $book);
  }

  public function destroy($id)
  {
    if ($id) {
      $book = Book::find($id);
      $book->delete();
      session()->flash('bookDeleted', "Buku " . $book['title'] . " Telah Dihapus !");
    }
  }

  public function deleteBookSession($key)
  {
    session()->forget($key);
  }
}
