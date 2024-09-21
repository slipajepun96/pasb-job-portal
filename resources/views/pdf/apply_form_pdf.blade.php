<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        table.PerformanceTable {
            table-layout: fixed;
            width: 500px;
        }
        table.PerformanceTable td.PerformanceCell {
            width: 75px;
        }
    </style>
    <title>Document</title>
</head>
<body class="text-sm p-2">
    {{-- <img src="{{url('/web letterhead.png')}}" alt="Image"/> --}}
    <img src="https://pkppagro.com.my/assets/img/web_letterhead.png" >
    <p class="uppercase font-semibold text-lg px-2">Borang Permohonan Pekerjaan</p>
    <table class="">
        <tr>
            <td class="uppercase px-2">Jawatan</td>
            <td class="uppercase px-2">:</td>
            <td class="uppercase px-2">{{$data[7]}}</td>
        </tr>
        <tr>
            <td class="uppercase px-2">Tarikh Temuduga</td>
            <td class="uppercase px-2">:</td>
            <td class="uppercase px-2">__________________________________</td>
        </tr>
        <tr>
            <td class="uppercase px-2">Jangkaan Gaji (RM)</td>
            <td class="uppercase px-2">:</td>
            <td class="uppercase px-2">{{$data[0]->expected_salary}}</td>
        </tr>
        <tr>
            <td class="uppercase px-2">Jangkaan Masuk</td>
            <td class="uppercase px-2">:</td>
            <td class="uppercase px-2">{{$data[0]->expected_report_for_duty_date}}</td>
        </tr>
    </table>

    <div class="mt-2 m-2 border border-black w-full">
        <div class="py-1 border border-black text-center">
            <div class="uppercase px-1 py-1 font-bold" colspan="9">Maklumat Peribadi</div>
        </div>
        <div class=" flex">
            <div class="uppercase px-1 py-1">1.</div>
            <div class="uppercase px-1 py-1">Nama Penuh</div>
            <div class="uppercase px-1 py-1">:</div>
            <div class="uppercase px-1 py-1 font-semibold" colspan="5">{{$data[0]->name}}</div>
        </div>
        <div class="flex ">
            <div class="w-1/2">
                <div class="flex">
                    <div class="uppercase text-sm px-1 py-1">2.</div>
                    <div class="uppercase text-sm px-1 py-1">Tarikh Lahir</div>
                    <div class="uppercase text-sm px-1 py-1">:</div>
                    <div class="uppercase text-sm px-1 py-1 font-semibold"> {{date('d-m-Y', strtotime($data[0]->birthdate))}}</div>
                </div>
                <div class="flex">
                    <div class="uppercase text-sm px-1 py-1">4.</div>
                    <div class="uppercase text-sm px-1 py-1">Warganegara</div>
                    <div class="uppercase text-sm px-1 py-1">:</div>
                    <div class="uppercase text-sm px-1 py-1 font-semibold">Malaysia</div>
                </div>
            </div>
            <div class="w-1/2">
                <div class="flex">
                    <div class="uppercase text-sm px-1 py-1">3.</div>
                    <div class="uppercase text-sm px-1 py-1">Jantina</div>
                    <div class="uppercase text-sm px-1 py-1">:</div>
                    <div class="uppercase text-sm px-1 py-1 font-semibold">{{$data[0]->gender}}</div>
                </div>
                <div class="flex">
                    <div class="uppercase text-sm px-1 py-1">5.</div>
                    <div class="uppercase text-sm px-1 py-1">Bangsa</div>
                    <div class="uppercase text-sm px-1 py-1">:</div>
                    <div class="uppercase text-sm px-1 py-1 font-semibold">{{$data[0]->race}}</div>
                </div>
            </div>
        </div>
        <div class="flex ">
            <div class="w-1/2">
                <div class="flex">
                    <div class="uppercase text-sm px-1 py-1">6.</div>
                    <div class="uppercase text-sm px-1 py-1">Umur</div>
                    <div class="uppercase text-sm px-1 py-1">:</div>
                    <div class="uppercase text-sm px-1 py-1 font-semibold">{{$data[0]->age}} Tahun</div>
                </div>
                <div class="flex">
                    <div class="uppercase text-sm px-1 py-1">8.</div>
                    <div class="uppercase text-sm px-1 py-1">Status Perkahwinan</div>
                    <div class="uppercase text-sm px-1 py-1">:</div>
                    <div class="uppercase text-sm px-1 py-1 font-semibold">{{$data[0]->marital_status}} </div>
                </div>
            </div>
            <div class="w-1/2">
                <div class="flex">
                    <div class="uppercase text-sm px-1 py-1">7.</div>
                    <div class="uppercase text-sm px-1 py-1">Kad Pengenalan (Baru)</div>
                    <div class="uppercase text-sm px-1 py-1">:</div>
                    <div class="uppercase text-sm px-1 py-1 font-semibold">{{$data[0]->ic_num}} </div>
                </div>
            </div>
        </div>
        <div class="flex ">
            <div class="uppercase px-1 py-1 text-sm whitespace-nowrap">9.</div>
            <div class="uppercase px-1 py-1 text-sm whitespace-nowrap">Alamat Tetap</div>
            <div class="uppercase px-1 py-1 text-sm whitespace-nowrap">:</div>
            <div class="uppercase px-1 py-1 text-sm font-semibold">{{$data[0]->fixed_address}}</div>
        </div>
        <div class="flex ">
            <div class="uppercase px-1 py-1 text-sm whitespace-nowrap">10.</div>
            <div class="uppercase px-1 py-1 text-sm ">Alamat Surat Menyurat<br>(Sekiranya Berbeza)</div>
            <div class="uppercase px-1 py-1 text-sm whitespace-nowrap">:</div>
            <div class="uppercase px-1 py-1 text-sm font-semibold">{{$data[0]->mail_address}}</div>
        </div>
        <div class="flex ">
            <div class="uppercase px-1 py-1 text-sm whitespace-nowrap">11.</div>
            <div class="uppercase px-1 py-1 text-sm whitespace-nowrap">No. Telefon Bimbit</div>
            <div class="uppercase px-1 py-1 text-sm whitespace-nowrap">:</div>
            <div class="uppercase px-1 py-1 text-sm font-semibold">{{$data[0]->phone_tel_num}}</div>
        </div>
        <div class="flex ">
            <div class="uppercase px-1 py-1 text-sm whitespace-nowrap">12.</div>
            <div class="uppercase px-1 py-1 text-sm whitespace-nowrap">No. Telefon Rumah (Sekiranya Ada)</div>
            <div class="uppercase px-1 py-1 text-sm whitespace-nowrap">:</div>
            <div class="uppercase px-1 py-1 text-sm font-semibold">{{$data[0]->home_tel_num}}</div>
        </div>
        <div class="flex ">
            <div class="uppercase px-1 py-1 text-sm whitespace-nowrap">13.</div>
            <div class="uppercase px-1 py-1 text-sm whitespace-nowrap">E-Mel</div>
            <div class="uppercase px-1 py-1 text-sm whitespace-nowrap">:</div>
            <div class=" px-1 py-1 text-sm font-semibold">{{$data[0]->email}}</div>
        </div>
    </div>

    <div class="mt-2 m-2 border border-black w-full">
        <div class="py-1 border border-black text-center">
            <div class="uppercase px-1 py-0 font-bold" >Butiran Keluarga</div>
            <p>(Ibu, Bapa dan 3 Saudara Terdekat)</p>
        </div>
        <table class="border w-full" border="1">
            <tr class="py-3 border border-black bg-gray-200">
                <td class="uppercase px-1 py-1 border border-black text-sm font-bold">Nama</td>
                <td class="uppercase px-1 py-1 border border-black text-sm font-bold">Hubungan</td>
                <td class="uppercase px-1 py-1 border border-black text-sm font-bold">Umur</td>
                <td class="uppercase px-1 py-1 border border-black text-sm font-bold">Pekerjaan</td>
                <td class="uppercase px-1 py-1 border border-black text-sm font-bold">Majikan / Sekolah</td>
                {{-- <td class="uppercase px-1 py-1" colspan="5">{{$data[0]->name}}</td> --}}
            </tr>
            @foreach($data[1] as $relative_data)
            <tr class="py-3">
                <td class="uppercase px-1 py-1 border border-black text-xs font-medium">{{$relative_data->name}}</td>
                <td class="uppercase px-1 py-1 border border-black text-xs font-medium">{{$relative_data->relationship}}</td>
                <td class="uppercase px-1 py-1 border border-black text-xs font-medium">{{$relative_data->age}}</td>
                <td class="uppercase px-1 py-1 border border-black text-xs font-medium">{{$relative_data->occupation}}</td>
                <td class="uppercase px-1 py-1 border border-black text-xs font-medium">{{$relative_data->company_name}}</td>
            </tr>
            @endforeach
        </table>
    </div>

    @pageBreak

    <div class="mt-2 m-2 border border-black w-full">
        <div class="py-1 border border-black text-center">
            <div class="uppercase px-1 py-0 font-bold" >Taraf Pendidikan</div>
        </div>
        <table class="border w-full" border="1">
            <tr class="py-3 border border-black bg-gray-200">
                <td class="uppercase px-1 py-1 border border-black text-sm font-bold">Bil.</td>
                <td class="uppercase px-1 py-1 border border-black text-sm font-bold">Sekolah / IPT</td>
                <td class="uppercase px-1 py-1 border border-black text-sm font-bold">Dari</td>
                <td class="uppercase px-1 py-1 border border-black text-sm font-bold">Hingga</td>
                <td class="uppercase px-1 py-1 border border-black text-sm font-bold">Bidang (Jika Ada)</td>
                {{-- <td class="uppercase px-1 py-1" colspan="5">{{$data[0]->name}}</td> --}}
            </tr>
            <?php $i=0; ?>
            @foreach($data[2] as $education_data)
                <?php $i=$i+1; ?>
                <tr class="py-3">
                    <td class="uppercase px-1 py-1 border border-black text-xs font-medium">{{$i}}</td>
                    <td class="uppercase px-1 py-1 border border-black text-xs font-medium">{{$education_data->edu_institute_name}} ({{$education_data->edu_level}})</td>
                    <td class="uppercase px-1 py-1 border border-black text-xs font-medium">{{$education_data->start_year}}</td>
                    <td class="uppercase px-1 py-1 border border-black text-xs font-medium">{{$education_data->end_year}}</td>
                    <td class="uppercase px-1 py-1 border border-black text-xs font-medium">{{$education_data->edu_course_name}}</td>
                </tr>
            @endforeach
        </table>
    </div>

    <div class="mt-2 m-2 border border-black w-full">
        <div class="py-1 border border-black text-center">
            <div class="uppercase px-1 py-0 font-bold" >Pengalaman Bekerja</div>
        </div>
        <table class="border border-black w-full" border="1">
            <tr class="py-3 border border-black bg-gray-200">
                <td class="uppercase px-1 py-1 border border-black text-sm font-bold">Nama Majikan</td>
                <td class="uppercase px-1 py-1 border border-black text-sm font-bold">Jawatan</td>
                <td class="uppercase px-1 py-1 border border-black text-sm font-bold">Dari</td>
                <td class="uppercase px-1 py-1 border border-black text-sm font-bold">Hingga</td>
                <td class="uppercase px-1 py-1 border border-black text-sm font-bold">Gaji Akhir</td>
                <td class="uppercase px-1 py-1 border border-black text-sm font-bold">Sebab Berhenti</td>
                {{-- <td class="uppercase px-1 py-1" colspan="5">{{$data[0]->name}}</td> --}}
            </tr>

            @foreach($data[3] as $career_history_data)
                <tr class="py-3">
                    <td class="uppercase px-1 py-1 border border-black text-xs font-medium">{{$career_history_data->employer_name}}</td>
                    <td class="uppercase px-1 py-1 border border-black text-xs font-medium">{{$career_history_data->designation}}</td>
                    <td class="uppercase px-1 py-1 border border-black text-xs font-medium">{{$career_history_data->start_year}}</td>
                    <td class="uppercase px-1 py-1 border border-black text-xs font-medium">{{$career_history_data->end_year}}</td>
                    <td class="uppercase px-1 py-1 border border-black text-xs font-medium">{{$career_history_data->final_salary}}</td>
                    <td class="uppercase px-1 py-1 border border-black text-xs font-medium">{{$career_history_data->resign_reason}}</td>
                </tr>
            @endforeach
        </table>
    </div>

    <div class="mt-2 m-2 border border-black w-full">
        <div class="py-1 border border-black text-center">
            <div class="uppercase px-1 py-0 font-bold" >Maklumat Tambahan Mengenai Pekerjaan Semasa / Terakhir</div>
        </div>

        <div class="flex ">
            <div class="uppercase px-1 py-1 text-xs whitespace-nowrap">Faedah Semasa</div>
            <div class="uppercase px-1 py-1 text-xs whitespace-nowrap">:</div>
            <div class="uppercase px-1 py-1 text-xs font-semibold"> RM{{$data[4]->current_salary}} </div>
        </div>
        <div class="flex ">
            <div class="uppercase px-1 py-1 text-xs whitespace-nowrap">Elaun Semasa<br>(Jika Ada)</div>
            <div class="uppercase px-1 py-1 text-xs whitespace-nowrap">:</div>
            <div class="uppercase px-1 py-1 text-xs font-semibold"> RM {{$data[4]->current_allowance}}</div>
        </div>
        <div class="flex ">
            <div class="uppercase px-1 py-1 text-xs whitespace-nowrap">Jumlah Bonus Terakhir Yang Diperolehi Dan Bila</div>
            <div class="uppercase px-1 py-1 text-xs whitespace-nowrap">:</div>
            <div class="uppercase px-1 py-1 text-xs font-semibold">{{$data[4]->latest_bonus_sum}} , {{$data[4]->latest_bonus_date}} </div>
        </div>
        <div class="flex ">
            <div class="uppercase px-1 py-1 text-xs whitespace-nowrap">Laporkan Kepada Siapa ? </div>
            <div class="uppercase px-1 py-1 text-xs whitespace-nowrap">:</div>
            <div class="uppercase px-1 py-1 text-xs font-semibold">{{$data[4]->responsible_officer}}</div>
        </div>
        <div class="flex ">
            <div class="uppercase px-1 py-1 text-xs whitespace-nowrap">Bilangan Orang Yang Melaporkan Kepada Anda</div>
            <div class="uppercase px-1 py-1 text-xs whitespace-nowrap">:</div>
            <div class="uppercase px-1 py-1 text-xs font-semibold">{{$data[4]->num_staff_under}}</div>
        </div>
        <div class="flex ">
            <div class="uppercase px-1 py-1 text-xs whitespace-nowrap">Tempoh Notis Perletakan Jawatan Untuk Pekerjaan Sekarang</div>
            <div class="uppercase px-1 py-1 text-xs whitespace-nowrap">:</div>
            <div class="uppercase px-1 py-1 text-xs font-semibold">{{$data[4]->resign_period}}</div>
        </div>

    </div>

    <div class="mt-2 m-2 border border-black w-full">
        <div class="py-1 border border-black text-center">
            <div class="uppercase px-1 py-0 font-bold" >Penguasaan Bahasa</div>
        </div>
        <table class="border w-full" border="1">
            <tr class="py-3 border bg-gray-200">
                <td class="uppercase px-1 py-1 border border-black text-sm font-bold">Nama Bahasa</td>
                <td class="uppercase px-1 py-1 border border-black text-sm font-bold">Status Penguasaan</td>
                {{-- <td class="uppercase px-1 py-1" colspan="5">{{$data[0]->name}}</td> --}}
            </tr>
            <tr class="py-3">
                <td class="uppercase px-1 py-1 border border-black text-xs font-medium">Bahasa Melayu</td>
                <td class="uppercase px-1 py-1 border border-black text-xs font-medium">{{$data[5]->bm_status}}</td>
            </tr>
            <tr class="py-3">
                <td class="uppercase px-1 py-1 border border-black text-xs font-medium">Bahasa Inggeris</td>
                <td class="uppercase px-1 py-1 border border-black text-xs font-medium">{{$data[5]->bi_status}}</td>
            </tr>
            <tr class="py-3">
                <td class="uppercase px-1 py-1 border border-black text-xs font-medium">Bahasa Lain (Jika Ada): {{$data[5]->other_language_name}}</td>
                <td class="uppercase px-1 py-1 border border-black text-xs font-medium">{{$data[5]->other_language_status}}</td>
            </tr>
        </table>
    </div>
    @pageBreak
    <div class="mt-2 m-2 border border-black w-full">
        <div class="py-1 border border-black text-center">
            <div class="uppercase px-1 py-0 font-bold" >Maklumat Lain</div>
        </div>

        <table class="border border-black w-full" border="1">
            <tr class="py-3 border border-black">
                <td class="uppercase px-1 py-1 border border-black text-xs ">1. </td>
                <td class="uppercase px-1 py-1 border border-black text-xs ">Adakah anda pernah didakwa dan disabitkan dalam mana-mana mahkamah undang-undang untuk kesalahan jenayah atau kesalahan di bawah Akta Dadah Berbahaya 1952 ?
                    <p class="underline font-bold">{{$data[5]->drug_status}} {{$data[5]->drug_description}}</p>
                </td>
            </tr>
            <tr class="py-3 border border-black">
                <td class="uppercase px-1 py-1 border border-black text-xs ">2. </td>
                <td class="uppercase px-1 py-1 border border-black text-xs ">Adakah anda diisytiharkan bankrap ?
                    <p class="underline font-bold">{{$data[5]->bankcrupt_status}} {{$data[5]->bankcrupt_description}}</p>
                </td>
            </tr>
            <tr class="py-3 border border-black">
                <td class="uppercase px-1 py-1 border border-black text-xs ">3. </td>
                <td class="uppercase px-1 py-1 border border-black text-xs ">Adakah anda terlibat dalam sebarang usaha perniagaan, termasuk perniagaan keluarga ?
                    <p class="underline font-bold">{{$data[5]->business_status}} {{$data[5]->business_description}}</p>
                </td>
            </tr>
            <tr class="py-3 border border-black">
                <td class="uppercase px-1 py-1 border border-black text-xs ">4. </td>
                <td class="uppercase px-1 py-1 border border-black text-xs ">Adakah anda mempunyai lesen memandu ?
                    <p class="underline font-bold">{{$data[5]->license_status}}</p>  <p class="underline font-bold">{{$data[5]->license_description}}</p>
                </td>
            </tr>
            <tr class="py-3 border border-black">
                <td class="uppercase px-1 py-1 border border-black text-xs ">5. </td>
                <td class="uppercase px-1 py-1 border border-black text-xs ">Adakah anda seorang perokok?
                    <p class="underline font-bold">{{$data[5]->smoking_status}}</p> 
                </td>
            </tr>
            <tr class="py-3 border">
                <td class="uppercase px-1 py-1 border border-black text-xs ">6. </td>
                <td class="uppercase px-1 py-1 border border-black text-xs ">Adakah anda seorang peminum arak?
                    <p class="underline font-bold">{{$data[5]->drinking_status}}</p> 
                </td>
            </tr>
        </table>
    </div>

    <div class="mt-2 m-2 border border-black w-full">
        <div class="py-1 border border-black text-center">
            <div class="uppercase px-1 py-0 font-bold" >Perubatan & Keadaan Fizikal</div>
        </div>

        <table class="border w-full" border="1">
            <tr class="py-3 border">
                <td class="uppercase px-1 py-1 border border-black text-xs ">1. </td>
                <td class="uppercase px-1 py-1 border border-black text-xs ">Pernahkah anda atau sedang mengalami sebarang penyakit?
                    <p class="underline font-bold">{{$data[5]->illness_status}} {{$data[5]->illness_description}}</p>
                </td>
            </tr>
            <tr class="py-3 border">
                <td class="uppercase px-1 py-1 border border-black text-xs ">2. </td>
                <td class="uppercase px-1 py-1 border border-black text-xs ">Adakah anda mengalami kecacatan fizikal?
                    <p class="underline font-bold">{{$data[5]->physical_status}} {{$data[5]->physical_description}}</p>
                </td>
            </tr>
            <tr class="py-3 border">
                <td class="uppercase px-1 py-1 border border-black text-xs ">3. </td>
                <td class="uppercase px-1 py-1 border border-black text-xs ">Adakah anda sedang hamil atau merancang memiliki bayi tidak lama lagi? (untuk calon perempuan sahaja)
                    <p class="underline font-bold">{{$data[5]->pregnancy_status}} {{$data[5]->pregnancy_description}}</p>
                </td>
            </tr>
        </table>
    </div>

    <div class="mt-2 m-2 border border-black w-full">
        <div class="py-1 border border-black text-center">
            <div class="uppercase px-1 py-0 font-bold" >Kemahiran / Bakat / Hobi</div>
        </div>
        <div class=" border-black">
            @foreach($data[6] as $hobby)
                <div class="uppercase px-1 py-1 text-xs font-semibold">{{$hobby->hobby}}</div>
            @endforeach
        </div>

    </div>
    @pageBreak
    <div class="mt-2 m-2 border border-black w-full">
        <div class="py-1 border border-black text-center">
            <div class="uppercase px-1 py-0 font-bold" >Orang Untuk Dihubungi Jika Berlaku Kecemasan</div>
        </div>

        <table class="border border-black w-full" border="1">
            <tr class="py-3 border border-black">
                <td class="uppercase px-1 py-1 border border-black text-xs ">Nama
                    <p class=" font-bold">{{$data[0]->emgcy_contact_name}}</p>
                </td>
            </tr>
            <tr class="py-3 border border-black">
                <td class="uppercase px-1 py-1 border border-black text-xs ">Hubungan
                    <p class=" font-bold">{{$data[0]->emgcy_contact_relationship}}</p>
                </td>
            </tr>
            <tr class="py-3 border border-black">
                <td class="uppercase px-1 py-1 border border-black text-xs ">No. Telefon
                    <p class=" font-bold">{{$data[0]->emgcy_contact_phone_num}}</p>
                </td>
            </tr>
        </table>
    </div>



    <div class="mt-2 m-2 border border-black w-full">
        <div class="py-1 border border-black text-center">
            <div class="uppercase px-1 py-0 font-bold" >Rujukan</div>
        </div>

        <table class="w-full">
            <tr>
                <td>
                    <div class="flex">
                        <div class="uppercase text-xs px-1 py-1 font-semibold">Rujukan 1</div>
                    </div>
                    <div class="flex">
                        <div class="uppercase text-xs px-1 py-1">Nama</div>
                        <div class="uppercase text-xs px-1 py-1">:</div>
                        <div class="uppercase text-xs px-1 py-1 font-semibold">{{$data[5]->ref1_name}}</div>
                    </div>
                    <div class="flex">
                        <div class="uppercase text-xs px-1 py-1">No. Telefon</div>
                        <div class="uppercase text-xs px-1 py-1">:</div>
                        <div class="uppercase text-xs px-1 py-1 font-semibold">{{$data[5]->ref1_phone_num}}</div>
                    </div>
                    <div class="flex">
                        <div class="uppercase text-xs px-1 py-1">Nama Syarikat</div>
                        <div class="uppercase text-xs px-1 py-1">:</div>
                        <div class="uppercase text-xs px-1 py-1 font-semibold">{{$data[5]->ref1_company}}</div>
                    </div>
                    <div class="flex">
                        <div class="uppercase text-xs px-1 py-1">Jawatan</div>
                        <div class="uppercase text-xs px-1 py-1">:</div>
                        <div class="uppercase text-xs px-1 py-1 font-semibold">{{$data[5]->ref1_designation}}</div>
                    </div>
                </td>
                <td>
                    <div class="flex">
                        <div class="uppercase text-xs px-1 py-1 font-semibold">Rujukan 2</div>
                    </div>
                    <div class="flex">
                        <div class="uppercase text-xs px-1 py-1">Nama</div>
                        <div class="uppercase text-xs px-1 py-1">:</div>
                        <div class="uppercase text-xs px-1 py-1 font-semibold">{{$data[5]->ref2_name}}</div>
                    </div>
                    <div class="flex">
                        <div class="uppercase text-xs px-1 py-1">No. Telefon</div>
                        <div class="uppercase text-xs px-1 py-1">:</div>
                        <div class="uppercase text-xs px-1 py-1 font-semibold">{{$data[5]->ref2_phone_num}}</div>
                    </div>
                    <div class="flex">
                        <div class="uppercase text-xs px-1 py-1">Nama Syarikat</div>
                        <div class="uppercase text-xs px-1 py-1">:</div>
                        <div class="uppercase text-xs px-1 py-1 font-semibold">{{$data[5]->ref2_company}}</div>
                    </div>
                    <div class="flex">
                        <div class="uppercase text-xs px-1 py-1">Jawatan</div>
                        <div class="uppercase text-xs px-1 py-1">:</div>
                        <div class="uppercase text-xs px-1 py-1 font-semibold">{{$data[5]->ref2_designation}}</div>
                    </div>
                </td>
            </tr>
        </table>

    </div>


    <div class=" ">
        <div class="uppercase px-1 py-1 text-sm font-extrabold">PENGESAHAN PENGHANTARAN BORANG</div>
        <div class="uppercase px-1 py-1 text-xs ">SAYA MENGESAHKAN BAHAWA KETERANGAN-KETERANGAN DAN MAKLUMAT-MAKLUMAT YANG DIBERIKAN ADALAH BENAR, SAYA SETUJU JIKA DIDAPATI ADA KETERANGAN YANG TIDAK BENAR SAYA BOLEH DIBERHENTIKAN DENGAN SERTA MERTA OLEH PIHAK SYARIKAT.</div>
        <div class="uppercase px-1 py-1 text-xs font-extrabold">{{$data[0]->name}},{{date('d-m-Y', strtotime($data[0]->form_submitted_date))}}</div>
        <div class="uppercase px-1 py-1 text-xs font-semibold">UUID {{$data[0]->id}} JOB UUID {{$data[0]->job_id}}</div>
    </div>





    {{-- <table class="mt-2 m-2 p-2 border w-full">
        <tr class="py-3 border text-center">
            <td class="uppercase px-1 py-1 font-bold" colspan="9">Maklumat Peribadi</td>
        </tr>
        <tr class="py-3">
            <td class="uppercase px-1 py-1">1.</td>
            <td class="uppercase px-1 py-1">Nama Penuh</td>
            <td class="uppercase px-1 py-1">:</td>
            <td class="uppercase px-1 py-1" colspan="6">{{$data[0]->name}}</td>
        </tr>
        <tr class="py-3">
            <td class="uppercase px-1 py-1 w-full" colspan="5"></td>
            <td class="uppercase px-1 py-1 w-full" colspan="9"></td>

        </tr>
        <tr class="py-3">
            <td class="uppercase px-1 py-1">2.</td>
            <td class="uppercase px-1 py-1">Tarikh Lahir</td>
            <td class="uppercase px-1 py-1">:</td>
            <td class="uppercase px-1 py-1">{{$data[0]->birthdate}}</td>
            <td class="uppercase px-1 py-1">3.</td>
            <td class="uppercase px-1 py-1">Jantina</td>
            <td class="uppercase px-1 py-1">:</td>
            <td class="uppercase px-1 py-1">{{$data[0]->gender}}</td>
        </tr>
        <tr class="py-3">
            <td class="uppercase px-1 py-1">4.</td>
            <td class="uppercase px-1 py-1">Warganegara</td>
            <td class="uppercase px-1 py-1">:</td>
            <td class="uppercase px-1 py-1">Malaysia</td>
            <td class="uppercase px-1 py-1">5.</td>
            <td class="uppercase px-1 py-1">Bangsa</td>
            <td class="uppercase px-1 py-1">:</td>
            <td class="uppercase px-1 py-1">{{$data[0]->race}}</td>
        </tr>
        <tr>
            <td class="uppercase px-1 py-1">6.</td>
            <td class="uppercase px-1 py-1">Umur</td>
            <td class="uppercase px-1 py-1">:</td>
            <td class="uppercase px-1 py-1">{{$data[0]->age}} Tahun</td>
            <td class="uppercase px-1 py-1">7.</td>
            <td class="uppercase px-1 py-1">Kad Pengenalan (Baru)</td>
            <td class="uppercase px-1 py-1">:</td>
            <td class="uppercase px-1 py-1">{{$data[0]->ic_num}} </td>
        </tr>
        <tr>
            <td class="uppercase px-1 py-1">8.</td>
            <td class="uppercase px-1 py-1">Status Perkahwinan</td>
            <td class="uppercase px-1 py-1">:</td>
            <td class="uppercase px-1 py-1">{{$data[0]->marital_status}} </td>
        </tr>
        <tr>
            <td class="uppercase px-1 py-1">9.</td>
            <td class="uppercase px-1 py-1" colspan="3">Alamat Tetap :</td>
            <td class="uppercase px-1 py-1">10.</td>
            <td class="uppercase px-1 py-1" colspan="3">Alamat Surat Menyurat :</td>
        </tr>
        <tr>
            <td class="uppercase px-1 py-1"></td>
            <td class="uppercase px-1 py-1" colspan="3">{{$data[0]->fixed_address}} </td>
            <td class="uppercase px-1 py-1"></td>
            <td class="uppercase px-1 py-1" colspan="3">{{$data[0]->mail_address}} </td>
    
        </tr>
    </table> --}}

