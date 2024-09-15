@extends('layouts.main')

@section('content')

<section class="">
    <div class="py-8 px-4 mx-auto  text-center lg:py-8 m-2">
        <h1 class="mb-2 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-3xl">Tambah Jawatan Kosong</h1>
    </div>
    <div class="max-w-screen-lg m-2 mx-auto">

        <div class="border rounded rounded-xl p-4 mb-1">
            <form action="{{route('add-job')}}" method="POST">
                @csrf


                {{-- <p class=" font-semibold ">Tambah Maklumat Keluarga ( Sila masukkan 5 ahli keluarga iaitu Ibu, bapa dan 3 saudara terdekat )</p> --}}
                <div class="mb-5">
                    <label for="job_ads_title" class="block mb-2 text-sm font-medium text-gray-900">Nama Jawatan</label>
                    <input type="text" id="job_ads_title" name="job_ads_title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>

                <div class="mb-5">
                    <label for="job_location" class="block mb-2 text-sm font-medium text-gray-900">Penempatan Jawatan</label>
                    <input type="text" id="job_location" name="job_location" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>

                <div class="mb-5">
                    <label for="job_description" class="block mb-2 text-sm font-medium text-gray-900">Keterangan Jawatan</label>
                    <input type="text" id="job_description" name="job_description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>

                <div class="mb-5">
                    <label for="start_date" class="block mb-2 text-sm font-medium text-gray-900">Tarikh Mula</label>
                    <div class="relative max-w-md">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                        </div>
                        <input datepicker id="start_date" name="start_date" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="Pilih Tarikh Mula">
                    </div>
                </div>

                <div class="mb-5">
                    <label for="end_date" class="block mb-2 text-sm font-medium text-gray-900">Tarikh Akhir</label>
                    <div class="relative max-w-md">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                        </div>
                        <input datepicker id="end_date" name="end_date" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="Pilih Tarikh Akhir">
                    </div>
                </div>

                <div class="mb-5">
                    <label for="ads_link" class="block mb-2 text-sm font-medium text-gray-900">Pautan Ke Iklan Jawatan (PDF)</label>
                    <input type="text" id="ads_link" name="ads_link" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>

                <button type="submit" class="text-white bg-lime-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan</button>

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