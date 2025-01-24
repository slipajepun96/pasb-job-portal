@extends('layouts.main')

@section('content')

<section class="">
    <div class="">
        <h1 class="mb-2 text-2xl font-bold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-2xl">Senarai Permohonan</h1>
        @if(!empty($job_details))
        <p class="text-lg font-normal text-gray-900 lg:text-xl ">Jawatan : {{$job_details->job_ads_title}} ({{$job_details->start_date}}) </p>
        <p class="text-lg font-normal text-gray-900 lg:text-xl ">46 Permohonan </p>
        @endif
    </div>

    <div class="">
        {{-- <img src="https://pkppagro.com.my/assets/img/web_letterhead.png" > --}}

        {{-- card that show vacancy open, date open and number of applicants --}}


        <div class="">
            @foreach($data as $job)
                <div>
                    <a href="/applicant-list/{{$job[4]}}" >
                        <div class="p-3 bg-white border border-gray-200 rounded-xl shadow-sm">
                            <h5 class="text-lg font-bold tracking-tight text-gray-900 ">{{$job[0]}} </h5>
                            <p class=" text-sm font-bold tracking-tight text-gray-600 ">Date Posted : {{$job[1]}} - {{$job[2]}} </p>
                            <p class=" text-sm font-medium tracking-tight text-gray-600 ">{{$job[3]}} Permohonan</p>
                        </div>
                    </a>
                </div>
            @endforeach
            
        </div>



            {{-- <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p> --}}
            {{-- <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                Read more
                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a> --}}
{{-- 
        <form action="{{route('index-job-selected')}}" method="POST" class="m-1 flex">
            @csrf

            <label for="job_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Nama Jawatan</label>
            <select id="job_id" name="job_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option selected value="01">-Please Select-</option>
              @foreach($jobs as $job)
                <option  value="{{$job->id}}">{{$job->job_ads_title}} - Date Posted : {{$job->start_date}}</option>
              @endforeach
            </select>
            <button type="submit" class="text-white bg-lime-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Tapis</button>
        </form> --}}

        
    </div>



  
  
  </section>
  
  
@endsection