@extends('layouts.first-time')

@section('content')

<section >
    <div class="w-full bg-green-700 text-white rounded rounded-xl p-4 flex flex-col content-center justify-center mb-3">
        <div class="text-2xl font-semibold">Pendaftaran Pertama Kali</div>
        <p class="text-sm text-gray-100">Untuk pendaftaran kali pertama, anda diminta untuk mengisi data seperti maklumat peribadi dan keluarga, pendidikan dan sejarah pekerjaan.</p>
        <p class="text-sm text-gray-100 mt-1">Maklumat ini akan dihantar bersama pada permohonan pekerjaan anda. Oleh itu, anda perlu memastikan semua maklumat adalah dikemaskini sebelum menghantar permohonan pekerjaan.</p>
    </div>

    <div class="">
        <h1 class="mb-2 text-2xl font-bold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-2xl">Profil</h1>
        <p class="mb-4 text-sm font-normal text-gray-500 ">Isikan borang dibawah dengan lengkap </p>
    </div>
    {{-- <div class="py-1 px-2 mx-auto max-w-screen-xl m-1"> --}}
    <form class="" action="{{route('storeProfileFormForFirstTimePg1')}}" method="POST">
        @csrf

        {{-- <input type="hidden" id="job_id" name="job_id" value="199401040896" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
        --}}


        <ol class="flex items-center w-full mb-3">
            <li class="flex w-full items-center text-white after:content-[''] after:w-full after:h-1 after:border-b after:border-green-500 after:border-4 after:inline-block">
                <span class="flex items-center justify-center w-8 h-8 bg-green-700 rounded-full font-extrabold lg:h-12 lg:w-12 dark:bg-blue-800 shrink-0">
                1
                </span>
            </li>
            <li class="flex w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-green-500 after:border-4 after:inline-block dark:after:border-gray-700">
                <span class="flex items-center justify-center w-8 h-8 bg-green-700/50 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                2
                </span>
            </li>
            <li class="flex w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-green-500 after:border-4 after:inline-block dark:after:border-gray-700">
                <span class="flex items-center justify-center w-8 h-8 bg-green-700/50 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                3
                </span>
            </li>
            <li class="flex w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-green-500 after:border-4 after:inline-block dark:after:border-gray-700">
                <span class="flex items-center justify-center w-8 h-8 bg-green-700/50 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                4
                </span>
            </li>
            <li class="flex w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-green-500 after:border-4 after:inline-block dark:after:border-gray-700">
                <span class="flex items-center justify-center w-8 h-8 bg-green-700/50 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                5
                </span>
            </li>
            <li class="flex w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-green-500 after:border-4 after:inline-block dark:after:border-gray-700">
                <span class="flex items-center justify-center w-8 h-8 bg-green-700/50 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                6
                </span>
            </li>
            <li class="flex items-center">
                <span class="flex items-center justify-center w-8 h-8 bg-green-700/50 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                7
                </span>
            </li>
        </ol>

 
        <p class="font-bold uppercase text-sm">Maklumat Peribadi</p>

        @if ($errors->any())
            <div class="bg-red-300 text-red-700 py-4 rounded relative" role="alert">
                <strong class="font-bold">Validation Errors:</strong>
                <ul class="mt-2 list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mb-5 starlabel">
          <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
          <input type="text" id="name" name="name" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
        </div>


        <input type="hidden" id="uuid" name="uuid" value="{{ Auth::user()->uuid }}" class=" border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />


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
                    <label for="man" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 peer-checked:bg-blue-300/50 hover:text-blue-600 hover:bg-blue-100">                           
                        <div class="block">
                            <div class="w-full text-lg font-semibold">Lelaki</div>
                        </div>
                    </label>
                </li>
                <li>
                    <input type="radio" id="woman" value="Perempuan" name="gender" class="hidden peer" required />
                    <label for="woman" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-pink-600 peer-checked:text-pink-600 peer-checked:bg-pink-300/50 hover:text-pink-600 hover:bg-pink-100">                           
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

        {{-- <div class="mb-5 starlabel">
            <label for="age" class="block mb-2 text-sm font-medium text-gray-900">Umur (Tahun)</label>
            <input type="number" id="age" name="age" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
        </div> --}}

        <div class="mb-5 starlabel">
            <label for="ic_num" class="block mb-2 text-sm font-medium text-gray-900">Nombor Kad Pengenalan (Tanpa -)</label>
            <input type="number" id="ic_num" name="ic_num" maxlength="12" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
        </div>

        <div class="mb-5">
            <div class="starlabel"><label for="marital_status" class="block mb-2 text-sm font-medium text-gray-900">Status Perkahwinan</label></div>
            <ul class="grid w-full gap-0 md:grid-cols-3">
                <li>
                    <input type="radio" id="single" value="single" name="marital_status" class="hidden peer" onclick="toggleChildrenInput()" required />
                    <label for="single" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-blue-600 hover:bg-blue-100">                           
                        <div class="block">
                            <div class="w-full text-lg font-semibold">Bujang</div>
                        </div>
                    </label>
                </li>
                <li>
                    <input type="radio" id="married" value="married" name="marital_status" class="hidden peer" onclick="toggleChildrenInput()" required />
                    <label for="married" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-blue-600 hover:bg-blue-100">                           
                        <div class="block">
                            <div class="w-full text-lg font-semibold">Berkahwin</div>
                        </div>
                    </label>
                </li>
                <li>
                    <input type="radio" id="divorced" value="divorced" name="marital_status" class="hidden peer" onclick="toggleChildrenInput()" required />
                    <label for="divorced" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-blue-600 hover:bg-blue-100">                           
                        <div class="block">
                            <div class="w-full text-lg font-semibold">Bercerai</div>
                        </div>
                    </label>
                </li>
            </ul>
        </div>

        <div class="mb-5 hidden starlabel" id="children_input">
            <label for="child_num" class="block mb-2 text-sm font-medium text-gray-900">Bilangan Anak</label>
            <input type="number" id="child_num" name="child_num" maxlength="2" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
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
            <input type="text" id="phone_tel_num" name="phone_tel_num" maxlength="12" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
        </div>

        <div class="mb-5">
            <label for="home_tel_num" class="block mb-2 text-sm font-medium text-gray-900">No. Telefon Rumah (091234567)</label>
            <input type="text" id="home_tel_num" name="home_tel_num" maxlength="11" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
        </div>

        <div class="mb-5 starlabel">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">E-Mel (Tidak Boleh Ditukar)</label>
            <input type="email" id="email" name="email" value="{{ Auth::user()->email }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required readonly/>
        </div>

        {{-- <div class="mb-5 starlabel">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Jangkaan Gaji (RM)</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none ">
                RM  
                </div>
                <input autocomplete="off" id="expected_salary" name="expected_salary" type="number" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="">

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
        </div> --}}
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
    {{-- </div> --}}
        
        <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Seterusnya</button>

    </form>
    </div>

  {{-- </div> --}}




