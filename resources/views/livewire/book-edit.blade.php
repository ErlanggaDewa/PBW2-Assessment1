<div class="fixed inset-0 z-50 flex items-center" style="background-color: rgba(128, 128, 128, 0.5)">

  <div class="w-full px-4 mx-auto mt-6 lg:w-3/4 ">
    <div class="relative flex flex-col w-full min-w-0 mb-6 break-words bg-gray-100 border-0 rounded-lg shadow-2xl ">
      <div class="px-6 py-6 mb-0 bg-white rounded-t">
        <div class="flex justify-between text-center">
          <h6 class="text-xl font-bold ">
            Tambah Mahasiswa
          </h6>
          <div class="flex gap-x-2">

            <button @click="openUpdate = false"
              class="px-4 py-2 mr-1 text-xs font-bold text-white uppercase transition-all duration-150 ease-linear bg-yellow-500 rounded shadow outline-none active:bg-pink-600 hover:shadow-md focus:outline-none">
              Back
            </button>
            <button wire:click.prevent="update"
              class="px-4 py-2 mr-1 text-xs font-bold text-white uppercase transition-all duration-150 ease-linear bg-green-500 rounded shadow outline-none active:bg-pink-600 hover:shadow-md focus:outline-none"
              type="submit" form="form_create">
              Submit
            </button>
          </div>
        </div>
      </div>
      <div class="flex-auto px-4 py-10 pt-0 lg:px-10">
        <form wire:submit.prevent="store" enctype="multipart/form-data" id="form_create">
          <h6 class="mt-3 mb-6 text-sm font-bold uppercase ">
            Informasi Buku
          </h6>
          <div class="flex flex-wrap">
            <div class="w-full px-4 lg:w-6/12">
              <div class="relative w-full mb-3">
                <label class="block mb-2 text-xs font-bold uppercase">
                  ISBN
                </label>
                <input wire:model='isbn' type="text"
                  class="w-full px-3 py-3 text-sm transition-all duration-150 ease-linear bg-white border-0 rounded shadow focus:outline-none focus:ring">

                {{-- error msg --}}
                @error('isbn')
                <div class="flex items-center p-2 mt-2 text-sm text-left text-white bg-red-500 rounded-md "
                  role="alert">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="w-6 h-6 mx-2 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                    </path>
                  </svg>
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>

            <div class="w-full px-4 lg:w-6/12">
              <div class="relative w-full mb-3">
                <label class="block mb-2 text-xs font-bold uppercase ">
                  Author
                </label>
                <input wire:model='author' type="text"
                  class="w-full px-3 py-3 text-sm transition-all duration-150 ease-linear bg-white border-0 rounded shadow focus:outline-none focus:ring">

                {{-- error msg --}}
                @error('author')
                <div class="flex items-center p-2 mt-2 text-sm text-left text-white bg-red-500 rounded-md "
                  role="alert">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="w-6 h-6 mx-2 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                    </path>
                  </svg>
                  {{ $message }}
                </div>
                @enderror
              </div>
            </div>
            <div class="w-full px-4 lg:w-4/12">
              <div class="relative w-full mb-3">
                <label class="block mb-2 text-xs font-bold uppercase ">
                  Harga
                </label>
                <input wire:model='price' type="number" min="0"
                  class="w-full px-3 py-3 text-sm transition-all duration-150 ease-linear bg-white border-0 rounded shadow focus:outline-none focus:ring">

                {{-- error msg --}}
                @error('price')
                <div class="flex items-center p-2 mt-2 text-sm text-left text-white bg-red-500 rounded-md "
                  role="alert">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="w-6 h-6 mx-2 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                    </path>
                  </svg>
                  {{ $message }}
                </div>
                @enderror

              </div>
            </div>
            <div class="w-full px-4 lg:w-4/12">
              <div class="relative w-full mb-3">
                <label class="block mb-2 text-xs font-bold uppercase ">
                  Tahun Rilis
                </label>
                <input wire:model='release_year' min="1900" max="2999" step="1" type="number"
                  class="w-full px-3 py-3 text-sm transition-all duration-150 ease-linear bg-white border-0 rounded shadow focus:outline-none focus:ring">

                {{-- error msg --}}
                @error('release_year')
                <div class="flex items-center p-2 mt-2 text-sm text-left text-white bg-red-500 rounded-md "
                  role="alert">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="w-6 h-6 mx-2 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                    </path>
                  </svg>
                  {{ $message }}
                </div>
                @enderror

              </div>
            </div>
            <div class="w-full px-4 lg:w-4/12">
              <div class="relative w-full mb-3">
                <label class="block mb-2 text-xs font-bold uppercase ">
                  Status
                </label>
                <select wire:model="status"
                  class="w-full px-3 py-3 text-sm transition-all duration-150 ease-linear bg-white border-0 rounded shadow focus:outline-none focus:ring"
                  id="status">
                  <option selected hidden>Choose one</option>
                  <option value="Tersedia">Tersedia</option>
                  <option value="Disewa">Disewa</option>
                  <option value="Terjual">Terjual</option>
                  <option value="Rusak">Rusak</option>
                </select>

                {{-- error msg --}}
                @error('status')
                <div class="flex items-center p-2 mt-2 text-sm text-left text-white bg-red-500 rounded-md "
                  role="alert">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="w-6 h-6 mx-2 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                    </path>
                  </svg>
                  {{ $message }}
                </div>
                @enderror

              </div>
            </div>
          </div>
          <div class="flex">
            <div class="flex flex-col w-full gap-6 px-4 lg:flex-row">
              <div class="relative w-full ">
                <label class="block mb-2 text-xs font-bold uppercase ">
                  Judul
                </label>
                <textarea wire:model="title" type="text"
                  class="w-full px-3 py-3 text-sm transition-all duration-150 ease-linear bg-white border-0 rounded shadow focus:outline-none focus:ring"
                  rows="10"></textarea>

                {{-- error msg --}}
                @error('title')
                <div class="flex items-center p-2 mt-2 text-sm text-left text-white bg-red-500 rounded-md "
                  role="alert">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="w-6 h-6 mx-2 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                    </path>
                  </svg>
                  {{ $message }}
                </div>
                @enderror

              </div>

            </div>
            <div class="flex flex-col w-full gap-6 px-4 lg:flex-row">
              <div class="relative w-full ">
                <label class="block mb-2 text-xs font-bold uppercase ">
                  Deskripsi
                </label>
                <textarea wire:model="description" type="text"
                  class="w-full px-3 py-3 text-sm transition-all duration-150 ease-linear bg-white border-0 rounded shadow focus:outline-none focus:ring"
                  rows="10"></textarea>

                {{-- error msg --}}
                @error('description')
                <div class="flex items-center p-2 mt-2 text-sm text-left text-white bg-red-500 rounded-md "
                  role="alert">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    class="w-6 h-6 mx-2 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                    </path>
                  </svg>
                  {{ $message }}
                </div>
                @enderror

              </div>

            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