</body>
</html>

{{-- <table class="mt-2 m-2 p-2 border w-full">
    <tr class="py-3 border text-center">
        <td class="uppercase px-1 py-1 font-bold" colspan="9">Maklumat Peribadi</td>
    </tr>
    <tr class="py-3">
        <td class="uppercase px-1 py-1">1.</td>
        <td class="uppercase px-1 py-1">Nama Penuh</td>
        <td class="uppercase px-1 py-1">:</td>
        <td class="uppercase px-1 py-1" colspan="5">{{$data[0]->name}}</td>
    </tr>
    <tr class="py-3">
        <td class="uppercase px-1 py-1">2.</td>
        <td class="uppercase px-1 py-1">Tarikh Lahir</td>
        <td class="uppercase px-1 py-1">:</td>
        <td class="uppercase px-1 py-1">{{$data[0]->birthdate}}</td>
        <td class="uppercase px-1 py-1"> </td>
        <td class="uppercase px-1 py-1">3.</td>
        <td class="uppercase px-1 py-1">Jantina</td>
        <td class="uppercase px-1 py-1">:</td>
        <td class="uppercase px-1 py-1">{{$data[0]->gender}}</td>
    </tr>
    <tr class="py-3">
        <td class="uppercase px-1 py-1">4.</td>
        <td class="uppercase px-1 py-1">Warganegara</td>
        <td class="uppercase px-1 py-1">:</td>
        <td class="uppercase px-1 py-1">Malaysia</td>
        <td class="uppercase px-1 py-1"> </td>
        <td class="uppercase px-1 py-1">5.</td>
        <td class="uppercase px-1 py-1">Bangsa</td>
        <td class="uppercase px-1 py-1">:</td>
        <td class="uppercase px-1 py-1">{{$data[0]->race}}</td>
    </tr>
    <tr>
        <td class="uppercase px-1 py-1">6.</td>
        <td class="uppercase px-1 py-1">Umur</td>
        <td class="uppercase px-1 py-1">:</td>
        <td class="uppercase px-1 py-1">{{$data[0]->age}} Tahun</td>
        <td class="uppercase px-1 py-1"> </td>
        <td class="uppercase px-1 py-1">7.</td>
        <td class="uppercase px-1 py-1">Kad Pengenalan (Baru)</td>
        <td class="uppercase px-1 py-1">:</td>
        <td class="uppercase px-1 py-1">{{$data[0]->ic_num}} </td>
    </tr>
    <tr>
        <td class="uppercase px-1 py-1">8.</td>
        <td class="uppercase px-1 py-1">Status Perkahwinan</td>
        <td class="uppercase px-1 py-1">:</td>
        <td class="uppercase px-1 py-1">{{$data[0]->marital_status}} </td>
    </tr>
    <tr>
        <td class="uppercase px-1 py-1">9.</td>
        <td class="uppercase px-1 py-1" colspan="3">Alamat Tetap :</td>
        <td class="uppercase px-1 py-1"> </td>
        <td class="uppercase px-1 py-1">10.</td>
        <td class="uppercase px-1 py-1" colspan="3">Alamat Surat Menyurat :</td>
    </tr>
    <tr>
        <td class="uppercase px-1 py-1"></td>
        <td class="uppercase px-1 py-1" colspan="3">{{$data[0]->fixed_address}} </td>
        <td class="uppercase px-1 py-1"> </td>
        <td class="uppercase px-1 py-1"></td>
        <td class="uppercase px-1 py-1" colspan="3">{{$data[0]->mail_address}} </td>

    </tr>
</table> --}}