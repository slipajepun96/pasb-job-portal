@extends('layouts.main')

@section('content')

<section class="">
    <div class="">
        <h1 class="mb-2 text-2xl font-bold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-2xl">Jawatan</h1>
        {{-- <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48">Isikan borang dibawah dengan lengkap</p> --}}
    </div>
    <div class="max-w-screen-lg m-2 mx-auto">

        {{-- <a href="" type="button" class=" text-white bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Tambah Jawatan</a> --}}
        


        <div class="inline-flex rounded-md shadow-xs">
            <a href="/jobs/add" aria-current="page" class="px-4 py-2 text-sm font-medium text-blue-700 bg-white border border-gray-200 rounded-s-lg hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
            Tambah Jawatan
            </a>
            <a href="#" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border-t border-b border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
            Jana Ringkasan
            </a>
            <a href="#" class="px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-e-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-blue-500 dark:focus:text-white">
            Messages
            </a>
        </div>
  

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-3 mt-3">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-white uppercase bg-gray-500">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama Jawatan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Tindakan</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jobs as $job)
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{$job->job_ads_title}}<br>
                                <p class="text-xs">{{$job->start_date}} - {{$job->end_date}}</p>
                                @if($job->ads_link)<a href="{{$job->ads_link}}" class="underline text-blue-400" target="_blank">Pautan Iklan</a>@else No Link @endif
                            </th>

                            <td class="px-6 py-4 text-right">
                                <form action="{{route('delete-job')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$job->id}}" class="" required />
                                    <button  class="font-medium text-red-600 hover:underline">Padam</a>
                                </form>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>



  
  
  </section>
  
  
@endsection