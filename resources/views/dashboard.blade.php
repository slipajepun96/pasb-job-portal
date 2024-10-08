@extends('layouts.main')

@section('content')

<section class="">
    <div class="py-8 px-4 mx-auto  text-center lg:py-8 m-2">
        <h1 class="mb-2 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-3xl">Senarai Permohonan Kerjaya</h1>
        {{-- <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48">Isikan borang dibawah dengan lengkap</p> --}}
    </div>

    <div class="max-w-screen-lg m-2 mx-auto">
        {{-- <img src="https://pkppagro.com.my/assets/img/web_letterhead.png" > --}}

        <form action="{{route('index-job-selected')}}" method="POST" class="m-1 flex">
            @csrf

            <label for="job_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Nama Jawatan</label>
            <select id="job_id" name="job_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              {{-- <option selected>Choose a country</option> --}}
              @foreach($jobs as $job)
                <option  value="{{$job->id}}">{{$job->job_ads_title}}</option>
              @endforeach
            </select>
            <button type="submit" class="text-white bg-lime-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Tapis</button>
        </form>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-3">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-white uppercase bg-gray-500">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jawatan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jantina
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tarikh Hantar Borang
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Tindakan</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($candidate_data as $candidate)
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{$candidate->name}}
                        </th>
                        <td class="px-6 py-4">
                            <?php 
                                foreach($jobs as $job)
                                {
                                    if($job->id == $candidate->job_id)
                                    {
                                        echo $job->job_ads_title;
                                    }
                                }
                            ?>
                        </td>
                        <td class="px-6 py-4">
                            {{$candidate->gender}}
                            {{-- {{$candidate->attachment_location}} --}}
                        </td>
                        <td class="px-6 py-4">
                            {{$candidate->form_submitted_date}}
                        </td>

                        <td class="px-6 py-4 text-right">
                            {{-- <form action="{{route('get-attachment')}}" method="POST">
                                @csrf
                                <input type="hidden" id="attachment_location" name="attachment_location" value="{{$candidate->attachment_location}}" class="" required /> 
                                <button  class=" bg-cyan-700 px-2 py-1 text-white rounded font-medium text-blue-600 hover:underline">Muat Turun Lampiran</a>
                            </form> --}}
                            <a href="/storage/{{$candidate->attachment_location}}" class="bg-cyan-700 px-2 py-1 text-white rounded font-medium text-blue-600 hover:underline">Muat Turun Lampiran</a>
                            <form action="{{route('get-apply_form_pdf')}}" method="POST">
                                @csrf
                                <input type="hidden" id="id" name="id" value="{{$candidate->id}}" class="" required /> 
                                <button  class=" mt-1 bg-teal-700 px-2 py-1 text-white rounded font-medium text-blue-600 hover:underline">Muat Turun PDF</a>
                            </form>
                            {{-- <form action="{{route('delete-apply-form-pg3')}}" method="POST"> --}}
                                {{-- @csrf --}}
                                {{-- <input type="hidden" id="candidate_id" name="candidate_id" value="{{$candidate_id}}" class="" required />  --}}
                                {{-- <button  class="font-medium text-blue-600 hover:underline">Padam</a> --}}
                            {{-- </form> --}}
                        </td>
                    </tr>
                    @endforeach
                    


                </tbody>
            </table>
        </div>
    </div>



  
  
  </section>
  
  
@endsection