@extends('layouts.main')

@section('content')

<section class="">
    <div class="py-8 px-4 mx-auto  text-center lg:py-8 m-2">
        <h1 class="mb-2 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-3xl">Borang Permohonan Kerjaya</h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48">Isikan borang dibawah dengan lengkap</p>
    </div>
    <div class="max-w-screen-lg m-2 mx-auto">

        {{-- <input type="hidden" id="job_id" name="job_id" value="199401040896" class="" required /> --}}
        {{-- <input type="text" id="candidate_id" name="candidate_id" value="{{$candidate_id}}" class="" required />  --}}
       
        <p class="font-bold uppercase text-sm">Bahagian 3: Maklumat Pendidikan</p>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-3">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-white uppercase bg-gray-500">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama Sekolah / IPT
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tahun Mula
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tahun Akhir
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tahap Pendidikan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Bidang Pendidikan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($educations as $education)
                    <tr class="bg-white border-b hover:bg-gray-50">
                        <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{$education->edu_institute_name}}
                        </th>
                        <td class="px-6 py-4">
                            {{$education->start_year}}
                        </td>
                        <td class="px-6 py-4">
                            {{$education->end_year}}
                        </td>
                        <td class="px-6 py-4">
                            {{$education->edu_level}}
                        </td>
                        <td class="px-6 py-4">
                            {{$education->edu_course_name}}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <form action="{{route('delete-apply-form-pg3')}}" method="POST">
                                @csrf
                                <input type="hidden" id="candidate_id" name="candidate_id" value="{{$candidate_id}}" class="" required /> 
                                <input type="hidden" id="id" name="id" value="{{$education->id}}" class="" required />
                                <button  class="font-medium text-blue-600 hover:underline">Padam</a>
                            </form>
                        </td>
                    </tr>
                    @endforeach


                </tbody>
            </table>
        </div>

        <div class="border rounded rounded-xl p-4 mb-1">
            <form action="{{route('store-apply-form-pg3')}}" method="POST">
                @csrf

                <input type="hidden" id="job_id" name="job_id" value="199401040896" class="" required />
                <input type="hidden" id="candidate_id" name="candidate_id" value="{{$candidate_id}}" class="" required />

                <p class=" font-semibold ">Tambah Maklumat Pendidikan ( Sila masukkan maklumat, bermula dari tahap Sekolah Menengah )</p>
                <div class="mb-5">
                    <label for="edu_institute_name" class="block mb-2 text-sm font-medium text-gray-900">Nama Sekolah / IPT</label>
                    <input type="text" id="edu_institute_name" name="edu_institute_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required />
                </div>

                <div class="mb-5">
                    <label for="start_year" class="block mb-2 text-sm font-medium text-gray-900">Tahun Mula</label>
                    <input type="text" id="start_year" name="start_year" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" pattern="\d*" maxlength="4" required />
                </div>

                <div class="mb-5">
                    <label for="end_year" class="block mb-2 text-sm font-medium text-gray-900">Tahun Akhir</label>
                    <input type="text" id="end_year" name="end_year" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" pattern="\d*" maxlength="4" required />
                </div>

                <div class="mb-5">
                    <label for="edu_level" class="block mb-2 text-sm font-medium text-gray-900">Tahap Pendidikan</label>
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
                    <input type="text" id="edu_course_name" name="edu_course_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                </div>

                <button type="submit" class="text-white bg-lime-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan Maklumat Pendidikan</button>

            </form>
        </div>
            

        <a href="{{url('/apply-form/' . $candidate_id . '/4') }}"><button type="submit" class="text-white bg-lime-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Seterusnya</button>
        {{-- <form class="max-w-screen-lg m-2 mx-auto" action="{{route('apply-form-pg4')}}" method="POST">
            @csrf
            <input type="hidden" id="job_id" name="job_id" value="199401040896" class="" required />
            <input type="text" id="candidate_id" name="candidate_id" value="{{$candidate_id}}" class="" required />
        <button type="submit" class="text-white bg-lime-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Seterusnya</button>
        </form> --}}


    </div>



  
  
  </section>
  
  
@endsection