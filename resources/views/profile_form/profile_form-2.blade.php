@extends('layouts.first-time')

@section('content')

<section class="">
    <script>
        function preventSubmit(event) {
            event.preventDefault(); // Prevents form submission
            window.location.href = "/profile/first-time/3"; // Redirects to another page
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
                <span class="flex items-center justify-center w-8 h-8 bg-green-700 rounded-full font-extrabold lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
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



        {{-- <input type="hidden" id="job_id" name="job_id" value="199401040896" class="" required /> --}}
        {{-- <input type="text" id="candidate_id" name="candidate_id" value="{{$candidate_id}}" class="" required />  --}}
       
        <p class="font-bold uppercase text-sm">Bahagian 2: Maklumat Keluarga</p>

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

        <div class="relative overflow-x-auto shadow-md mb-8">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-white uppercase bg-gray-500">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($relatives as $relative)
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td scope="row" class="px-6 py-4 ">
                            <p class="font-medium text-gray-900 whitespace-nowrap">{{$relative->name}}</p>
                            <p class="font-normal text-gray-500">{{$relative->relationship}},{{$relative->age}} Tahun<br>
                            @if($relative->occupation) {{$relative->occupation}} , {{$relative->company_name}}@endif</p>
                        </th>

                        <td class="px-6 py-4 text-right">
                            <form action="{{route('deleteProfileFormForFirstTimePg2')}}" method="POST">
                                @csrf
                                <input type="hidden" id="id" name="id" value="{{$relative->id}}" class="" required />
                                <button  class="font-medium text-blue-600 hover:underline">Padam</a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    <?php if(empty($relative)) { ?>
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td scope="row" rowspan="6" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                Tiada data. Sila tambah pada ruangan di bawah.
                            </td>
                        </tr>
                    <?php  } ?>

                </tbody>
            </table>
        </div>

        <div class="">
            <form action="{{route('storeProfileFormForFirstTimePg2')}}" method="POST">
                @csrf

                <input type="hidden" id="uuid" name="uuid" value="{{$user_uuid}}" class="" required />

                <p class=" font-semibold ">Tambah Maklumat Keluarga ( Sila masukkan 5 ahli keluarga iaitu ibu, bapa dan 3 saudara terdekat )</p>
                <div class="mb-5 starlabel">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                    <input type="text" id="name" name="name" autocomplete="off" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>

                <div class="mb-5 starlabel">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Hubungan</label>
                    <input type="text" id="relationship" name="relationship" autocomplete="off" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>

                <div class="mb-5 starlabel">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Umur (Tahun)</label>
                    <input type="number" id="age" name="age" autocomplete="off" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>

                <div class="mb-5 ">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Pekerjaan</label>
                    <input type="text" id="occupation" name="occupation" autocomplete="off" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  />
                </div>

                <div class="mb-5 ">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Nama Majikan / Sekolah</label>
                    <input type="text" id="company_name" name="company_name" autocomplete="off" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"  />
                </div>

                <div class="md:flex md:flex-row">
                    <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan Maklumat Keluarga</button>
                    <button type="button" onclick="preventSubmit(event)" class="mt-2 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Seterusnya</button>
                </div>
            </form>

        </div>
        
        
        {{-- <form class="max-w-screen-lg m-2 mx-auto" action="{{route('apply-form-pg3')}}" method="POST"> --}}
            {{-- @csrf --}}
            {{-- <input type="hidden" id="job_id" name="job_id" value="199401040896" class="" required /> --}}
            {{-- <input type="text" id="candidate_id" name="candidate_id" value="" class="" required /> --}}
        {{-- <button type="submit" class="text-white bg-lime-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Seterusnya</button> --}}
        {{-- </form> --}}


    </div>



  
  
  </section>
  
  
@endsection