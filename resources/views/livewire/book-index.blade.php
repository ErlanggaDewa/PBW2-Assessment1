<section
  x-data="{openCreate :  @entangle('showCreate'), openUpdate : @entangle('showUpdate'),openDetail : @entangle('showDetail')}">

  @if ($showCreate)
  @livewire('book-create')
  @elseif ($showDetail)
  @livewire('book-show')
  @elseif ($showUpdate)
  @livewire('book-edit')
  @endif



  <div class="flex items-center justify-center h-full pb-10 font-sans bg-gray-100 min-w-screen">

    <div class="fixed overflow-auto inset-x-3 lg:inset-x-20 bottom-10 top-24">

      {{-- Alert flasher --}}
      <div>
        @if (session()->has('bookAdded'))
        <div class="py-4 text-center bg-indigo-700 rounded-t-xl lg:px-4" x-data="{flash : true}" x-show="flash">
          <div class="flex items-center p-2 leading-none text-indigo-100 bg-indigo-800 lg:rounded-full lg:inline-flex"
            role="alert">
            <span class="flex px-2 py-1 mr-3 text-xs font-bold uppercase bg-indigo-500 rounded-full">New</span>
            <span class="flex-auto mr-2 font-semibold text-left">{{ session('bookAdded') }}</span>
            <svg wire:click="deleteBookSession('bookAdded')"
              class="p-1 text-white rounded-full cursor-pointer fill-current hover:bg-gray-800"
              xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
              <path d="M0 0h24v24H0z" fill="none" />
              <path
                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" />
            </svg>
          </div>
        </div>
        @elseif (session()->has('bookUpdated'))
        <div class="py-4 text-center bg-yellow-700 rounded-t-xl lg:px-4" x-data="{flash : true}" x-show="flash">
          <div class="flex items-center p-2 leading-none text-yellow-100 bg-yellow-800 lg:rounded-full lg:inline-flex"
            role="alert">
            <span class="flex px-2 py-1 mr-3 text-xs font-bold uppercase bg-yellow-500 rounded-full">New</span>
            <span class="flex-auto mr-2 font-semibold text-left">{{ session('bookUpdated') }}</span>
            <svg wire:click="deleteBookSession('bookUpdated')"
              class="p-1 text-white rounded-full cursor-pointer fill-current hover:bg-gray-800"
              xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
              <path d="M0 0h24v24H0z" fill="none" />
              <path
                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" />
            </svg>
          </div>
        </div>
        @elseif (session()->has('bookDeleted'))
        <div class="py-4 text-center bg-red-700 rounded-t-xl lg:px-4" x-data="{flash : true}" x-show="flash">
          <div class="flex items-center p-2 leading-none text-red-100 bg-red-800 lg:rounded-full lg:inline-flex"
            role="alert">
            <span class="flex px-2 py-1 mr-3 text-xs font-bold uppercase bg-red-500 rounded-full">New</span>
            <span class="flex-auto mr-2 font-semibold text-left">{{ session('bookDeleted') }}</span>
            <svg wire:click="deleteBookSession('bookDeleted')"
              class="p-1 text-white rounded-full cursor-pointer fill-current hover:bg-gray-800"
              xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
              <path d="M0 0h24v24H0z" fill="none" />
              <path
                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" />
            </svg>
          </div>
        </div>
        @endif
      </div>

      <div
        class="sticky left-0 flex flex-wrap items-center justify-between w-full gap-3 px-3 py-6 bg-gray-300 lg:px-9 ">
        <h1 class="text-2xl font-bold text-gray-700">BUKU</h1>
        <div class="">

          <div class="flex items-end gap-3">
            <button @click="openCreate = true"
              class="inline-flex items-start justify-start px-6 py-3 bg-blue-700 rounded focus:ring-2 focus:ring-offset-2 focus:ring-blue-600 sm:ml-3 sm:mt-0 hover:bg-blue-600 focus:outline-none">
              <p class="text-sm font-medium leading-none text-white">New Data</p>
            </button>
            <a href="{{ route('book.exportPDF') }}">
              <button
                class="inline-flex items-start justify-start px-6 py-3 bg-gray-700 rounded focus:ring-2 focus:ring-offset-2 focus:ring-gray-600 sm:ml-3 sm:mt-0 hover:bg-gray-600 focus:outline-none">
                <p class="text-sm font-medium leading-none text-white">Export PDF</p>
              </button>
            </a>
          </div>
        </div>
      </div>
      {{-- End Alert flasher --}}

      @if ($books->count())
      <table class="w-full table-auto min-w-max">
        <thead class="sticky top-0 z-50">
          <tr class="text-sm leading-normal text-gray-600 uppercase bg-gray-200 ">
            <th class="px-6 py-3 text-center">ISBN</th>
            <th class="px-6 py-3 text-center">Judul</th>
            <th class="px-6 py-3 text-center">Penulis</th>
            <th class="px-6 py-3 text-center">Harga</th>
            <th class="px-6 py-3 text-center">Tahun Rilis</th>
            <th class="px-6 py-3 text-center">Status</th>
            <th class="px-6 py-3 text-center">Aksi</th>
          </tr>
        </thead>
        <tbody class="text-sm font-light text-gray-600 bg-white rounded shadow-md">
          @foreach ($books as $book)
          <tr class="border-b border-gray-200 {{ intval($book->id) % 2== 0 ? 'bg-gray-50' : '' }} hover:bg-gray-100">
            <td class="px-6 py-3 text-left whitespace-nowrap">
              <div class="flex items-center justify-center">
                <span class="font-medium">{{ $book->isbn }}</span>
              </div>
            </td>
            <td class="px-6 py-3 text-left">
              <div class="flex items-center ">
                <span>{{ $book->title }}</span>
              </div>
            </td>
            <td class="px-6 py-3 text-center">
              <div class="flex items-center ">
                <span class="font-medium">{{ $book->author }}</span>
              </div>
            </td>
            <td class="px-6 py-3 text-center">
              <div class="flex items-center justify-between">
                <span>Rp.</span>
                <span class="font-medium"> {{ $book->price }}</span>
              </div>
            </td>
            <td class="px-6 py-3 text-center">
              <div class="flex items-center justify-center">
                <span class="font-medium">{{ $book->release_year }}</span>
              </div>
            </td>
            <td class="flex justify-center px-6 py-3 text-center">
              @if ($book->status == "Tersedia")
              <span class="block w-20 px-3 py-1 text-xs text-green-600 bg-green-200 rounded-full">{{ $book->status
                }}</span>
              @elseif ($book->status == "Terjual")
              <span class="block w-20 px-3 py-1 text-xs text-yellow-600 bg-yellow-200 rounded-full">{{ $book->status
                }}</span>
              @elseif ($book->status == "Disewa")
              <span class="block w-20 px-3 py-1 text-xs text-indigo-600 bg-indigo-200 rounded-full">{{ $book->status
                }}</span>
              @elseif ($book->status == "Rusak")
              <span class="block w-20 px-3 py-1 text-xs text-red-600 bg-red-200 rounded-full">{{ $book->status
                }}</span>
              @endif
            </td>
            <td class="px-6 py-3 text-center">
              <div class="flex justify-center item-center">
                {{-- detail book --}}
                <div wire:click="getDetailBook({{ $book->id }})"
                  class="w-4 mr-2 transform hover:text-green-500 hover:scale-110">
                  <i class="far fa-eye"></i>
                </div>
                {{-- end detail book --}}

                {{-- edit book --}}
                <div wire:click="getEditBook({{ $book->id }})"
                  class="w-4 mr-2 transform hover:text-yellow-500 hover:scale-110">
                  <i class="far fa-edit"></i>
                </div>
                {{-- end edit book --}}

                {{-- delete book --}}
                <div wire:click='confirmDelete({{ $book->id }}, "{{ $book->title }}")' id="button-delete"
                  class="w-4 mr-2 transform cursor-pointer hover:text-red-500 hover:scale-110">
                  <i class="far fa-trash-alt"></i>
                </div>
                {{-- end delete book --}}
              </div>
            </td>

          </tr>
          @endforeach

        </tbody>
      </table>
      @else
      <div class="flex items-center justify-center h-20 text-center bg-gray-200">
        <h1 class="text-2xl font-semibold">Data Kosong</h1>
      </div>
      @endif
    </div>
  </div>
</section>
<script type="text/javascript" src="{{ asset('js/confirmDeleteBook.js') }}">
</script>
