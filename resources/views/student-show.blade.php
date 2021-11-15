<x-app-layout>
  <div class="p-5 md:p-10 lg:px-28">
    <div class="bg-white shadow sm:rounded-lg">
      <div class="sticky top-0 z-50 px-4 py-5 bg-white shadow-md sm:px-6">

        <div class="flex justify-between ">
          <div>
            <h3 class="text-lg font-medium leading-6 text-gray-900">
              Informasi Mahasiswa
            </h3>
            <p class="max-w-2xl mt-1 text-sm text-gray-500">
              Personal details
            </p>
          </div>
          <a href="{{ route('student.index') }}">
            <button
              class="px-4 py-2 mr-1 text-xs font-bold text-white uppercase transition-all duration-150 ease-linear bg-yellow-500 rounded shadow outline-none active:bg-pink-600 hover:shadow-md focus:outline-none">
              Back
            </button>
          </a>
        </div>
      </div>
      <div class="px-4 py-5 sm:px-6">
        <div class="mt-5 border-t border-gray-200">
          <dl>
            <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                Nama Lengkap
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $student->name }}
              </dd>
            </div>
            <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                NIM
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $student->nim }}
              </dd>
            </div>
            <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                Jenis Kelamin
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $student->gender }}
              </dd>
            </div>
            <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                Kelas
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $student->class }}
              </dd>
            </div>
            <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 ">
              <dt class="text-sm font-medium text-gray-500">
                Status
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $student->status }}
              </dd>
            </div>
            <div class="px-4 py-5 bg-white sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                Alamat
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                {{ $student->address }}
              </dd>
            </div>
            <div class="px-4 py-5 bg-gray-50 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                Gambar Profil
              </dt>
              <div class="col-span-2">
                <img class="h-64 p-2 border border-gray-200 rounded-md"
                  src="{{ asset('storage/img') }}/{{ $student->img }}" alt="">
              </div>
            </div>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <!-- This example requires Tailwind CSS v2.0+ -->
</x-app-layout>
