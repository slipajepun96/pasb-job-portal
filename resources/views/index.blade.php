@extends('layouts.main')

@section('content')

<section class="">
  @if(session('status'))
  <div class=" flex flex-inline bg-green-500 text-white p-2 rounded m-3 font-medium" id="status_message">
        {{session('status')}}
  </div>
@endif

    <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-8">
        <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl">Kerjaya</h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48">Mari 
          <span class="text-lime-500 mx-1 font-bold text-lg relative inline-block stroke-current">
              membangun
              <svg class="absolute -bottom-0.5 w-full max-h-1.5" viewBox="0 0 55 5" xmlns="http://www.w3.org/2000/svg"
                  preserveAspectRatio="none">
                  <path d="M0.652466 4.00002C15.8925 2.66668 48.0351 0.400018 54.6853 2.00002" stroke-width="2"></path>
              </svg>
          </span>
        bersama kami. test</p>
        
        

    </div>
  @if(!$jobs->isEmpty())
  @foreach($jobs as $job)
    <div class="max-w-screen-xl mx-auto justify-center w-auto">

      <div class="m-2 p-6 bg-white border border-gray-200 rounded-2xl shadow hover:shadow-lg">
        <div class="border bg-sky-100 border-sky-400 inline-flex justify-center items-center my-1 py-1 px-3 text-base font-bold text-center text-sky-800 rounded-lg">KERJAYA</div>
        <h6 class="mb-1 text-xl font-semibold tracking-tight text-gray-900">IKLAN JAWATAN KOSONG : {{$job->job_ads_title}}</h6>
        <p class="mb-2 font-semibold text-gray-700 ">Penempatan : {{$job->job_location}}</p>
        <p class="mb-2 font-semibold text-gray-700 ">Tarikh Tutup Permohonan : {{$job->end_date}}</p>
          <a href="{{$job->ads_link}}" class="inline-flex justify-center items-center my-1 py-2 px-3 text-base font-medium text-center text-white rounded-lg bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-blue-300 ">
            <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
              <path fill-rule="evenodd" d="M13 11.15V4a1 1 0 1 0-2 0v7.15L8.78 8.374a1 1 0 1 0-1.56 1.25l4 5a1 1 0 0 0 1.56 0l4-5a1 1 0 1 0-1.56-1.25L13 11.15Z" clip-rule="evenodd"/>
              <path fill-rule="evenodd" d="M9.657 15.874 7.358 13H5a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2h-2.358l-2.3 2.874a3 3 0 0 1-4.685 0ZM17 16a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H17Z" clip-rule="evenodd"/>
            </svg>
                
            Muat Turun Iklan Jawatan Kosong
    
          </a>
      </div>
      @endforeach
      

      <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-8">
          <p>Berminat ?  Sila klik butang di bawah untuk mengisi borang permohonan</p>
          <a href="/apply-form" class="inline-flex justify-center items-center my-1 py-2 px-3 text-base font-medium text-center text-white rounded-lg bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-blue-300 ">
              Borang Permohonan Kerjaya
          </a>
      </div>  

    </div>

  @else
  <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-8 m-2">
    
    <h1 class="mb-2 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-3xl">Harap Maaf</h1>
    <p class="mb-8 text-lg font-normal text-gray-500 lg:text-lg sm:px-16 lg:px-48">Tiada Jawatan Kosong Dibuka Pada Masa Ini</p>



    <div class="md:max-w-md mx-auto p-4 text-center bg-blue-600 border border-gray-200 rounded-2xl shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
        <h5 class="mb-2 text-3xl font-bold text-white">Ikuti kami di Facebook!</h5>
        <p class="mb-5 text-base text-gray-100 sm:text-lg ">Dapatkan maklumat terkini mengenai peluang pekerjaan di PKPP Agro</p>

        <!-- Facebook -->
        <a href="https://web.facebook.com/pkppagro">
            <button
            type="button"
            data-twe-ripple-init
            data-twe-ripple-color="light"
            class="mb-2 inline-block rounded bg-[#1877f2] px-6 py-2.5 text-sm font-medium leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg ">
            <span class="[&>svg]:h-4 [&>svg]:w-4 flex">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 320 512">
                <!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
                <path
                d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
            </svg> Ikuti kami di Facebook
            </span>
            </button>
        </a>
    </div>
  @endif




  
  
  </section>
  
  
@endsection