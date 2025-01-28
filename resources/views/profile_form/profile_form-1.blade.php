@extends('layouts.main')

@section('content')

<section class="">

    @if(!$jobs->isEmpty())
    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-8 m-2">
        <h1 class="mb-2 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-3xl">Borang Permohonan Kerjaya</h1>
        <p class="mb-4 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48">Isikan borang dibawah dengan lengkap</p>
    </div>
    <div class="py-1 px-2 mx-auto max-w-screen-xl m-1">
    <form class="max-w-screen-lg m-2 mx-auto" action="{{route('apply-form-pg1')}}" method="POST">
        @csrf

        {{-- <input type="hidden" id="job_id" name="job_id" value="199401040896" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
        --}}


        <ol class="flex items-center w-full mb-3">
            <li class="flex w-full items-center text-blue-600 text-blue-500 after:content-[''] after:w-full after:h-1 after:border-b after:border-blue-100 after:border-4 after:inline-block">
                <span class="flex items-center justify-center w-10 h-10 bg-blue-100 rounded-full lg:h-12 lg:w-12 dark:bg-blue-800 shrink-0">
                1
                </span>
            </li>
            <li class="flex w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-100 after:border-4 after:inline-block dark:after:border-gray-700">
                <span class="flex items-center justify-center w-10 h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                2
                </span>
            </li>
            <li class="flex w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-100 after:border-4 after:inline-block dark:after:border-gray-700">
                <span class="flex items-center justify-center w-10 h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                3
                </span>
            </li>
            <li class="flex w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-100 after:border-4 after:inline-block dark:after:border-gray-700">
                <span class="flex items-center justify-center w-10 h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                4
                </span>
            </li>
            <li class="flex w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-100 after:border-4 after:inline-block dark:after:border-gray-700">
                <span class="flex items-center justify-center w-10 h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                5
                </span>
            </li>
            <li class="flex w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-100 after:border-4 after:inline-block dark:after:border-gray-700">
                <span class="flex items-center justify-center w-10 h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                6
                </span>
            </li>
            <li class="flex items-center w-full">
                <span class="flex items-center justify-center w-10 h-10 bg-gray-100 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                7
                </span>
            </li>

        </ol>

        <div class="mb-5 ">
            <div class="starlabel"><label for="job_id" class="block mb-2 text-sm font-medium text-gray-900 starlabel">Permohonan Bagi Jawatan (Sila Pilih)</label></div>
            <ul class="grid w-full gap-0 md:grid-cols-2">

                    @foreach($jobs as $job)
                        <li>
                            <input type="radio" id="{{$job->id}}" value="{{$job->id}}" name="job_id" class="hidden peer" required />
                            <label for="{{$job->id}}" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">{{$job->job_ads_title}}</div>
                                </div>
                            </label>
                        </li>
                    @endforeach

                
            </ul>


        </div>

        <div class="border rounded rounded-xl p-4 mb-1">
        <p class="font-bold uppercase text-sm">Maklumat Peribadi</p>
        <div class="mb-5 starlabel">
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
          <input type="text" id="name" name="name" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
        </div>

        <div class="mb-5 starlabel">
            <label for="birthdate" class="block mb-2 text-sm font-medium text-gray-900">Tarikh Lahir</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                </svg>
                </div>
                <input datepicker datepicker-autohide datepicker-format="dd-mm-yyyy" autocomplete="off" id="birthdate" name="birthdate" type="text" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="Pilih Tarikh Lahir">
            </div>
        </div>

        <div class="mb-5">
            <div class="starlabel"><label for="gender" class="block mb-2 text-sm font-medium text-gray-900">Jantina</label></div>
            <ul class="grid w-full gap-0 md:grid-cols-2">
                <li>
                    <input type="radio" id="man" value="Lelaki" name="gender" class="hidden peer" required />
                    <label for="man" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-blue-600 hover:bg-blue-100">                           
                        <div class="block">
                            <div class="w-full text-lg font-semibold">Lelaki</div>
                        </div>
                    </label>
                </li>
                <li>
                    <input type="radio" id="woman" value="Perempuan" name="gender" class="hidden peer" required />
                    <label for="woman" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-pink-600 peer-checked:text-pink-600 hover:text-blue-600 hover:bg-blue-100">                           
                        <div class="block">
                            <div class="w-full text-lg font-semibold">Perempuan</div>
                        </div>
                    </label>
                </li>
            </ul>


        </div>


        <div class="mb-5 starlabel">
          <label for="race" class="block mb-2 text-sm font-medium text-gray-900">Bangsa</label>
          <input type="text" id="race" name="race" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
        </div>

        <div class="mb-5 starlabel">
            <label for="age" class="block mb-2 text-sm font-medium text-gray-900">Umur (Tahun)</label>
            <input type="number" id="age" name="age" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
        </div>

        <div class="mb-5 starlabel">
            <label for="ic_num" class="block mb-2 text-sm font-medium text-gray-900">Nombor Kad Pengenalan (Tanpa -)</label>
            <input type="text" id="ic_num" name="ic_num" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
        </div>

        <div class="mb-5">
            <div class="starlabel"><label for="marital_status" class="block mb-2 text-sm font-medium text-gray-900">Status Perkahwinan</label></div>
            <ul class="grid w-full gap-0 md:grid-cols-3">
                <li>
                    <input type="radio" id="single" value="single" name="marital_status" class="hidden peer" required />
                    <label for="single" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-blue-600 hover:bg-blue-100">                           
                        <div class="block">
                            <div class="w-full text-lg font-semibold">Bujang</div>
                        </div>
                    </label>
                </li>
                <li>
                    <input type="radio" id="married" value="married" name="marital_status" class="hidden peer" required />
                    <label for="married" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-blue-600 hover:bg-blue-100">                           
                        <div class="block">
                            <div class="w-full text-lg font-semibold">Berkahwin</div>
                        </div>
                    </label>
                </li>
                <li>
                    <input type="radio" id="divorced" value="divorced" name="marital_status" class="hidden peer" required />
                    <label for="divorced" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-blue-600 hover:bg-blue-100">                           
                        <div class="block">
                            <div class="w-full text-lg font-semibold">Bercerai</div>
                        </div>
                    </label>
                </li>
            </ul>
        </div>

        <div class="mb-5 starlabel">
            <label for="fixed_address" class="block mb-2 text-sm font-medium text-gray-900">Alamat Tetap</label>
            <textarea type="text" id="fixed_address" name="fixed_address" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required ></textarea>
        </div>

        <div class="mb-5">
            <label for="mail_address" class="block mb-2 text-sm font-medium text-gray-900">Alamat Surat Menyurat (Sekiranya berbeza dari alamat tetap)</label>
            <textarea type="text" id="mail_address" name="mail_address" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" ></textarea>
        </div>

        <div class="mb-5 starlabel">
            <label for="phone_tel_num" class="block mb-2 text-sm font-medium text-gray-900">No. Telefon Bimbit (0123456789)</label>
            <input type="text" id="phone_tel_num" name="phone_tel_num" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
        </div>

        <div class="mb-5">
            <label for="home_tel_num" class="block mb-2 text-sm font-medium text-gray-900">No. Telefon Rumah (091234567)</label>
            <input type="text" id="home_tel_num" name="home_tel_num" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
        </div>

        <div class="mb-5 starlabel">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">E-Mel</label>
            <input type="email" id="email" name="email" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
        </div>

        <div class="mb-5 starlabel">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Jangkaan Gaji (RM)</label>
            {{-- <input type="number" id="expected_salary" name="expected_salary" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required /> --}}
            <div class="relative w-full">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none ">
                RM  
                </div>
                <input autocomplete="off" id="expected_salary" name="expected_salary" type="number" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="1000.00">

            </div>
        </div>

        <div class="mb-5 starlabel">
            <label for="expected_report_for_duty_date" class="block mb-2 text-sm font-medium text-gray-900">Jangkaan Tarikh Masuk</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                </svg>
                </div>
                <input datepicker datepicker-autohide datepicker-format="dd-mm-yyyy" autocomplete="off" id="expected_report_for_duty_date" name="expected_report_for_duty_date" type="text" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="Pilih Tarikh Anda Dijangka Akan Masuk">
            </div>
        </div>
        {{-- <div class="flex items-center p-4 mb-4 text-sm text-blue-800 border border-blue-300 rounded-lg bg-blue-50" role="alert">
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
        
        <button type="submit" class="text-white bg-lime-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Seterusnya</button>
      </form>
    </div>

  </div>

  @else
  <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-8 m-2">
    <h1 class="mb-2 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-3xl">Harap Maaf</h1>
    <p class="mb-8 text-lg font-normal text-gray-500 lg:text-lg sm:px-16 lg:px-48">Tiada Jawatan Kosong Dibuka Pada Masa Ini</p>



    <div class="md:max-w-md mx-auto p-4 text-center bg-blue-700 border border-gray-200 rounded-2xl shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <h5 class="mb-2 text-3xl font-bold text-white">Ikuti kami di Facebook!</h5>
        <p class="mb-5 text-base text-gray-100 sm:text-lg ">Dapatkan maklumat terkini mengenai peluang pekerjaan di PKPP Agro</p>

        <!-- Facebook -->
        <a href="https://web.facebook.com/pkppagro">
            <button
            type="button"
            data-twe-ripple-init
            data-twe-ripple-color="light"
            class="mb-2 inline-block rounded bg-[#1877f2] px-6 py-2.5 text-sm font-medium leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg ">
            <span class="[&>svg]:h-4 [&>svg]:w-4 flex">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 320 512">
                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                <path
                d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
            </svg> Ikuti kami di Facebook
            </span>
            </button>
        </a>
    </div>

</div>

  @endif



  
  
  </section>
  
  
@endsection