@extends('layouts.first-time')

@section('content')

<section class="">
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
                <span class="flex items-center justify-center w-8 h-8 bg-green-700/80 rounded-full lg:h-12 lg:w-12 dark:bg-blue-800 shrink-0">
                3
                </span>
            </li>
            <li class="flex w-full items-center text-white after:content-[''] after:w-full after:h-1 after:border-b after:border-green-500 after:border-4 after:inline-block">
                <span class="flex items-center justify-center w-8 h-8 bg-green-700/80 rounded-full lg:h-12 lg:w-12 dark:bg-blue-800 shrink-0">
                4
                </span>
            </li>
            <li class="flex w-full items-center text-white after:content-[''] after:w-full after:h-1 after:border-b after:border-green-500 after:border-4 after:inline-block">
                <span class="flex items-center justify-center w-8 h-8 bg-green-700/80 rounded-full lg:h-12 lg:w-12 dark:bg-blue-800 shrink-0">
                5
                </span>
            </li>
            <li class="flex w-full items-center text-white after:content-[''] after:w-full after:h-1 after:border-b after:border-green-500 after:border-4 after:inline-block">
                <span class="flex items-center justify-center w-8 h-8 bg-green-700 rounded-full font-extrabold lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                6
                </span>
            </li>
            <li class="flex items-center">
                <span class="flex items-center justify-center w-8 h-8 bg-green-700/50 rounded-full lg:h-12 lg:w-12 dark:bg-gray-700 shrink-0">
                7
                </span>
            </li>
        </ol>
        <div class="m-2 mx-auto">
            <form action="{{route('storeProfileFormForFirstTimePg6')}}" method="POST">
                @csrf
                <p class="font-bold uppercase text-sm">Bahagian 6:  Penguasaan Bahasa</p>

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

                <div class="mb-5">
                    <div class="starlabel">
                        <label for="bm_status" class="block mb-2 text-sm font-medium text-gray-900">Penguasaan Bahasa Melayu</label>
                    </div>
                    <ul class="grid w-full gap-2 md:grid-cols-3">
                        <li>
                            <input type="radio" id="baik" value="Baik" name="bm_status" class="hidden peer" required />
                            <label for="baik" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Baik</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="sederhana" value="Sederhana" name="bm_status" class="hidden peer" required />
                            <label for="sederhana" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Sederhana</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="kurang_baik" value="Kurang Baik" name="bm_status" class="hidden peer" required />
                            <label for="kurang_baik" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">    
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Kurang Baik</div>
                                </div>
                            </label>
                        </li>
                    </ul>
                </div>

                <div class="mb-5">
                    <div class="starlabel">
                        <label for="bi_status" class="block mb-2 text-sm font-medium text-gray-900">Penguasaan Bahasa Inggeris</label>
                    </div>
                    <ul class="grid w-full gap-2 md:grid-cols-3">
                        <li>
                            <input type="radio" id="baik2" value="Baik" name="bi_status" class="hidden peer" required />
                            <label for="baik2" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Baik</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="sederhana2" value="Sederhana" name="bi_status" class="hidden peer" required />
                            <label for="sederhana2" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Sederhana</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="kurang_baik2" value="Kurang Baik" name="bi_status" class="hidden peer" required />
                            <label for="kurang_baik2" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">    
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Kurang Baik</div>
                                </div>
                            </label>
                        </li>
                    </ul>
                </div>
                <div class="mb-5">
                    <label for="bi_status" class="block mb-2 text-sm font-medium text-gray-900">Penguasaan Bahasa Lain (Jika Ada)</label>
                    <input type="text" id="other_language_name" name="other_language_name" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mb-1" placeholder="Nama Bahasa" />
                    <ul class="grid w-full gap-2 md:grid-cols-3">
                        <li>
                            <input type="radio" id="baik3" value="Baik" name="other_language_status" class="hidden peer"  />
                            <label for="baik3" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Baik</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="sederhana3" value="Sederhana" name="other_language_status" class="hidden peer"  />
                            <label for="sederhana3" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Sederhana</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="kurang_baik3" value="Kurang Baik" name="other_language_status" class="hidden peer"  />
                            <label for="kurang_baik3" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">    
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Kurang Baik</div>
                                </div>
                            </label>
                        </li>
                    </ul>
                </div>

                <p class="font-bold uppercase text-sm mt-6">Bahagian 7: Maklumat Lain</p>

                <div class="mb-5">
                    <div class="starlabel">
                        <label for="drug_status" class="block mb-2 text-sm font-medium text-gray-900"> 1) Adakah anda pernah didakwa dan disabitkan dalam mana-mana mahkamah undang-undang untuk kesalahan jenayah atau Kesalahan dibawah Akta Dadah Berbahaya 1952? (jika ya, nyatakan butiran)</label>
                    </div>
                    <ul class="grid w-full gap-2 md:grid-cols-3">
                        <li>
                            <input type="radio" id="ya1" value="Ya" name="drug_status" class="hidden peer" required />
                            <label for="ya1" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Ya</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="tidak1" value="Tidak" name="drug_status" class="hidden peer" required />
                            <label for="tidak1" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Tidak</div>
                                </div>
                            </label>
                        </li>
                    </ul>
                    <input type="text" id="drug_description" name="drug_description" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-2" placeholder="Butiran, jika Ya" />
                </div>
                <div class="mb-5">
                    <div class="starlabel">
                        <label for="bankcrupt_status" class="block mb-2 text-sm font-medium text-gray-900"> 2) Adakan anda diisytiharkan bankrap?</label>
                    </div>
                    <ul class="grid w-full gap-2 md:grid-cols-3">
                        <li>
                            <input type="radio" id="ya2" value="Ya" name="bankcrupt_status" class="hidden peer" required />
                            <label for="ya2" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Ya</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="tidak2" value="Tidak" name="bankcrupt_status" class="hidden peer" required />
                            <label for="tidak2" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Tidak</div>
                                </div>
                            </label>
                        </li>
                    </ul>
                    <input type="text" id="bankcrupt_description" name="bankcrupt_description" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-2" placeholder="Butiran, jika Ya" />
                </div>
                <div class="mb-5">
                    <div class="starlabel">
                        <label for="business_status" class="block mb-2 text-sm font-medium text-gray-900"> 3) Adakan anda terlibat dalam sebarang usaha perniagaan, termasuk perniagaan keluarga? (jika ya, nyatakan butiran)</label>
                    </div>
                    <ul class="grid w-full gap-2 md:grid-cols-3">
                        <li>
                            <input type="radio" id="ya3" value="Ya" name="business_status" class="hidden peer" required />
                            <label for="ya3" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Ya</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="tidak3" value="Tidak" name="business_status" class="hidden peer" required />
                            <label for="tidak3" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Tidak</div>
                                </div>
                            </label>
                        </li>
                    </ul>
                    <input type="text" id="business_description" name="business_description" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-2" placeholder="Butiran, jika Ya" />
                </div>
                <div class="mb-5">
                    <div class="starlabel">
                        <label for="license_status" class="block mb-2 text-sm font-medium text-gray-900"> 4) Adakan anda mempunyai lesen memandu? (jika ya, nyatakan kelas apa)</label>
                    </div>
                    <ul class="grid w-full gap-2 md:grid-cols-3">
                        <li>
                            <input type="radio" id="ya4" value="Ya" name="license_status" class="hidden peer" required />
                            <label for="ya4" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Ya</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="tidak4" value="Tidak" name="license_status" class="hidden peer" required />
                            <label for="tidak4" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Tidak</div>
                                </div>
                            </label>
                        </li>
                    </ul>
                    <input type="text" id="license_description" name="license_description" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-2" placeholder="Butiran, jika Ya" />
                </div>
                <div class="mb-5">
                    <div class="starlabel">
                        <label for="smoking_status" class="block mb-2 text-sm font-medium text-gray-900"> 5) Adakan anda seorang perokok?</label>
                    </div>
                    <ul class="grid w-full gap-2 md:grid-cols-3">
                        <li>
                            <input type="radio" id="ya5" value="Ya" name="smoking_status" class="hidden peer" required />
                            <label for="ya5" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Ya</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="tidak5" value="Tidak" name="smoking_status" class="hidden peer" required />
                            <label for="tidak5" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Tidak</div>
                                </div>
                            </label>
                        </li>
                    </ul>
                </div>

                <div class="mb-5">
                    <div class="starlabel">
                        <label for="drinking_status" class="block mb-2 text-sm font-medium text-gray-900"> 6) Adakan anda seorang peminum arak?</label>
                    </div>
                    <ul class="grid w-full gap-2 md:grid-cols-3">
                        <li>
                            <input type="radio" id="ya6" value="Ya" name="drinking_status" class="hidden peer" required />
                            <label for="ya6" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Ya</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="tidak6" value="Tidak" name="drinking_status" class="hidden peer" required />
                            <label for="tidak6" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Tidak</div>
                                </div>
                            </label>
                        </li>
                    </ul>
                </div>

                <p class="font-bold uppercase text-sm mt-6">Bahagian 8: Perubatan & Keadaan Fizikal</p>

                <div class="mb-5">
                    <div class="starlabel">
                        <label for="illness_status" class="block mb-2 text-sm font-medium text-gray-900"> 1) Pernahkah anda atau sedang mengalami sebarang penyakit? (jika ya, nyatakan butiran) </label>
                    </div>
                    <ul class="grid w-full gap-2 md:grid-cols-3">
                        <li>
                            <input type="radio" id="ya7" value="Ya" name="illness_status" class="hidden peer" required />
                            <label for="ya7" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Ya</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="tidak7" value="Tidak" name="illness_status" class="hidden peer" required />
                            <label for="tidak7" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Tidak</div>
                                </div>
                            </label>
                        </li>
                    </ul>
                    <input type="text" id="illness_description" name="illness_description" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-2" placeholder="Butiran, jika Ya" />
                </div>

                <div class="mb-5">
                    <div class="starlabel">
                        <label for="physical_status" class="block mb-2 text-sm font-medium text-gray-900"> 2) Adakah anda mengalami kecacatan fizikal? (jika ya, nyatakan butiran)</label>
                    </div>
                    <ul class="grid w-full gap-2 md:grid-cols-3">
                        <li>
                            <input type="radio" id="ya8" value="Ya" name="physical_status" class="hidden peer" required />
                            <label for="ya8" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Ya</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="tidak8" value="Tidak" name="physical_status" class="hidden peer" required />
                            <label for="tidak8" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Tidak</div>
                                </div>
                            </label>
                        </li>
                    </ul>
                    <input type="text" id="physical_description" name="physical_description" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-2" placeholder="Butiran, jika Ya" />
                </div>

                <div class="mb-5">
                    <div class="starlabel">
                        <label for="pregnancy_status" class="block mb-2 text-sm font-medium text-gray-900"> 3) Adakah anda sedang hamil atau merancang memiliki bayi tidak lama lagi? (untuk calon perempuan sahaja)</label>
                    </div>
                    <ul class="grid w-full gap-2 md:grid-cols-3">
                        <li>
                            <input type="radio" id="ya9" value="Ya" name="pregnancy_status" class="hidden peer" />
                            <label for="ya9" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Ya</div>
                                </div>
                            </label>
                        </li>
                        <li>
                            <input type="radio" id="tidak9" value="Tidak" name="pregnancy_status" class="hidden peer" />
                            <label for="tidak9" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100">                           
                                <div class="block">
                                    <div class="w-full text-lg font-semibold">Tidak</div>
                                </div>
                            </label>
                        </li>
                    </ul>
                    <input type="text" id="pregnancy_description" name="pregnancy_description" class="bg-white border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 mt-2" placeholder="Butiran, jika Ya" />
                </div> 
                <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Simpan Maklumat & Seterusnya</button>
            </form>
        </div>
    </div>



  
  
  </section>
  
  
@endsection