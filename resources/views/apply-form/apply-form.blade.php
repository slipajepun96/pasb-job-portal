@extends('layout.main')

@section('content')

<section class="">
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-8 m-2">
        <h1 class="mb-2 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-3xl">Borang Permohonan Kerjaya</h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48">Isikan borang dibawah dengan lengkap</p>


 


  
        

    </div>
    <form class="max-w-screen-lg m-2 mx-auto" action="{{route('apply-form-pg1')}}" method="POST">
        @csrf

        <input type="hidden" id="job_id" name="job_id" value="199401040896" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
       

        <div class="border rounded rounded-xl p-4 mb-1">
        <p class="font-bold uppercase text-sm">Maklumat Peribadi</p>
        <div class="mb-5">
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
          <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
        </div>

        <div class="mb-5">
            <label for="birthdate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tarikh Lahir</label>
            <div class="relative max-w-md">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                </svg>
                </div>
                <input datepicker id="birthdate" name="birthdate" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pilih Tarikh Lahir">
            </div>
        </div>

        <div class="mb-5">
            <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jantina</label>
            <ul class="grid w-full gap-0 md:grid-cols-2">
                <li>
                    <input type="radio" id="man" value="man" name="gender" class="hidden peer" required />
                    <label for="man" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                        <div class="block">
                            <div class="w-full text-lg font-semibold">Lelaki</div>
                        </div>
                    </label>
                </li>
                <li>
                    <input type="radio" id="woman" value="woman" name="gender" class="hidden peer" required />
                    <label for="woman" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-pink-500 peer-checked:border-pink-600 peer-checked:text-pink-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                        <div class="block">
                            <div class="w-full text-lg font-semibold">Perempuan</div>
                        </div>
                    </label>
                </li>
            </ul>


        </div>


        <div class="mb-5">
          <label for="race" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bangsa</label>
          <input type="text" id="race" name="race" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
        </div>

        <div class="mb-5">
            <label for="age" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Umur (Tahun)</label>
            <input type="text" id="age" name="age" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
        </div>

        <div class="mb-5">
            <label for="ic_num" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombor Kad Pengenalan (Tanpa -)</label>
            <input type="text" id="ic_num" name="ic_num" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
        </div>

        <div class="mb-5">
            <label for="marital_status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Perkahwinan</label>
            <ul class="grid w-full gap-0 md:grid-cols-3">
                <li>
                    <input type="radio" id="single" value="single" name="marital_status" class="hidden peer" required />
                    <label for="single" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                        <div class="block">
                            <div class="w-full text-lg font-semibold">Bujang</div>
                        </div>
                    </label>
                </li>
                <li>
                    <input type="radio" id="married" value="married" name="marital_status" class="hidden peer" required />
                    <label for="married" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                        <div class="block">
                            <div class="w-full text-lg font-semibold">Berkahwin</div>
                        </div>
                    </label>
                </li>
                <li>
                    <input type="radio" id="divorced" value="divorced" name="marital_status" class="hidden peer" required />
                    <label for="divorced" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                        <div class="block">
                            <div class="w-full text-lg font-semibold">Bercerai</div>
                        </div>
                    </label>
                </li>
            </ul>
        </div>

        <div class="mb-5">
            <label for="fixed_address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Tetap</label>
            <textarea type="text" id="fixed_address" name="fixed_address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required ></textarea>
        </div>

        <div class="mb-5">
            <label for="mail_address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Surat Menyurat (Sekiranya berbeza dari alamat tetap)</label>
            <textarea type="text" id="mail_address" name="mail_address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required ></textarea>
        </div>

        <div class="mb-5">
            <label for="phone_tel_num" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No. Telefon Bimbit (0123456789)</label>
            <input type="text" id="phone_tel_num" name="phone_tel_num" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
        </div>

        <div class="mb-5">
            <label for="home_tel_num" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No. Telefon Rumah (091234567)</label>
            <input type="text" id="home_tel_num" name="home_tel_num" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
        </div>

        <div class="mb-5">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">E-Mel</label>
            <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
        </div>
        {{-- <div class="flex items-center p-4 mb-4 text-sm text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div>
              <span class="font-medium">Makluman</span> 
              <br>Selepas menekan butang <b>Seterusnya</b> , anda akan dibawa ke ruangan borang seterusnya. Sebuah pautan juga akan dihantar ke alamat e-mel diatas untuk anda mengisi borang seterusnya pada masa lain.
            </div>
          </div> --}}
    </div>
        
        <button type="submit" class="text-white bg-lime-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Seterusnya</button>
      </form>


  </div>



  
  
  </section>
  
  
@endsection