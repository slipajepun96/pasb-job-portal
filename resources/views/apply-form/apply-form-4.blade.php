@extends('layout.main')

@section('content')

<section class="">
    <div class="py-8 px-4 mx-auto  text-center lg:py-8 m-2">
        <h1 class="mb-2 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-3xl">Borang Permohonan Kerjaya</h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48">Isikan borang dibawah dengan lengkap</p>
    </div>
    <div class="max-w-screen-lg m-2 mx-auto">

        {{-- <input type="hidden" id="job_id" name="job_id" value="199401040896" class="" required /> --}}
        {{-- <input type="text" id="candidate_id" name="candidate_id" value="{{$candidate_id}}" class="" required />  --}}
       
        <p class="font-bold uppercase text-sm">Bahagian 4: Maklumat Pekerjaan</p>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-3">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-gray-500 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama Majikan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jawatan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Dari
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Hingga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Gaji Akhir
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Sebab Berhenti
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($career_histories as $career_history)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$career_history->employer_name}}
                        </th>
                        <td class="px-6 py-4">
                            {{$career_history->designation}}
                        </td>
                        <td class="px-6 py-4">
                            {{$career_history->start_year}}
                        </td>
                        <td class="px-6 py-4">
                            {{$career_history->end_year}}
                        </td>
                        <td class="px-6 py-4">
                            RM {{$career_history->final_salary}}
                        </td>
                        <td class="px-6 py-4">
                            {{$career_history->resign_reason}}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <form action="{{route('delete-apply-form-pg4')}}" method="POST">
                                @csrf
                                <input type="hidden" id="candidate_id" name="candidate_id" value="{{$candidate_id}}" class="" required /> 
                                <input type="hidden" id="id" name="id" value="{{$career_history->id}}" class="" required />
                                <button  class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Padam</a>
                            </form>
                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>

        <div class="border rounded rounded-xl p-4 mb-1">
            <form action="{{route('store-apply-form-pg4')}}" method="POST">
                @csrf

                <input type="hidden" id="job_id" name="job_id" value="199401040896" class="" required />
                <input type="hidden" id="candidate_id" name="candidate_id" value="{{$candidate_id}}" class="" required />

                <p class=" font-semibold ">Tambah Maklumat Pekerjaan </p>
                <div class="mb-5">
                    <label for="employer_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Majikan</label>
                    <input type="text" id="employer_name" name="employer_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>

                <div class="mb-5">
                    <label for="designation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jawatan</label>
                    <input type="text" id="designation" name="designation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>

                <div class="mb-5">
                    <label for="start_year" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun Mula Bekerja</label>
                    <input type="text" id="start_year" name="start_year" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" pattern="\d*" maxlength="4" required />
                </div>

                <div class="mb-5">
                    <label for="end_year" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tahun Habis Bekerja</label>
                    <input type="text" id="end_year" name="end_year" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" pattern="\d*" maxlength="4" required />
                </div>

                <div class="mb-5">
                    <label for="final_salary" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gaji Akhir (RM)</label>
                    <input type="text" id="final_salary" name="final_salary" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>

                <div class="mb-5">
                    <label for="resign_reason" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sebab Berhenti</label>
                    <input type="text" id="resign_reason" name="resign_reason" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>

                <button type="submit" class="text-white bg-lime-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan Maklumat Pekerjaan</button>

            </form>
        </div>
            
        <a href="{{url('/apply-form/' . $candidate_id . '/5') }}"><button type="submit" class="text-white bg-lime-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Seterusnya</button>
        
        {{-- <form class="max-w-screen-lg m-2 mx-auto" action="{{route('apply-form-pg3')}}" method="POST">
            @csrf
            <input type="hidden" id="job_id" name="job_id" value="199401040896" class="" required />
            <input type="hidden" id="candidate_id" name="candidate_id" value="829dd421-3a02-4f15-b65d-889a15e5c730" class="" required />
        <button type="submit" class="text-white bg-lime-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Seterusnya</button>
        </form> --}}


    </div>



  
  
  </section>
  
  
@endsection