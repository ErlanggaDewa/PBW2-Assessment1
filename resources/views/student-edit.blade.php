<x-app-layout>
  <div class="w-full px-4 mx-auto mt-6 lg:w-3/4 ">
    <div class="relative flex flex-col w-full min-w-0 mb-6 break-words bg-gray-100 border-0 rounded-lg shadow-2xl ">
      <div class="sticky top-0 z-50 px-6 py-6 mb-0 bg-white rounded-t shadow-md">
        <div class="flex justify-between text-center">
          <h6 class="text-xl font-bold ">
            Edit Mahasiswa
          </h6>
          <div class="flex gap-x-2">
            <a href="{{ route('student.index') }}">
              <button
                class="px-4 py-2 mr-1 text-xs font-bold text-white uppercase transition-all duration-150 ease-linear bg-yellow-500 rounded shadow outline-none active:bg-pink-600 hover:shadow-md focus:outline-none">
                Back
              </button>
            </a>
            <button
              class="px-4 py-2 mr-1 text-xs font-bold text-white uppercase transition-all duration-150 ease-linear bg-green-500 rounded shadow outline-none active:bg-pink-600 hover:shadow-md focus:outline-none"
              type="submit" form="form_create">
              Edit
            </button>
          </div>
        </div>
      </div>
      <div class="flex-auto px-4 py-10 pt-0 lg:px-10">
        <form method="POST" enctype="multipart/form-data" action="{{ route('student.update', $student->id) }}"
          id="form_create">
          @csrf
          @method('PUT')
          <h6 class="mt-3 mb-6 text-sm font-bold uppercase ">
            Informasi Mahasiswa
          </h6>
          <div class="flex flex-wrap">
            <div class="w-full px-4 lg:w-6/12">
              <div class="relative w-full mb-3">
                <label class="block mb-2 text-xs font-bold uppercase">
                  Nama
                </label>
                <input value="{{ $student->name }}" required name="name" type="text"
                  class="w-full px-3 py-3 text-sm transition-all duration-150 ease-linear bg-white border-0 rounded shadow focus:outline-none focus:ring">

                {{-- error msg --}}
                @error('name')
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
                  NIM
                </label>
                <input value="{{ $student->nim }}" required name="nim" type="text"
                  class="w-full px-3 py-3 text-sm transition-all duration-150 ease-linear bg-white border-0 rounded shadow focus:outline-none focus:ring">

                {{-- error msg --}}
                @error('nim')
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
                  Kelas
                </label>
                <input value="{{ $student->class }}" required name="class" type="text"
                  class="w-full px-3 py-3 text-sm transition-all duration-150 ease-linear bg-white border-0 rounded shadow focus:outline-none focus:ring">

                {{-- error msg --}}
                @error('class')
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
                <select
                  class="w-full px-3 py-3 text-sm transition-all duration-150 ease-linear bg-white border-0 rounded shadow focus:outline-none focus:ring"
                  required name="status" id="status">
                  <option {{ $student->status == 'Reguler' ? 'selected' : '' }} value="Reguler">Reguler</option>
                  <option {{ $student->status == 'Beasiswa' ? 'selected' : '' }} value="Beasiswa">Beasiswa</option>
                  <option {{ $student->status == 'Magang' ? 'selected' : '' }} value="Magang">Magang</option>
                  <option {{ $student->status == 'Drop Out' ? 'selected' : '' }} value="Drop Out">Drop Out</option>
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
            <div class="w-full px-4 lg:w-4/12">
              <div class="relative w-full mb-3">
                <label class="block mb-2 text-xs font-bold uppercase ">
                  Jenis Kelamin
                </label>
                <select
                  class="w-full px-3 py-3 text-sm transition-all duration-150 ease-linear bg-white border-0 rounded shadow focus:outline-none focus:ring"
                  required name="gender" id="gender">
                  @if ($student->gender == 'Pria')
                  <option selected value="Pria">Pria</option>
                  <option value="Wanita">Wanita</option>
                  @else
                  <option value="Pria">Pria</option>
                  <option selected value="Wanita">Wanita</option>
                  @endif
                </select>

                {{-- error msg --}}
                @error('gender')
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
          <div class="flex flex-col w-full gap-6 px-4 lg:flex-row">
            <div class="relative w-full lg:w-6/12">
              <label class="block mb-2 text-xs font-bold uppercase ">
                Alamat
              </label>
              <textarea required name="address" type="text"
                class="w-full px-3 py-3 text-sm transition-all duration-150 ease-linear bg-white border-0 rounded shadow focus:outline-none focus:ring"
                rows="10">{{ $student->address }}</textarea>

              {{-- error msg --}}
              @error('address')
              <div class="flex items-center p-2 mt-2 text-sm text-left text-white bg-red-500 rounded-md " role="alert">
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
            <div class="relative w-full lg:w-6/12 ">
              <label class="block mb-2 text-xs font-bold uppercase ">
                Attach Image
              </label>
              <div id="drop-area" class="relative flex items-center justify-center w-full">
                <label id="border-drop-area"
                  class="relative z-50 flex flex-col w-full h-56 p-10 text-center border-4 border-dashed rounded-lg cursor-pointer group">
                  <div class="flex flex-col items-center justify-center w-full h-full text-center ">
                    <div id="preview-container" class="absolute block ">
                      <img id="preview-img" src="{{asset('storage/img') }}/{{ $student->img }}" class="h-56 p-3">
                    </div>
                    <p id="info-upload"
                      class="absolute inset-0 z-50 flex items-center justify-center text-xl font-bold rounded-lg pointer-none"
                      style="">
                    </p>
                  </div>
                  <input id="input-img" name="img" type="file" accept="image/*" class="hidden"
                    onchange="uploadHandler(event)">
                </label>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="{{ asset('js/uploadFileEditStudent.js') }}"></script>
</x-app-layout>
