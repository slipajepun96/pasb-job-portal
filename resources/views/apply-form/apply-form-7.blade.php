@extends('layouts.main')

@section('content')

<section class="">
    <div class="py-8 px-4 mx-auto  text-center lg:py-8 m-2">
        <h1 class="mb-2 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-3xl">Borang Permohonan Kerjaya</h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48">Isikan borang dibawah dengan lengkap</p>
    </div>
    <div class="max-w-screen-lg m-2 p-2 mx-auto">

        {{-- <input type="hidden" id="job_id" name="job_id" value="199401040896" class="" required /> --}}
        {{-- <input type="text" id="candidate_id" name="candidate_id" value="{{$candidate_id}}" class="" required />  --}}

        <p class="font-bold uppercase text-sm mt-6">Bahagian 9: Kemahiran / Bakat / Hobi</p>
        <div class="border rounded rounded-xl p-4 mb-1">


            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-3">
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
                                <form action="{{route('delete-hobby')}}" method="POST">
                                    @csrf
                                    <input type="hidden" id="candidate_id" name="candidate_id" value="{{$candidate_id}}" class="" required /> 
                                    <input type="hidden" id="id" name="id" value="{{$hobby->id}}" class="" required />
                                    <button  class="font-medium text-blue-600 hover:underline">Padam</a>
                                </form>
                            </td>
                        </tr>
                        @endforeach
    
    
                    </tbody>
                </table>
            </div>
            <form action="{{route('store-hobby')}}" method="POST">
                @csrf
                <input type="hidden" id="job_id" name="job_id" value="199401040896" class="" required />
                <input type="hidden" id="candidate_id" name="candidate_id" value="{{$candidate_id}}" class="" required />

                <div class="mb-5">
                    <label for="hobby" class="block mb-2 text-sm font-medium text-gray-900">Nama Kemahiran / Bakat / Hobi</label>
                    <input type="text" id="hobby" name="hobby" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>

                <button type="submit" class="text-white bg-lime-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Tambah Maklumat Kemahiran / Bakat / Hobi</button>

            </form>




                {{-- <button type="submit" class="text-white bg-lime-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan Maklumat & Seterusnya</button> --}}

            </div> 
    <form action="{{route('store-apply-form-pg7')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
        <p class="font-bold uppercase text-sm mt-6">Bahagian 10: Maklumat Orang Perlu Dihubungi Semasa Kecemasan</p>



        <div class="border rounded rounded-xl p-4 mb-1">


            <input type="hidden" id="job_id" name="job_id" value="199401040896" class="" required />
            <input type="hidden" id="candidate_id" name="candidate_id" value="{{$candidate_id}}" class="" required />

            {{-- <p class=" font-semibold ">Tambah Maklumat Tambahan Pekerjaan Terkini </p> --}}

            <div class="mb-5">
                <label for="emgcy_contact_name" class="block mb-2 text-sm font-medium text-gray-900">Nama </label>
                <input type="text" id="emgcy_contact_name" name="emgcy_contact_name" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
            </div>

            <div class="mb-5">
                <label for="emgcy_contact_relationship" class="block mb-2 text-sm font-medium text-gray-900">Hubungan </label>
                <input type="text" id="emgcy_contact_relationship" name="emgcy_contact_relationship" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
            </div>

            <div class="mb-5">
                <label for="emgcy_contact_phone_num" class="block mb-2 text-sm font-medium text-gray-900">No. Telefon </label>
                <input type="text" id="emgcy_contact_phone_num" name="emgcy_contact_phone_num" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
            </div>
        </div> 

        <p class="font-bold uppercase text-sm mt-6">Bahagian 11: Rujukan (Selain Keluarga)</p>



        <div class="border rounded rounded-xl p-4 mb-1">
            <p class="font-semibold  text-md ">Rujukan Pertama</p>
            <div class="mb-5">
                <label for="ref1_name" class="block mb-2 text-sm font-medium text-gray-900">Nama </label>
                <input type="text" id="ref1_name" name="ref1_name" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
            </div>

            <div class="mb-5">
                <label for="ref1_phone_num" class="block mb-2 text-sm font-medium text-gray-900">No. Telefon </label>
                <input type="text" id="ref1_phone_num" name="ref1_phone_num" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
            </div>

            <div class="mb-5">
                <label for="ref1_company" class="block mb-2 text-sm font-medium text-gray-900">Nama Syarikat</label>
                <input type="text" id="ref1_company" name="ref1_company" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
            </div>

            <div class="mb-5">
                <label for="ref1_designation" class="block mb-2 text-sm font-medium text-gray-900">Jawatan </label>
                <input type="text" id="ref1_designation" name="ref1_designation" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
            </div>
        </div> 

        <div class="border rounded rounded-xl p-4 mb-1">
            <p class="font-semibold  text-md ">Rujukan Kedua</p>
            <div class="mb-5">
                <label for="ref2_name" class="block mb-2 text-sm font-medium text-gray-900">Nama </label>
                <input type="text" id="ref2_name" name="ref2_name" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
            </div>

            <div class="mb-5">
                <label for="ref2_phone_num" class="block mb-2 text-sm font-medium text-gray-900">No. Telefon </label>
                <input type="text" id="ref2_phone_num" name="ref2_phone_num" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
            </div>

            <div class="mb-5">
                <label for="ref2_company" class="block mb-2 text-sm font-medium text-gray-900">Nama Syarikat</label>
                <input type="text" id="ref2_company" name="ref2_company" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
            </div>

            <div class="mb-5">
                <label for="ref2_designation" class="block mb-2 text-sm font-medium text-gray-900">Jawatan </label>
                <input type="text" id="ref2_designation" name="ref2_designation" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
            </div>
        </div> 

        <p class="font-semibold  text-md mt-3 ">Muat Naik Fail Resume atau sijil-sijil yang berkaitan (jika ada)</p>

        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
        <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" name="attachment" id="attachment" type="file" accept="*,.pdf">
        


        
        <p class="text-sm font-semibold uppercase mt-6">Dengan Menghantar borang ini, SAYA MENGESAHKAN BAHAWA KETERANGAN-KETERANGAN DAN MAKLUMAT-MAKLUMAT YANG DIBERIKAN ADALAH BENAR, SAYA SETUJU JIKA DIDAPATI ADA KETERANGAN YANG TIDAK BENAR SAYA BOLEH DIBERHENTIKAN DENGAN SERTA MERTA OLEH PIHAK SYARIKAT.</p>

           
        <button type="submit" class="mt-3 text-white bg-lime-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan & Hantar Permohonan</button>







            </form>

            
        {{-- <a href="{{url('/apply-form/' . $candidate_id . '/6') }}"><button type="submit" class="text-white bg-lime-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Seterusnya</button> --}}


    </div>



  
  
  </section>
  
  
@endsection