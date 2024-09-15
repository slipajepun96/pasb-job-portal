@extends('layouts.main')

@section('content')

<section class="">
    <div class="py-8 px-4 mx-auto  text-center lg:py-8 m-2">
        <h1 class="mb-2 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-3xl">Borang Permohonan Kerjaya</h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48">Isikan borang dibawah dengan lengkap</p>
    </div>
    <div class="max-w-screen-lg m-2 mx-auto">

        {{-- <input type="hidden" id="job_id" name="job_id" value="199401040896" class="" required /> --}}
        {{-- <input type="text" id="candidate_id" name="candidate_id" value="{{$candidate_id}}" class="" required />  --}}
       
        <p class="font-bold uppercase text-sm">Bahagian 2: Maklumat Keluarga</p>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-3">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-white uppercase bg-gray-500">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Hubungan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Umur
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Pekerjaan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Majikan / Sekolah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($relatives as $relative)
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{$relative->name}}
                        </th>
                        <td class="px-6 py-4">
                            {{$relative->relationship}}
                        </td>
                        <td class="px-6 py-4">
                            {{$relative->age}}
                        </td>
                        <td class="px-6 py-4">
                            {{$relative->occupation}}
                        </td>
                        <td class="px-6 py-4">
                            {{$relative->company_name}}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <form action="{{route('delete-apply-form-pg2')}}" method="POST">
                                @csrf
                                <input type="hidden" id="candidate_id" name="candidate_id" value="{{$candidate_id}}" class="" required /> 
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

        <div class="border rounded rounded-xl p-4 mb-1">
            <form action="{{route('store-apply-form-pg2')}}" method="POST">
                @csrf

                <input type="hidden" id="job_id" name="job_id" value="199401040896" class="" required />
                <input type="hidden" id="candidate_id" name="candidate_id" value="{{$candidate_id}}" class="" required />

                <p class=" font-semibold ">Tambah Maklumat Keluarga ( Sila masukkan 5 ahli keluarga iaitu Ibu, bapa dan 3 saudara terdekat )</p>
                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                    <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>

                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Hubungan</label>
                    <input type="text" id="relationship" name="relationship" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>

                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Umur</label>
                    <input type="text" id="age" name="age" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>

                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Pekerjaan</label>
                    <input type="text" id="occupation" name="occupation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>

                <div class="mb-5">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Nama Majikan / Sekolah</label>
                    <input type="text" id="company_name" name="company_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>

                <button type="submit" class="text-white bg-lime-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan Maklumat Keluarga</button>

            </form>
        </div>
        
        <a href="{{url('/apply-form/' . $candidate_id . '/3') }}"><button type="submit" class="text-white bg-lime-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Seterusnya</button>
        </a>
        {{-- <form class="max-w-screen-lg m-2 mx-auto" action="{{route('apply-form-pg3')}}" method="POST"> --}}
            {{-- @csrf --}}
            {{-- <input type="hidden" id="job_id" name="job_id" value="199401040896" class="" required /> --}}
            {{-- <input type="text" id="candidate_id" name="candidate_id" value="" class="" required /> --}}
        {{-- <button type="submit" class="text-white bg-lime-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Seterusnya</button> --}}
        {{-- </form> --}}


    </div>



  
  
  </section>
  
  
@endsection