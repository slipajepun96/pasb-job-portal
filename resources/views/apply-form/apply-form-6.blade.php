@extends('layout.main')

@section('content')

<section class="">
    <div class="py-8 px-4 mx-auto  text-center lg:py-8 m-2">
        <h1 class="mb-2 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-3xl">Borang Permohonan Kerjaya</h1>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48">Isikan borang dibawah dengan lengkap</p>
    </div>
    <div class="max-w-screen-lg m-2 p-2 mx-auto">

        {{-- <input type="hidden" id="job_id" name="job_id" value="199401040896" class="" required /> --}}
        {{-- <input type="text" id="candidate_id" name="candidate_id" value="{{$candidate_id}}" class="" required />  --}}
        <form action="{{route('store-apply-form-pg6')}}" method="POST">
            @csrf

        <p class="font-bold uppercase text-sm">Bahagian 6:  Penguasaan Bahasa</p>


        <div class="border rounded rounded-xl p-4 mb-1">


                <input type="hidden" id="job_id" name="job_id" value="199401040896" class="" required />
                <input type="hidden" id="candidate_id" name="candidate_id" value="{{$candidate_id}}" class="" required />

                {{-- <p class=" font-semibold ">Tambah Maklumat Tambahan Pekerjaan Terkini </p> --}}
                <div class="mb-5">
                    <label for="bm_status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penguasaan Bahasa Melayu</label>
                    <ul class="grid w-full gap-2 md:grid-cols-3">
                        <li>
                            <input type="radio" id="baik" value="Baik" name="bm_status" class="hidden peer" required />
                            <label for="baik" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Baik</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="sederhana" value="Sederhana" name="bm_status" class="hidden peer" required />
                            <label for="sederhana" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Sederhana</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="kurang_baik" value="Kurang Baik" name="bm_status" class="hidden peer" required />
                            <label for="kurang_baik" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">    
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Kurang Baik</div>
                                </div>
                            </label>
                        </li>
                    </ul>
                </div>

                <div class="mb-5">
                    <label for="bi_status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penguasaan Bahasa Inggeris</label>
                    <ul class="grid w-full gap-2 md:grid-cols-3">
                        <li>
                            <input type="radio" id="baik2" value="Baik" name="bi_status" class="hidden peer" required />
                            <label for="baik2" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Baik</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="sederhana2" value="Sederhana" name="bi_status" class="hidden peer" required />
                            <label for="sederhana2" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Sederhana</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="kurang_baik2" value="Kurang Baik" name="bi_status" class="hidden peer" required />
                            <label for="kurang_baik2" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">    
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Kurang Baik</div>
                                </div>
                            </label>
                        </li>
                    </ul>
                </div>

                <div class="mb-5">
                    <label for="bi_status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penguasaan Bahasa Lain (Jika Ada)</label>

                    <input type="text" id="other_language_name" name="other_language_name" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mb-1" placeholder="Nama Bahasa" />
                    <ul class="grid w-full gap-2 md:grid-cols-3">
                        <li>
                            <input type="radio" id="baik3" value="Baik" name="other_language_status" class="hidden peer"  />
                            <label for="baik3" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Baik</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="sederhana3" value="Sederhana" name="other_language_status" class="hidden peer"  />
                            <label for="sederhana3" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Sederhana</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="kurang_baik3" value="Kurang Baik" name="other_language_status" class="hidden peer"  />
                            <label for="kurang_baik3" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">    
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Kurang Baik</div>
                                </div>
                            </label>
                        </li>
                    </ul>
                </div>

            </div> 

        <p class="font-bold uppercase text-sm mt-6">Bahagian 7: Maklumat Lain</p>


        <div class="border rounded rounded-xl p-4 mb-1">


                {{-- <p class=" font-semibold ">Tambah Maklumat Tambahan Pekerjaan Terkini </p> --}}
                <div class="mb-5">
                    <label for="drug_status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> 1) Adakah anda pernah didakwa dan disabitkan dalam mana-mana mahkamah undang-undang untuk kesalahan jenayah atau Kesalahan dibawah Akta Dadah Berbahaya 1952? (jika ya, nyatakan butiran)</label>
                    <ul class="grid w-full gap-2 md:grid-cols-3">
                        <li>
                            <input type="radio" id="ya1" value="Ya" name="drug_status" class="hidden peer" required />
                            <label for="ya1" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Ya</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="tidak1" value="Tidak" name="drug_status" class="hidden peer" required />
                            <label for="tidak1" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Tidak</div>
                                </div>
                            </label>
                        </li>
                    </ul>
                    <input type="text" id="drug_description" name="drug_description" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mt-2" placeholder="Butiran, jika Ya" />
                </div>

                <div class="mb-5">
                    <label for="bankcrupt_status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> 2) Adakan anda diisytiharkan bankrap?</label>
                    <ul class="grid w-full gap-2 md:grid-cols-3">
                        <li>
                            <input type="radio" id="ya2" value="Ya" name="bankcrupt_status" class="hidden peer" required />
                            <label for="ya2" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Ya</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="tidak2" value="Tidak" name="bankcrupt_status" class="hidden peer" required />
                            <label for="tidak2" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Tidak</div>
                                </div>
                            </label>
                        </li>
                    </ul>
                    <input type="text" id="bankcrupt_description" name="bankcrupt_description" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mt-2" placeholder="Butiran, jika Ya" />
                </div>

                <div class="mb-5">
                    <label for="business_status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> 3) Adakan anda terlibat dalam sebarang usaha perniagaan, termasuk perniagaan keluarga? (jika ya, nyatakan butiran)</label>
                    <ul class="grid w-full gap-2 md:grid-cols-3">
                        <li>
                            <input type="radio" id="ya3" value="Ya" name="business_status" class="hidden peer" required />
                            <label for="ya3" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Ya</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="tidak3" value="Tidak" name="business_status" class="hidden peer" required />
                            <label for="tidak3" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Tidak</div>
                                </div>
                            </label>
                        </li>
                    </ul>
                    <input type="text" id="business_description" name="business_description" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mt-2" placeholder="Butiran, jika Ya" />
                </div>

                <div class="mb-5">
                    <label for="license_status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> 4) Adakan anda mempunyai lesen memandu? (jika ya, nyatakan kelas apa)</label>
                    <ul class="grid w-full gap-2 md:grid-cols-3">
                        <li>
                            <input type="radio" id="ya4" value="Ya" name="license_status" class="hidden peer" required />
                            <label for="ya4" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Ya</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="tidak4" value="Tidak" name="license_status" class="hidden peer" required />
                            <label for="tidak4" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Tidak</div>
                                </div>
                            </label>
                        </li>
                    </ul>
                    <input type="text" id="license_description" name="license_description" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mt-2" placeholder="Butiran, jika Ya" />
                </div>

                <div class="mb-5">
                    <label for="smoking_status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> 5) Adakan anda seorang perokok?</label>
                    <ul class="grid w-full gap-2 md:grid-cols-3">
                        <li>
                            <input type="radio" id="ya5" value="Ya" name="smoking_status" class="hidden peer" required />
                            <label for="ya5" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Ya</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="tidak5" value="Tidak" name="smoking_status" class="hidden peer" required />
                            <label for="tidak5" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Tidak</div>
                                </div>
                            </label>
                        </li>
                    </ul>
                </div>

                <div class="mb-5">
                    <label for="drinking_status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> 6) Adakan anda seorang peminum arak?</label>
                    <ul class="grid w-full gap-2 md:grid-cols-3">
                        <li>
                            <input type="radio" id="ya6" value="Ya" name="drinking_status" class="hidden peer" required />
                            <label for="ya6" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Ya</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="tidak6" value="Tidak" name="drinking_status" class="hidden peer" required />
                            <label for="tidak6" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Tidak</div>
                                </div>
                            </label>
                        </li>
                    </ul>
                </div>

               

                {{-- <button type="submit" class="text-white bg-lime-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan Maklumat & Seterusnya</button> --}}

            </div> 

            <p class="font-bold uppercase text-sm mt-6">Bahagian 8: Perubatan & Keadaan Fizikal</p>


        <div class="border rounded rounded-xl p-4 mb-1">


                {{-- <p class=" font-semibold ">Tambah Maklumat Tambahan Pekerjaan Terkini </p> --}}
                <div class="mb-5">
                    <label for="illness_status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> 1) Pernahkah anda atau sedang mengalami sebarang penyakit? (jika ya, nyatakan butiran) </label>
                    <ul class="grid w-full gap-2 md:grid-cols-3">
                        <li>
                            <input type="radio" id="ya7" value="Ya" name="illness_status" class="hidden peer" required />
                            <label for="ya7" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Ya</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="tidak7" value="Tidak" name="illness_status" class="hidden peer" required />
                            <label for="tidak7" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Tidak</div>
                                </div>
                            </label>
                        </li>
                    </ul>
                    <input type="text" id="illness_description" name="illness_description" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mt-2" placeholder="Butiran, jika Ya" />
                </div>

                <div class="mb-5">
                    <label for="physical_status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> 2) Adakah anda mengalami kecacatan fizikal? (jika ya, nyatakan butiran)</label>
                    <ul class="grid w-full gap-2 md:grid-cols-3">
                        <li>
                            <input type="radio" id="ya8" value="Ya" name="physical_status" class="hidden peer" required />
                            <label for="ya8" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Ya</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="tidak8" value="Tidak" name="physical_status" class="hidden peer" required />
                            <label for="tidak8" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Tidak</div>
                                </div>
                            </label>
                        </li>
                    </ul>
                    <input type="text" id="physical_description" name="physical_description" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mt-2" placeholder="Butiran, jika Ya" />
                </div>

                <div class="mb-5">
                    <label for="pregnancy_status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> 3) Adakah anda sedang hamil atau merancang memiliki bayi tidak lama lagi? (untuk calon perempuan sahaja)</label>
                    <ul class="grid w-full gap-2 md:grid-cols-3">
                        <li>
                            <input type="radio" id="ya9" value="Ya" name="pregnancy_status" class="hidden peer" />
                            <label for="ya9" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Ya</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="tidak9" value="Tidak" name="pregnancy_status" class="hidden peer" />
                            <label for="tidak9" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Tidak</div>
                                </div>
                            </label>
                        </li>
                    </ul>
                    <input type="text" id="pregnancy_description" name="pregnancy_description" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 mt-2" placeholder="Butiran, jika Ya" />
                </div>

            </div> 

            <button type="submit" class="text-white bg-lime-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan Maklumat & Seterusnya</button>







            </form>

            
        {{-- <a href="{{url('/apply-form/' . $candidate_id . '/6') }}"><button type="submit" class="text-white bg-lime-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Seterusnya</button> --}}


    </div>



  
  
  </section>
  
  
@endsection