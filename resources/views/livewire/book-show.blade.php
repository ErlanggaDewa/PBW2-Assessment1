<div x-show="openDetail" class="fixed inset-0 z-50 items-center px-3 py-5"
  style=" background-color:rgba(192, 192, 192, 0.5)">
  <div class="items-center w-full h-full mx-auto overflow-auto lg:flex lg:w-3/4">
    <div class="w-full max-w-5xl bg-white rounded-lg shadow-xl ">
      <div class="sticky top-0 z-50 flex items-center justify-between p-4 bg-white border-b shadow-md">
        <div>
          <h2 class="text-2xl ">
            Informasi Buku
          </h2>
          <p class="text-sm text-gray-500">
            Personal Data Book
          </p>
        </div>
        <div class="text-right action-group">
          <button @click="openDetail = false"
            class="inline-block p-1 px-2 text-xs bg-transparent border-2 border-red-500 rounded-lg fill-current group hover:text-white hover:bg-red-500 focus:border-4 focus:border-red-300">
            <svg class="text-red-500 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" height="24"
              viewBox="0 0 24 24" width="24">
              <path d="M0 0h24v24H0z" fill="none" />
              <path
                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z" />
            </svg>
          </button>


        </div>
      </div>
      <div>
        <div class="p-4 space-y-1 border-b md:grid md:grid-cols-3 hover:bg-gray-50 md:space-y-0">
          <p class="text-gray-600">
            Judul
          </p>
          <p class="col-span-2">
            {{ $title }}
          </p>
        </div>
        <div class="p-4 space-y-1 border-b md:grid md:grid-cols-3 hover:bg-gray-50 md:space-y-0">
          <p class="text-gray-600">
            ISBN
          </p>
          <p class="col-span-2">
            {{ $isbn }}
          </p>
        </div>
        <div class="p-4 space-y-1 border-b md:grid md:grid-cols-3 hover:bg-gray-50 md:space-y-0">
          <p class="text-gray-600">
            Status
          </p>
          <p class="col-span-2">
            {{ $status }}
          </p>
        </div>
        <div class="p-4 space-y-1 border-b md:grid md:grid-cols-3 hover:bg-gray-50 md:space-y-0">
          <p class="text-gray-600">
            Penulis
          </p>
          <p class="col-span-2">
            {{ $author }}
          </p>
        </div>
        <div class="p-4 space-y-1 border-b md:grid md:grid-cols-3 hover:bg-gray-50 md:space-y-0">
          <p class="text-gray-600">
            Harga
          </p>
          <p class="col-span-2">
            Rp. {{ $price }}
          </p>
        </div>
        <div class="p-4 space-y-1 border-b md:grid md:grid-cols-3 hover:bg-gray-50 md:space-y-0">
          <p class="text-gray-600">
            Tahun Rilis
          </p>
          <p>
            {{ $release_year }}
          </p>
        </div>
        <div class="p-4 space-y-1 border-b md:grid md:grid-cols-3 hover:bg-gray-50 md:space-y-0">
          <p class="text-gray-600">
            Descripsi
          </p>
          <p class="col-span-2">
            {{ $description }}
          </p>
        </div>

      </div>
    </div>
  </div>
</div>
