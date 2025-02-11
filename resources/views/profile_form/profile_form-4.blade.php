@extends('layouts.first-time')

@section('content')

<section class="">
    <script>
        function preventSubmit(event) {
            event.preventDefault(); // Prevents form submission
            window.location.href = "/profile/first-time/5"; // Redirects to another page
        }
    </script>

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
                <span class="flex items-center justify-center w-8 h-8 bg-green-700 rounded-full font-extrabold lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
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
    <div class="m-2 mx-auto">

        {{-- <input type="hidden" id="job_id" name="job_id" value="199401040896" class="" required /> --}}
        {{-- <input type="text" id="candidate_id" name="candidate_id" value="{{$candidate_id}}" class="" required />  --}}
       
        <p class="font-bold uppercase text-sm">Bahagian 4: Maklumat Pekerjaan</p>

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

        <div class="relative overflow-x-auto shadow-md mb-3">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-white uppercase bg-gray-500">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Sejarah Pekerjaan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($career_histories as $career_history)
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 text-wrap">
                            <p class="font-medium ">{{$career_history->employer_name}}</p>
                            <p class="font-normal">{{$career_history->designation}}, {{$career_history->start_year}} - @if($career_history->resign_reason != null){{$career_history->end_year}} @else Sekarang @endif,<br>
                                Gaji : RM {{$career_history->final_salary}} @if($career_history->resign_reason != null), Sebab Berhenti : {{$career_history->resign_reason}} @endif</p>
                        </th>
                     
                        <td class="px-6 py-4 text-right">
                            <form action="{{route('deleteProfileFormForFirstTimePg4')}}" method="POST">
                                @csrf
                                <input type="hidden" id="id" name="id" value="{{$career_history->id}}" class="" required />
                                <button  class="font-medium text-blue-600 hover:underline">Padam</a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @if(empty($career_history))
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td scope="row" rowspan="2" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                Tiada data. Sila tambah pada ruangan di bawah.
                            </td>
                        </tr>
                    @endif


                </tbody>
            </table>
        </div>


        <form action="{{route('storeProfileFormForFirstTimePg4')}}" method="POST">
            @csrf


            <p class=" font-semibold ">Tambah Maklumat Pekerjaan </p>
            <div class="mb-5 starlabel">
                <label for="employer_name" class="block mb-2 text-sm font-medium text-gray-900">Nama Majikan</label>
                <input type="text" id="employer_name" name="employer_name" autocomplete="off" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
            </div>

            <div class="mb-5 starlabel">
                <label for="designation" class="block mb-2 text-sm font-medium text-gray-900">Jawatan</label>
                <input type="text" id="designation" name="designation" autocomplete="off" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
            </div>

            <div class="mb-5 starlabel">
                <label for="start_year" class="block mb-2 text-sm font-medium text-gray-900">Tahun Mula Bekerja</label>
                <input type="text" id="start_year" autocomplete="off" name="start_year" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" pattern="\d*" maxlength="4" required />
            </div>

            <div class="mb-5 ">
                <label for="end_year" class="block mb-2 text-sm font-medium text-gray-900">Tahun Habis Bekerja (Kosongkan Jika Ini Pekerjaan Semasa Anda)</label>
                <input type="text" id="end_year" name="end_year" autocomplete="off" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" pattern="\d*" maxlength="4" />
            </div>

            <div class="mb-5 starlabel">
                <label for="final_salary" class="block mb-2 text-sm font-medium text-gray-900">Gaji Akhir (RM)</label>
                {{-- <input type="text" id="final_salary" name="final_salary" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required /> --}}
                <div class="relative w-full">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none ">
                    RM  
                    </div>
                    <input autocomplete="off" id="final_salary" name="final_salary" type="number" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="" required>
    
                </div>
            </div>

            <div class="mb-5">
                <label for="resign_reason" class="block mb-2 text-sm font-medium text-gray-900">Sebab Berhenti</label>
                <input type="text" id="resign_reason" autocomplete="off" name="resign_reason" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  />
            </div>
            <div class="md:flex md:flex-row">
                <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan Maklumat Pekerjaan</button>
                <button type="button" onclick="preventSubmit(event)" class="mt-2 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Seterusnya</button>
            </div>
        </form>



            

    </div>



  
  
  </section>
  
  
@endsection