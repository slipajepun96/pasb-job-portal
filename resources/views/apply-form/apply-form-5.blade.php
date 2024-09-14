@extends('layout.main')

@section('content')

<section class="">
    <div class="py-8 px-4 mx-auto  text-center lg:py-8 m-2">
        <h1 class="mb-2 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-3xl">Borang Permohonan Kerjaya</h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48">Isikan borang dibawah dengan lengkap</p>
    </div>
    <div class="max-w-screen-lg m-2 p-2 mx-auto">

        {{-- <input type="hidden" id="job_id" name="job_id" value="199401040896" class="" required /> --}}
        {{-- <input type="text" id="candidate_id" name="candidate_id" value="{{$candidate_id}}" class="" required />  --}}
        <form action="{{route('store-apply-form-pg5')}}" method="POST">
            @csrf

        <p class="font-bold uppercase text-sm">Bahagian 5:  Maklumat Tambahan Pekerjaan Terkini</p>


        <div class="border rounded rounded-xl p-4 mb-1">


                <input type="hidden" id="job_id" name="job_id" value="199401040896" class="" required />
                <input type="hidden" id="candidate_id" name="candidate_id" value="{{$candidate_id}}" class="" required />

                {{-- <p class=" font-semibold ">Tambah Maklumat Tambahan Pekerjaan Terkini </p> --}}
                <div class="mb-5">
                    <label for="current_salary" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gaji Pokok Semasa (RM)</label>
                    <input type="text" id="current_salary" name="current_salary" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>

                <div class="mb-5">
                    <label for="current_allowance" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Elaun Semasa (RM) (Jika Ada)</label>
                    <input type="text" id="current_allowance" name="current_allowance" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>

                <div class="mb-5">
                    <label for="latest_bonus_sum" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jumlah Bonus Terkini (RM)</label>
                    <input type="text" id="latest_bonus_sum" name="latest_bonus_sum" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>

                <div class="mb-5">
                    <label for="latest_bonus_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tarikh Bonus Terkini (RM)</label>
                    <div class="relative max-w-md">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                        </div>
                        <input datepicker id="latest_bonus_date" name="latest_bonus_date" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pilih Tarikh Terakhir Bonus">
                    </div>
                </div>

                <div class="mb-5">
                    <label for="responsible_officer" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Laporkan Kepada Siapa ? (Nama Pegawai Anda)</label>
                    <input type="text" id="responsible_officer" name="responsible_officer" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>

                <div class="mb-5">
                    <label for="num_staff_under" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bilangan Orang Yang Melapor Kepada Anda</label>
                    <input type="text" id="num_staff_under" name="num_staff_under" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>

                <div class="mb-5">
                    <label for="resign_period" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempoh Notis Peletakan Jawatan Untuk Pekerjaan Semasa (Minggu / Bulan)</label>
                    <input type="text" id="resign_period" name="resign_period" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>

                <button type="submit" class="text-white bg-lime-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan Maklumat & Seterusnya</button>

            </div> 

            </form>

            
        {{-- <a href="{{url('/apply-form/' . $candidate_id . '/6') }}"><button type="submit" class="text-white bg-lime-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Seterusnya</button> --}}


    </div>



  
  
  </section>
  
  
@endsection