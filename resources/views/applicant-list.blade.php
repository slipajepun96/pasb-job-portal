@extends('layouts.main')

@section('content')

<section class="">
    <div class="">
        <h1 class="mb-2 text-2xl font-bold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-2xl">Senarai Permohonan</h1>
        @if(!empty($job_details))
        <p class="text-md font-semibold text-gray-900 tracking-tight">{{$job_details->job_ads_title}} (DP:({{$job_details->start_date}}))  </p>
        <p class="text-md font-normal text-gray-900 tracking-tight">{{$num_of_applicant}} Permohonan </p>
        @endif
    </div>

    <div class="">
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

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-3">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-white uppercase bg-gray-500">
                    <tr>
                        <th scope="col" class="px-2 py-2">
                            Bil.
                        </th>
                        <th scope="col" class="px-2 py-2">
                            Nama
                        </th>


                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Tindakan</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=0;?>
                    @foreach($candidate_data as $candidate)
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td scope="row" class="px-2 font-medium text-gray-900">
                            <?php $i=$i+1; echo $i;?>
                        </td>
                        <td scope="row" class="px-2 py-4 font-medium text-gray-900 ">
                            {{$candidate->name}} <br>
                            <p class="text-xs ">{{$candidate->gender}}, Tarikh Mohon : {{$candidate->form_submitted_date}} </p>
                        </td>
                        <td class="px-2 py-4 text-right">
                            {{-- <form action="{{route('get-attachment')}}" method="POST">
                                @csrf
                                <input type="hidden" id="attachment_location" name="attachment_location" value="{{$candidate->attachment_location}}" class="" required /> 
                                <button  class=" bg-cyan-700 px-2 py-1 text-white rounded font-medium text-blue-600 hover:underline">Muat Turun Lampiran</a>
                            </form> --}}
                            <a href="/storage/{{$candidate->attachment_location}}" ><button class="bg-green-700 px-2 py-1 text-white rounded font-medium text-blue-600 hover:underline mb-1 md:mr-1">Muat Turun Lampiran<button></a>
                            <form action="{{route('get-apply_form_pdf')}}" method="POST">
                                @csrf
                                <input type="hidden" id="id" name="id" value="{{$candidate->id}}" class="" required /> 
                                <button  class=" mt-1 bg-green-700 px-2 py-1 text-white rounded font-medium text-blue-600 hover:underline">Muat Turun PDF</a>
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