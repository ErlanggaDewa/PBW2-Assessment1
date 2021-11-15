<x-app-layout>
  <div class="flex items-center justify-center h-full pb-10 font-sans bg-gray-100 min-w-screen">
    <div class="fixed overflow-auto inset-x-3 lg:inset-x-20 bottom-10 top-24">
      <div class="sticky left-0 flex flex-wrap items-center justify-between w-full h-20 gap-2 px-3 bg-gray-300 lg:px-9">
        <h1 class="text-2xl font-bold text-gray-700">MAHASISWA</h1>
        <div class="flex items-end gap-3">
          <a href="{{ route('student.create') }}">
            <button
              class="inline-flex items-start justify-start px-6 py-3 bg-blue-700 rounded focus:ring-2 focus:ring-offset-2 focus:ring-blue-600 sm:ml-3 sm:mt-0 hover:bg-blue-600 focus:outline-none">
              <p class="text-sm font-medium leading-none text-white">New Data</p>
            </button>
          </a>
          <a href="{{ route('student.exportPDF') }}">
            <button
              class="inline-flex items-start justify-start px-6 py-3 bg-gray-700 rounded focus:ring-2 focus:ring-offset-2 focus:ring-gray-600 sm:ml-3 sm:mt-0 hover:bg-gray-600 focus:outline-none">
              <p class="text-sm font-medium leading-none text-white">Export PDF</p>
            </button>
          </a>
        </div>
      </div>
      @if ($students->count())
      <table class="w-full table-auto min-w-max">
        <thead class="sticky top-0 z-50">
          <tr class="text-sm leading-normal text-gray-600 uppercase bg-gray-200 ">
            <th class="px-6 py-3 text-center">NIM</th>
            <th class="px-6 py-3 text-center">Nama</th>
            <th class="px-6 py-3 text-center">Kelas</th>
            <th class="px-6 py-3 text-center">Gender</th>
            <th class="px-6 py-3 text-center">Alamat</th>
            <th class="px-6 py-3 text-center">Status</th>
            <th class="px-6 py-3 text-center">Aksi</th>
          </tr>
        </thead>
        <tbody class="text-sm font-light text-gray-600 bg-white rounded shadow-md">
          @foreach ($students as $student)
          <tr class="border-b border-gray-200 {{ intval($student->id) % 2== 0 ? 'bg-gray-50' : '' }} hover:bg-gray-100">
            <td class="px-6 py-3 text-left whitespace-nowrap">
              <div class="flex items-center justify-center">
                <span class="font-medium">{{ $student->nim }}</span>
              </div>
            </td>
            <td class="px-6 py-3 text-left">
              <div class="flex items-center ">
                <div class="mr-2 ">
                  <img class="w-6 h-6 rounded-full" src="{{ asset('storage/img/')}}/{{ $student->img }}" alt="gambar">
                </div>
                <span>{{ $student->name }}</span>

              </div>
            </td>
            <td class="px-6 py-3 text-center">
              <div class="flex items-center justify-center">
                <span class="font-medium">{{ $student->class }}</span>
              </div>
            </td>
            <td class="px-6 py-3 text-center">
              <div class="flex items-center justify-center">
                <span class="font-medium">{{ $student->gender }}</span>
              </div>
            </td>
            <td class="px-6 py-3 text-center">
              <div class="flex items-center">
                <span class="font-medium">{{ $student->address }}</span>
              </div>
            </td>
            <td class="flex justify-center px-6 py-3 text-center">
              @if ($student->status == "Reguler")
              <span class="block w-20 px-3 py-1 text-xs text-blue-600 bg-blue-200 rounded-full">{{ $student->status
                }}</span>
              @elseif ($student->status == "Beasiswa")
              <span class="block w-20 px-3 py-1 text-xs text-green-600 bg-green-200 rounded-full">{{ $student->status
                }}</span>
              @elseif ($student->status == "Magang")
              <span class="block w-20 px-3 py-1 text-xs text-yellow-600 bg-yellow-200 rounded-full">{{ $student->status
                }}</span>
              @elseif ($student->status == "Drop Out")
              <span class="block w-20 px-3 py-1 text-xs text-red-600 bg-red-200 rounded-full">{{ $student->status
                }}</span>
              @endif
            </td>
            <td class="px-6 py-3 text-center">
              <div class="flex justify-center item-center">
                {{-- detail student --}}
                <a href="{{ route('student.show',$student->id) }}">
                  <div class="w-4 mr-2 transform hover:text-green-500 hover:scale-110">
                    <i class="far fa-eye"></i>
                  </div>
                </a>
                {{-- end detail student --}}

                {{-- edit student --}}
                <a href="{{ route('student.edit',$student->id) }}">
                  <div class="w-4 mr-2 transform hover:text-yellow-500 hover:scale-110">
                    <i class="far fa-edit"></i>
                  </div>
                </a>
                {{-- end edit student --}}

                {{-- delete student --}}
                <form id="form-delete-{{ $student->id }}" action="{{ route('student.destroy', $student->id) }}"
                  method="POST">
                  @csrf
                  @method('DELETE')
                  <div onclick='confirmDelete("{{ $student->name }}",{{ $student->id }})' id="button-delete"
                    class="w-4 mr-2 transform cursor-pointer hover:text-red-500 hover:scale-110">
                    <i class="far fa-trash-alt"></i>
                  </div>
                </form>
                {{-- end delete student --}}
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

  <script type="text/javascript" src="{{ asset('js/confirmDeleteStudent.js') }}"></script>
</x-app-layout>
