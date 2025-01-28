@extends('layouts.main')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

@endsection
@section('content')

<section class="">
    <div class="">
        <h1 class="mb-2 text-2xl font-bold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-2xl">Senarai Permohonan</h1>
        @if(!empty($job_details))
        <p class="text-md font-semibold text-gray-900 tracking-tight">{{$job_details->job_ads_title}} (DP:({{$job_details->start_date}}))  </p>
        <p class="text-md font-normal text-gray-900 tracking-tight">{{$num_of_applicant}} Permohonan </p>
        @endif
    </div>

    {{-- <div class="">
            <!-- Search Input -->
        <input
        type="text"
        id="search"
        placeholder="Search by name"
        class="w-full mb-4 p-2 border rounded"
        /> --}}

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
        <!-- Search Input -->
        <div class="mb-4">
            <input
                type="text"
                id="searchInput"
                placeholder="Cari nama pemohon..."
                class="w-full p-2 border border-gray-300 rounded"
                onkeyup="filterCandidates()"
            />
        </div>

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
                <tbody id="candidateTable">
                    <?php $i=0;?>
                    @foreach($candidate_data as $candidate)
                    <tr class="bg-white border-b hover:bg-gray-50 candidate-row">
                        <td scope="row" class="px-2 font-medium text-gray-900">
                            <?php $i=$i+1; echo $i;?>
                        </td>
                        <td scope="row" class="px-2 py-4 font-medium text-gray-900 candidate-name">
                            {{$candidate->name}} <br>
                            <p class="text-xs ">{{$candidate->gender}}, Tarikh Mohon : {{$candidate->form_submitted_date}} </p>
                        </td>
                        <td class="px-2 py-4 text-right flex flex-row">
                            {{-- <form action="{{route('get-attachment')}}" method="POST">
                                @csrf
                                <input type="hidden" id="attachment_location" name="attachment_location" value="{{$candidate->attachment_location}}" class="" required /> 
                                <button  class=" bg-cyan-700 px-2 py-1 text-white rounded font-medium text-blue-600 hover:underline">Muat Turun Lampiran</a>
                            </form> --}}
                            <a href="/storage/{{$candidate->attachment_location}}" ><button class="bg-green-700 px-2 py-1 text-white rounded font-medium text-blue-600 hover:underline mt-1 mb-1 md:mr-1 flex flex-row">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                    <path d="M10 2a.75.75 0 0 1 .75.75v5.59l1.95-2.1a.75.75 0 1 1 1.1 1.02l-3.25 3.5a.75.75 0 0 1-1.1 0L6.2 7.26a.75.75 0 1 1 1.1-1.02l1.95 2.1V2.75A.75.75 0 0 1 10 2Z" />
                                    <path d="M5.273 4.5a1.25 1.25 0 0 0-1.205.918l-1.523 5.52c-.006.02-.01.041-.015.062H6a1 1 0 0 1 .894.553l.448.894a1 1 0 0 0 .894.553h3.438a1 1 0 0 0 .86-.49l.606-1.02A1 1 0 0 1 14 11h3.47a1.318 1.318 0 0 0-.015-.062l-1.523-5.52a1.25 1.25 0 0 0-1.205-.918h-.977a.75.75 0 0 1 0-1.5h.977a2.75 2.75 0 0 1 2.651 2.019l1.523 5.52c.066.239.099.485.099.732V15a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3.73c0-.246.033-.492.099-.73l1.523-5.521A2.75 2.75 0 0 1 5.273 3h.977a.75.75 0 0 1 0 1.5h-.977Z" />
                                  </svg>&nbsp;
                                  Lampiran<button></a>
                            <form action="{{route('get-apply_form_pdf')}}" method="POST">
                                @csrf
                                <input type="hidden" id="id" name="id" value="{{$candidate->id}}" class="" required /> 
                                <button type="submit" class="bg-green-700 px-2 py-1 text-white rounded font-medium text-blue-600 hover:underline mt-1 mb-1 md:mr-1 flex flex-row"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                                    <path d="M10 2a.75.75 0 0 1 .75.75v5.59l1.95-2.1a.75.75 0 1 1 1.1 1.02l-3.25 3.5a.75.75 0 0 1-1.1 0L6.2 7.26a.75.75 0 1 1 1.1-1.02l1.95 2.1V2.75A.75.75 0 0 1 10 2Z" />
                                    <path d="M5.273 4.5a1.25 1.25 0 0 0-1.205.918l-1.523 5.52c-.006.02-.01.041-.015.062H6a1 1 0 0 1 .894.553l.448.894a1 1 0 0 0 .894.553h3.438a1 1 0 0 0 .86-.49l.606-1.02A1 1 0 0 1 14 11h3.47a1.318 1.318 0 0 0-.015-.062l-1.523-5.52a1.25 1.25 0 0 0-1.205-.918h-.977a.75.75 0 0 1 0-1.5h.977a2.75 2.75 0 0 1 2.651 2.019l1.523 5.52c.066.239.099.485.099.732V15a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-3.73c0-.246.033-.492.099-.73l1.523-5.521A2.75 2.75 0 0 1 5.273 3h.977a.75.75 0 0 1 0 1.5h-.977Z" />
                                  </svg>&nbsp; BP</a>
                            </form>
                            {{-- <form action="{{route('delete-apply-form-pg3')}}" method="POST">
                                @csrf
                                <input type="hidden" id="candidate_id" name="candidate_id" value="{{$candidate_id}}" class="" required /> 
                                <button  class="font-medium text-blue-600 hover:underline">Padam</a>
                            </form> --}}
                        </td>
                    </tr>
                    @endforeach
                    


                </tbody>
            </table>

           
        </div>
    </div>


    <script>
        // JavaScript to filter the candidates
        function filterCandidates() {
            const searchInput = document.getElementById('searchInput').value.toLowerCase();
            const candidateRows = document.querySelectorAll('.candidate-row');
    
            candidateRows.forEach(row => {
                const candidateName = row.querySelector('.candidate-name').innerText.toLowerCase();
                if (candidateName.includes(searchInput)) {
                    row.style.display = ''; // Show row
                } else {
                    row.style.display = 'none'; // Hide row
                }
            });
        }
    </script>
  

  </section>
  
  
@endsection