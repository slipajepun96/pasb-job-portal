@extends('layouts.first-time')

@section('content')

<section class="">
    <script>
        function preventSubmit(event) {
            event.preventDefault(); // Prevents form submission
            window.location.href = "/profile/first-time/4"; // Redirects to another page
        }
    </script>

    <div class="">
        <h1 class="mb-2 text-2xl font-bold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-2xl">Profil</h1>
        <p class="mb-4 text-sm font-normal text-gray-500 ">Isikan borang dibawah dengan lengkap </p>
    </div>
    <div class=" m-2 mx-auto">
        <ol class="flex items-center w-full mb-3">
            <li class="flex w-full items-center text-white after:content-[''] after:w-full after:h-1 after:border-b after:border-green-500 after:border-4 after:inline-block">
                <span class="flex items-center justify-center w-8 h-8 bg-green-700/80 rounded-full lg:h-12 lg:w-12 dark:bg-blue-800 shrink-0">
                1
                </span>
            </li>
            <li class="flex w-full items-center text-white after:content-[''] after:w-full after:h-1 after:border-b after:border-green-500 after:border-4 after:inline-block">
                <span class="flex items-center justify-center w-8 h-8 bg-green-700/80 rounded-full lg:h-12 lg:w-12 dark:bg-blue-800 shrink-0">
                2
                </span>
            </li>
            <li class="flex w-full items-center text-white after:content-[''] after:w-full after:h-1 after:border-b after:border-green-500 after:border-4 after:inline-block">
                <span class="flex items-center justify-center w-8 h-8 bg-green-700 rounded-full font-extrabold lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                3
                </span>
            </li>

            <li class="flex w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-green-500 after:border-4 after:inline-block dark:after:border-gray-700">
                <span class="flex items-center justify-center w-8 h-8 bg-green-700/50 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                4
                </span>
            </li>
            <li class="flex w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-green-500 after:border-4 after:inline-block dark:after:border-gray-700">
                <span class="flex items-center justify-center w-8 h-8 bg-green-700/50 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                5
                </span>
            </li>
            <li class="flex w-full items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-green-500 after:border-4 after:inline-block dark:after:border-gray-700">
                <span class="flex items-center justify-center w-8 h-8 bg-green-700/50 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                6
                </span>
            </li>
            <li class="flex items-center">
                <span class="flex items-center justify-center w-8 h-8 bg-green-700/50 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                7
                </span>
            </li>
        </ol>
        <p class="font-bold uppercase text-sm">Bahagian 3: Maklumat Pendidikan</p>

        @if ($errors->any())
            <div class="bg-red-300 text-red-700 py-4 rounded relative" role="alert">
                <strong class="font-bold">Validation Errors:</strong>
                <ul class="mt-2 list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="relative overflow-x-auto shadow-md mb-3">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-white uppercase bg-gray-500">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama Sekolah / IPT
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($educations as $education)
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 text-wrap">
                            <p class="font-medium ">{{$education->edu_institute_name}}</p>
                            <p class="font-normal">{{$education->start_year}} - {{$education->end_year}},<br>{{$education->edu_level}} {{$education->edu_course_name}}</p>
                        </th>
                        <td class="px-6 py-4 text-right">
                            <form action="{{route('deleteProfileFormForFirstTimePg3')}}" method="POST">
                                @csrf
                                <input type="hidden" id="id" name="id" value="{{$education->id}}" class="" required />
                                <button  class="font-medium text-blue-600 hover:underline">Padam</a>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    <?php if(empty($education)) { ?>
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td scope="row" rowspan="2" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                Tiada data. Sila tambah pada ruangan di bawah.
                            </td>
                        </tr>
                    <?php  } ?>


                </tbody>
            </table>
        </div>

        {{-- <div class="border rounded rounded-xl p-4 mb-1"> --}}
            <form action="{{route('storeProfileFormForFirstTimePg3')}}" method="POST">
                @csrf

                <p class=" font-semibold ">Tambah Maklumat Pendidikan ( Sila masukkan maklumat, bermula dari tahap Sekolah Menengah )</p>
                <div class="mb-5 starlabel">
                    <label for="edu_institute_name" class="block mb-2 text-sm font-medium text-gray-900">Nama Sekolah / IPT</label>
                    <input type="text" id="edu_institute_name" name="edu_institute_name" autocomplete="off" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>

                <div class="mb-5 starlabel">
                    <label for="start_year" class="block mb-2 text-sm font-medium text-gray-900">Tahun Mula</label>
                    <input type="text" id="start_year" name="start_year" autocomplete="off" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" pattern="\d*" maxlength="4" required />
                </div>

                <div class="mb-5 starlabel">
                    <label for="end_year" class="block mb-2 text-sm font-medium text-gray-900">Tahun Akhir</label>
                    <input type="text" id="end_year" name="end_year" autocomplete="off" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" pattern="\d*" maxlength="4" required />
                </div>

                <div class="mb-5">
                    <div class="starlabel"><label for="edu_level" class="block mb-2 text-sm font-medium text-gray-900">Tahap Pendidikan</label></div>
                    <ul class="grid w-full gap-0 md:grid-cols-4">
                        <li>
                            <input type="radio" id="spm" value="SPM" name="edu_level" class="hidden peer" required />
                            <label for="spm" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                <div class="block">
                                    <div class="w-full text-md font-semibold">SPM</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="stpm" value="STPM" name="edu_level" class="hidden peer" required />
                            <label for="stpm" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                <div class="block">
                                    <div class="w-full text-md font-semibold">STPM</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="foundation" value="Asasi" name="edu_level" class="hidden peer" required />
                            <label for="foundation" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                <div class="block">
                                    <div class="w-full text-md font-semibold">Asasi</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="matriculation" value="Matrikulasi" name="edu_level" class="hidden peer" required />
                            <label for="matriculation" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                <div class="block">
                                    <div class="w-full text-md font-semibold">Matrikulasi</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="diploma" value="Diploma" name="edu_level" class="hidden peer" required />
                            <label for="diploma" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                <div class="block">
                                    <div class="w-full text-md font-semibold">Diploma</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="bachelor degree" value="Ijazah Sarjana Muda" name="edu_level" class="hidden peer" required />
                            <label for="bachelor degree" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                <div class="block">
                                    <div class="w-full text-md font-semibold">Ijazah Sarjana Muda</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="master" value="Ijazah Sarjana" name="edu_level" class="hidden peer" required />
                            <label for="master" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                <div class="block">
                                    <div class="w-full text-md font-semibold">Ijazah Sarjana</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="phd" value="Doktor Falsafah" name="edu_level" class="hidden peer" required />
                            <label for="phd" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                <div class="block">
                                    <div class="w-full text-md font-semibold">Doktor Falsafah</div>
                                </div>
                            </label>
                        </li>
                    </ul>
        
        
                </div>
        

                <div class="mb-5">
                    <label for="edu_course_name" class="block mb-2 text-sm font-medium text-gray-900">Nama Program / Kursus / Bidang</label>
                    <input type="text" id="edu_course_name" name="edu_course_name" autocomplete="off"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                </div>

                <div class="md:flex md:flex-row">
                    <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan Maklumat Pendidikan</button>
                    <button type="button" onclick="preventSubmit(event)" class="mt-2 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Seterusnya</button>
                </div>
            </form>
        {{-- </div> --}}
            

        {{-- <a href="{{url('/apply-form/4') }}"><button class="text-white bg-lime-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Seterusnya</button> --}}
        {{-- <form class="max-w-screen-lg m-2 mx-auto" action="{{route('apply-form-pg4')}}" method="POST">
            @csrf
            <input type="hidden" id="job_id" name="job_id" value="199401040896" class="" required />
            <input type="text" id="candidate_id" name="candidate_id" value="{{$candidate_id}}" class="" required />
        <button type="submit" class="text-white bg-lime-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Seterusnya</button>
        </form> --}}


    </div>



  
  
  </section>
  
  
@endsection