<script>
    document.addEventListener("DOMContentLoaded", function () {
        const phoneInput = document.getElementById("phone_tel_num");

        phoneInput.addEventListener("input", function (event) {
            let value = phoneInput.value.replace(/\D/g, ""); // Remove non-numeric characters

            if (value.length > 3) {
                phoneInput.value = value.substring(0, 3) + '-' + value.substring(3);
            } else {
                phoneInput.value = value;
            }
        });
    });

    document.addEventListener("DOMContentLoaded", function () {
        const phoneInput = document.getElementById("home_tel_num");

        phoneInput.addEventListener("input", function (event) {
            let value = phoneInput.value.replace(/\D/g, ""); // Remove non-numeric characters

            if (value.length > 2) {
                phoneInput.value = value.substring(0, 2) + '-' + value.substring(2);
            } else {
                phoneInput.value = value;
            }
        });
    });

    function toggleChildrenInput() {
    const selectedStatus = document.querySelector('input[name="marital_status"]:checked').value;
    const childrenDiv = document.getElementById('children_input');

    if (selectedStatus === "married" || selectedStatus === "divorced") {
        childrenDiv.classList.remove('hidden');
        childrenDiv.setAttribute('required');
    } else {
        childrenDiv.classList.add('hidden'); 
        childrenDiv.removeAttribute('required');
    }
}

</script>
  
</section>
  
  
@endsection