<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;
use App\Models\Book;
use Livewire\Component;

class BookIndex extends Component
{
  use WithFileUploads;

  public $showCreate = true, $showUpdate = false, $showDetail = false;



  public function render()
  {
    return view('livewire.book-index', ['books' => Book::latest()->get()]);
  }
}
