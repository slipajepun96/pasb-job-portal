@extends('layouts.first-time')

@section('content')

<section class="">

    <div class="">
        <h1 class="mb-2 text-2xl font-bold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-2xl">Profil</h1>
        <p class="mb-4 text-sm font-normal text-gray-500 ">Isikan borang dibawah dengan lengkap </p>
    </div>
    <div class=" m-2 mx-auto">
        <ol class="flex items-center w-full mb-3">
            <li class="flex w-full items-center text-white after:content-[''] after:w-full after:h-1 after:border-b after:border-green-500 after:border-4 after:inline-block">
                <span class="flex items-center justify-center w-8 h-8 bg-green-700/80 rounded-full lg:h-12 lg:w-12 dark:bg-blue-800 shrink-0">
                1
                </span>
            </li>
            <li class="flex w-full items-center text-white after:content-[''] after:w-full after:h-1 after:border-b after:border-green-500 after:border-4 after:inline-block">
                <span class="flex items-center justify-center w-8 h-8 bg-green-700/80 rounded-full lg:h-12 lg:w-12 dark:bg-blue-800 shrink-0">
                2
                </span>
            </li>
            <li class="flex w-full items-center text-white after:content-[''] after:w-full after:h-1 after:border-b after:border-green-500 after:border-4 after:inline-block">
                <span class="flex items-center justify-center w-8 h-8 bg-green-700/80 rounded-full lg:h-12 lg:w-12 dark:bg-blue-800 shrink-0">
                3
                </span>
            </li>
            <li class="flex w-full items-center text-white after:content-[''] after:w-full after:h-1 after:border-b after:border-green-500 after:border-4 after:inline-block">
                <span class="flex items-center justify-center w-8 h-8 bg-green-700/80 rounded-full lg:h-12 lg:w-12 dark:bg-blue-800 shrink-0">
                4
                </span>
            </li>
            <li class="flex w-full items-center text-white after:content-[''] after:w-full after:h-1 after:border-b after:border-green-500 after:border-4 after:inline-block">
                <span class="flex items-center justify-center w-8 h-8 bg-green-700 rounded-full font-extrabold lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
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
    <div class="m-2 mx-auto">

        {{-- <input type="hidden" id="job_id" name="job_id" value="199401040896" class="" required /> --}}
        {{-- <input type="text" id="candidate_id" name="candidate_id" value="{{$candidate_id}}" class="" required />  --}}
        <form action="{{route('storeProfileFormForFirstTimePg5')}}" method="POST">
            @csrf

        <p class="font-bold uppercase text-sm">Bahagian 5:  Maklumat Tambahan Pekerjaan Terkini</p>
        @if (session('status'))
            <div id="alertBox" class="bg-green-100 border-l-4 border-green-500 text-green-700 p-2 mb-4" role="alert">
                <p class="font-bold">Berjaya dibuang</p>
                <p>{{ session('status') }}</p>
            </div>
        
            <script>
                setTimeout(() => {
                    document.getElementById('alertBox')?.remove();
                }, 3000); // 3000ms = 3 seconds
            </script>
        @endif

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

                {{-- <p class=" font-semibold ">Tambah Maklumat Tambahan Pekerjaan Terkini </p> --}}
                <div class="mb-5 starlabel">
                    <label for="current_salary" class="block mb-2 text-sm font-medium text-gray-900">Gaji Pokok Semasa (RM)</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none ">
                        RM  
                        </div>
                        <input autocomplete="off" id="current_salary" name="current_salary" type="number" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="" autocomplete="off" required>
                    </div>
                </div>

                <div class="mb-5">
                    <label for="current_allowance" class="block mb-2 text-sm font-medium text-gray-900">Elaun Semasa (RM) (Jika Ada)</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none ">
                        RM  
                        </div>
                        <input autocomplete="off" id="current_allowance" name="current_allowance" type="number" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="" autocomplete="off">
                    </div>
                </div>

                <div class="mb-5">
                    <label for="latest_bonus_sum" class="block mb-2 text-sm font-medium text-gray-900">Jumlah Bonus Terkini (RM)</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none ">
                        RM  
                        </div>
                        <input autocomplete="off" id="latest_bonus_sum" name="latest_bonus_sum" type="number" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="" autocomplete="off">
                    </div>
                </div>

                <div class="mb-5">
                    <label for="latest_bonus_date" class="block mb-2 text-sm font-medium text-gray-900">Tarikh Bonus Terkini</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                        </div>
                        <input datepicker datepicker-autohide datepicker-format="dd-mm-yyyy" autocomplete="off" id="latest_bonus_date" name="latest_bonus_date" type="text" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="Pilih Tarikh Terakhir Bonus" autocomplete="off">
                    </div>
                </div>

                <div class="mb-5 starlabel">
                    <label for="responsible_officer" class="block mb-2 text-sm font-medium text-gray-900">Laporkan Kepada Siapa ? (Nama Pegawai Anda)</label>
                    <input type="text" id="responsible_officer" name="responsible_officer" autocomplete="off" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>

                <div class="mb-5 starlabel">
                    <label for="num_staff_under" class="block mb-2 text-sm font-medium text-gray-900">Bilangan Orang Yang Melapor Kepada Anda</label>
                    <input type="text" id="num_staff_under" name="num_staff_under" autocomplete="off" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>

                <div class="mb-5 starlabel">
                    <label for="resign_period" class="block mb-2 text-sm font-medium text-gray-900">Tempoh Notis Peletakan Jawatan Untuk Pekerjaan Semasa (Minggu / Bulan)</label>
                    <input type="text" id="resign_period" name="resign_period" autocomplete="off" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>

                <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan Maklumat & Seterusnya</button>

            </div> 

            </form>

            
        {{-- <a href="{{url('/apply-form/' . $candidate_id . '/6') }}"><button type="submit" class="text-white bg-lime-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Seterusnya</button> --}}


    </div>



  
  
  </section>
  
  
@endsection