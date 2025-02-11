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
                <span class="flex items-center justify-center w-8 h-8 bg-green-700/80 rounded-full lg:h-12 lg:w-12 dark:bg-blue-800 shrink-0">
                5
                </span>
            </li>
            <li class="flex w-full items-center text-white after:content-[''] after:w-full after:h-1 after:border-b after:border-green-500 after:border-4 after:inline-block">
                <span class="flex items-center justify-center w-8 h-8 bg-green-700/80 rounded-full lg:h-12 lg:w-12 dark:bg-blue-800 shrink-0">
                6
                </span>
            </li>
            <li class="flex items-center text-white">
                <span class="flex items-center justify-center w-8 h-8 bg-green-700 rounded-full font-extrabold lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                7
                </span>
            </li>
        </ol>
    <div class="m-2 p-2 mx-auto">

        {{-- <input type="hidden" id="job_id" name="job_id" value="199401040896" class="" required /> --}}
        {{-- <input type="text" id="candidate_id" name="candidate_id" value="{{$candidate_id}}" class="" required />  --}}

        <p class="font-bold uppercase text-sm mt-6">Bahagian 9: Kemahiran / Bakat / Hobi</p>
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

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="relative overflow-x-auto shadow-md mb-3">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-white uppercase bg-gray-500">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Kemahiran / Bakat / Hobi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($hobbies as $hobby)
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{$hobby->hobby}}
                        </th>
                        <td class="px-6 py-4 text-right">
                            <form action="{{route('deleteHobby')}}" method="POST">
                                @csrf
                                <input type="hidden" id="id" name="id" value="{{$hobby->id}}" class="" required />
                                <button  class="font-medium text-blue-600 hover:underline">Padam</a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @if(empty($hobby))
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td scope="row" rowspan="2" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                Tiada data. Sila tambah pada ruangan di bawah.
                            </td>
                        </tr>
                    @endif


                </tbody>
            </table>
        </div>
        <form action="{{route('storeHobby')}}" method="POST">
            @csrf

            <div class="mb-5 starlabel">
                <label for="hobby" class="block mb-2 text-sm font-medium text-gray-900">Nama Kemahiran / Bakat / Hobi</label>
                <input type="text" id="hobby" name="hobby" autocomplete="off" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
            </div>

            <button type="submit" class="text-white bg-lime-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Tambah Maklumat Kemahiran / Bakat / Hobi</button>

        </form>
        <form action="{{route('storeProfileFormForFirstTimePg7')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <p class="font-bold uppercase text-sm mt-6">Bahagian 10: Maklumat Orang Perlu Dihubungi Semasa Kecemasan</p>
            
            <div class="mb-5 starlabel">
                <label for="emgcy_contact_name" class="block mb-2 text-sm font-medium text-gray-900">Nama </label>
                <input type="text" id="emgcy_contact_name" autocomplete="off" name="emgcy_contact_name" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
            </div>

            <div class="mb-5 starlabel">
                <label for="emgcy_contact_relationship" class="block mb-2 text-sm font-medium text-gray-900">Hubungan </label>
                <input type="text" id="emgcy_contact_relationship" name="emgcy_contact_relationship" autocomplete="off" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
            </div>

            <div class="mb-5 starlabel">
                <label for="emgcy_contact_phone_num" class="block mb-2 text-sm font-medium text-gray-900">No. Telefon </label>
                <input type="text" id="emgcy_contact_phone_num" name="emgcy_contact_phone_num" autocomplete="off" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
            </div>

            <p class="font-bold uppercase text-sm mt-6">Bahagian 11: Rujukan (Pekerjaan)</p>

            <p class="font-semibold  text-md ">Rujukan Pertama</p>
            <div class="mb-5 starlabel">
                <label for="ref1_name" class="block mb-2 text-sm font-medium text-gray-900">Nama </label>
                <input type="text" id="ref1_name" name="ref1_name" autocomplete="off" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
            </div>

            <div class="mb-5 starlabel">
                <label for="ref1_phone_num" class="block mb-2 text-sm font-medium text-gray-900">No. Telefon </label>
                <input type="text" id="ref1_phone_num" name="ref1_phone_num" autocomplete="off" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
            </div>

            <div class="mb-5 starlabel">
                <label for="ref1_company" class="block mb-2 text-sm font-medium text-gray-900">Nama Syarikat</label>
                <input type="text" id="ref1_company" name="ref1_company" autocomplete="off" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
            </div>

            <div class="mb-5 starlabel">
                <label for="ref1_designation" class="block mb-2 text-sm font-medium text-gray-900">Jawatan </label>
                <input type="text" id="ref1_designation" name="ref1_designation" autocomplete="off" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
            </div>

            <p class="font-semibold  text-md ">Rujukan Kedua</p>
            <div class="mb-5 starlabel">
                <label for="ref2_name" class="block mb-2 text-sm font-medium text-gray-900">Nama </label>
                <input type="text" id="ref2_name" name="ref2_name" autocomplete="off" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
            </div>

            <div class="mb-5 starlabel">
                <label for="ref2_phone_num" class="block mb-2 text-sm font-medium text-gray-900">No. Telefon </label>
                <input type="text" id="ref2_phone_num" name="ref2_phone_num" autocomplete="off" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
            </div>

            <div class="mb-5 starlabel">
                <label for="ref2_company" class="block mb-2 text-sm font-medium text-gray-900">Nama Syarikat</label>
                <input type="text" id="ref2_company" name="ref2_company" autocomplete="off" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
            </div>

            <div class="mb-5 starlabel">
                <label for="ref2_designation" class="block mb-2 text-sm font-medium text-gray-900">Jawatan </label>
                <input type="text" id="ref2_designation" name="ref2_designation" autocomplete="off" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
            </div>

            <p class="font-semibold  text-md mt-3 ">Muat Naik Fail Resume atau sijil-sijil yang berkaitan (jika ada) (PDF Sahaja)</p>

            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" name="attachment" id="attachment" type="file" accept="*.pdf">
            
            {{-- <p class="text-sm font-semibold uppercase mt-6">Dengan Menghantar borang ini, SAYA MENGESAHKAN BAHAWA KETERANGAN-KETERANGAN DAN MAKLUMAT-MAKLUMAT YANG DIBERIKAN ADALAH BENAR, SAYA SETUJU JIKA DIDAPATI ADA KETERANGAN YANG TIDAK BENAR SAYA BOLEH DIBERHENTIKAN DENGAN SERTA MERTA OLEH PIHAK SYARIKAT.</p> --}}

            <button type="submit" class="mt-3 text-white bg-lime-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan Profil</button>
        </form>
    </div>
  </section>
  
  
@endsection