@extends('layouts.main')

@section('content')

<section class="">
    <div class="py-8 px-4 mx-auto  text-center lg:py-8 m-2">
        <h1 class="mb-2 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-3xl">Senarai Jawatan Kosong</h1>
        {{-- <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48">Isikan borang dibawah dengan lengkap</p> --}}
    </div>
    <div class="max-w-screen-lg m-2 mx-auto">

        <a href="/jobs/add" type="button" class=" text-white bg-lime-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Tambah Jawatan Kosong</a>
            
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-3 mt-3">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-white uppercase bg-gray-500">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama Jawatan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tarikh Buka
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tarikh Tutup
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Pautan Iklan
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
                                {{$job->job_ads_title}}
                            </th>
                            <td class="px-6 py-4">
                                {{$job->start_date}}
                            </td>
                            <td class="px-6 py-4">
                                {{$job->end_date}}
                                {{$job->id}}
                            </td>
                            <td class="px-6 py-4">
                                @if($job->ads_link)<a href="{{$job->ads_link}}" class="underline text-blue-400" target="_blank">Pautan Iklan</a>@else No Link @endif
                            </td>

                            <td class="px-6 py-4 text-right">
                                <form action="{{route('delete-job')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="id" value="{{$job->id}}" class="" required />
                                    <button  class="font-medium text-blue-600 hover:underline">Padam</a>
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