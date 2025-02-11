@extends('layouts.main')

@section('content')

<section class="">


  <div class="">
      <h1 class="mb-2 text-2xl font-bold tracking-tight leading-none text-gray-900 md:text-3xl lg:text-2xl">Profil</h1>
      {{-- <p class="mb-4 text-sm font-normal text-gray-500 ">Isikan borang dibawah dengan lengkap</p> --}}
  </div>



  <div class="mt-2 w-full">
    <div class="py-1 flex flex-row">
        <div class="uppercase px-1 py-1 font-bold" colspan="9">Maklumat Peribadi</div> <button class="underline ml-2">Edit</button>
    </div>
    <div class="flex flex-wrap ">
      <div class="w-full flex flex-row text-sm px-1 py-1">Nama :&nbsp;<p class="font-semibold">{{$candidate->name}}</p></div>
    </div>
    <div class="flex flex-wrap ">
      <div class="w-full md:w-1/3 flex flex-row text-sm px-1 py-1">Tarikh Lahir :&nbsp;<p class="font-semibold">{{$candidate->birthdate}}</p></div>
      <div class="w-full md:w-1/3 flex flex-row text-sm px-1 py-1">Jantina :&nbsp;<p class="font-semibold">{{$candidate->gender}}</p></div>
      {{-- <div class="w-full md:w-1/3 flex flex-row text-sm px-1 py-1">Warganegara :&nbsp;<p class="font-semibold">Malaysia</p></div> --}}
    </div>
    <div class="flex flex-wrap ">
      <div class="w-full md:w-1/3 flex flex-row text-sm px-1 py-1">Bangsa :&nbsp;<p class="font-semibold">{{$candidate->race}}</p></div>
      <div class="w-full md:w-1/3 flex flex-row text-sm px-1 py-1">Umur :&nbsp;<p class="font-semibold">29 Tahun</p></div>
      <div class="w-full md:w-1/3 flex flex-row text-sm px-1 py-1">No. K/P :&nbsp;<p class="font-semibold">{{$candidate->ic_num}}</p></div>
    </div>
    <div class="flex flex-wrap ">
      <div class="w-full md:w-1/2 flex flex-row text-sm px-1 py-1">No. Telefon:&nbsp;<p class="font-semibold">{{$candidate->phone_tel_num}}</p></div>
      <div class="w-full md:w-1/2 flex flex-row text-sm px-1 py-1">E-Mel :&nbsp;<p class="font-semibold">{{$candidate->email}}</p></div>
    </div>
    <div class="flex flex-wrap ">
      <div class="w-full md:w-1/2 flex flex-row text-sm px-1 py-1">Status Perkahwinan :&nbsp;
        <p class="font-semibold">
          @if($candidate->marital_status == 'single') 
            Bujang
          @elseif($candidate->marital_status == 'married')
            Berkahwin
          @elseif($candidate->marital_status == 'divorced')
            Bercerai
          @endif
        </p>
      </div>
      <div class="w-full md:w-1/2 flex flex-row text-sm px-1 py-1">Bilangan Anak (Jika Berkahwin) :&nbsp;<p class="font-semibold">@if($candidate->child_num){{$candidate->child_num}} Orang @else Tidak Berkaitan @endif</p></div>
    </div>
    <div class="flex flex-wrap px-1 py-1">
      <div class="text-sm text-nowrap">Alamat Tetap : </div>
      <div class="text-sm font-semibold px-1 ">{{$candidate->fixed_address}}</div>
    </div>
    <div class="flex flex-wrap px-1 py-1">
      <div class="text-sm text-nowrap">Alamat Surat Menyurat : </div>
      <div class="text-sm px-1 font-semibold">@if($candidate->mail_address) {{$candidate->mail_address}} @else Tidak Berkaitan @endif</div>
    </div>
  

            {{-- <div class="flex">
                <div class="text-sm px-1 py-1">Status Perkahwinan : </div>
                <div class="text-sm px-1 py-1 font-semibold">Bujang</div>
                {{-- {{$data[0]->marital_status}}  --}}
                {{-- <div class="uppercase text-sm px-1 py-1 font-semibold"> --}}
                    {{-- @if($data[0]->marital_status=="married")
                    Berkahwin
                    @elseif($data[0]->marital_status=="single")
                    Bujang
                    @elseif($data[0]->marital_status=="divorced")
                    Bercerai
                    @else
                    Tiada Status
                    @endif --}}
                {{-- </div>
            </div>
        </div> --}}
  </div>


  {{-- maklumat keluarga --}}
  <div class="mt-2 w-full">
    <div class="py-1 flex flex-row">
      <div class="uppercase px-1 py-1 font-bold" colspan="9">Maklumat Keluarga</div> <button class="underline ml-2">Tambah</button>
  </div>
    <div class="relative overflow-x-auto shadow-md mb-3">
      <table class="w-full text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-white uppercase bg-green-700">
          <tr>
              <th scope="col" class="px-2 py-2">
                  Nama
              </th>


              <th scope="col" class="px-6 py-3">
                  <span class="sr-only">Tindakan</span>
              </th>
          </tr>
        </thead>
        <tbody id="candidateTable">
          @foreach($relatives as $relative)
          <tr class="bg-white border-b hover:bg-gray-50 candidate-row">
            <td scope="row" class="px-2 py-4 font-medium text-gray-900 candidate-name">
                {{$relative->name}}<br>
                <p class="text-xs ">{{$relative->relationship}}, {{$relative->age}} Tahun, {{$relative->occupation}} @if($relative->company_name) di {{$relative->company_name}} @endif</p>
            </td>
            <td class="px-2 py-4 text-right flex flex-row">
              <form action="{{route('delete-apply-form-pg3')}}" method="POST">
                  @csrf
                  <input type="hidden" id="candidate_id" name="candidate_id" value="" class="" required /> 
                  <button  class="font-medium text-blue-600 hover:underline">Padam</a>
              </form>
            </td>
          </tr>
          @endforeach
  
        </tbody>
      </table>
    </div>
  </div>


  {{-- maklumat pendidikan --}}
  <div class="mt-2 w-full">
    <div class="py-1 flex flex-row">
      <div class="uppercase px-1 py-1 font-bold" colspan="9">Maklumat Pendidikan</div> <button class="underline ml-2">Tambah</button>
  </div>
    <div class="relative overflow-x-auto shadow-md mb-3">
      <table class="w-full text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-white uppercase bg-green-700">
          <tr>
              <th scope="col" class="px-2 py-2">
                  Jenis Pendidikan
              </th>
              <th scope="col" class="px-6 py-3">
                  <span class="sr-only">Tindakan</span>
              </th>
          </tr>
        </thead>
        <tbody id="candidateTable">
          @foreach($educations as $education)
          <tr class="bg-white border-b hover:bg-gray-50 candidate-row">
            <td scope="row" class="px-2 py-4 font-medium text-gray-900 candidate-name">
              {{$education->edu_institute_name}}<br>
                <p class="text-xs ">{{$education->start_year}}-{{$education->end_year}}, {{$education->edu_level}} , {{$education->edu_course_name}}</p>
            </td>
            <td class="px-2 py-4 text-right flex flex-row">
              <form action="{{route('delete-apply-form-pg3')}}" method="POST">
                  @csrf
                  <input type="hidden" id="candidate_id" name="candidate_id" value="" class="" required /> 
                  <button  class="font-medium text-blue-600 hover:underline">Padam</a>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>



  {{-- maklumat pekerjaan --}}
  <div class="mt-2 w-full">
    <div class="py-1 flex flex-row">
      <div class="uppercase px-1 py-1 font-bold" colspan="9">Maklumat Pekerjaan</div> <button class="underline ml-2">Tambah</button>
  </div>
    <div class="relative overflow-x-auto shadow-md mb-3">
      <table class="w-full text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-white uppercase bg-green-700">
          <tr>
              <th scope="col" class="px-2 py-2">
                  Pekerjaan
              </th>
              <th scope="col" class="px-6 py-3">
                  <span class="sr-only">Tindakan</span>
              </th>
          </tr>
        </thead>
        <tbody id="candidateTable">
          @foreach($career_histories as $career_history)
          <tr class="bg-white border-b hover:bg-gray-50 candidate-row">
            <td scope="row" class="px-2 py-4 font-medium text-gray-900 candidate-name">
              {{$career_history->designation}} di {{$career_history->employer_name}} <br>
                <p class="text-xs ">{{$career_history->start_year}}  - @if($career_history->end_year) {{$career_history->end_year}} @else Sekarang @endif, Gaji Terakhir : RM {{$career_history->final_salary}}<br> @if($career_history->end_year) Sebab Berhenti : {{$career_history->resign_reason}}@endif</p>
            </td>
            <td class="px-2 py-4 text-right flex flex-row">
              <form action="{{route('delete-apply-form-pg3')}}" method="POST">
                  @csrf
                  <input type="hidden" id="candidate_id" name="candidate_id" value="" class="" required /> 
                  <button  class="font-medium text-blue-600 hover:underline">Padam</a>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  {{-- maklumat tambahan pekerjaan terkini --}}
  <div class="mt-2 w-full">
    <div class="py-1 flex flex-row">
      <div class="uppercase px-1 py-1 font-bold" colspan="9">Maklumat Tambahan Mengenai Pekerjaan Terkini</div> <button class="underline ml-2">Edit</button>
    </div>
    <div class="flex flex-wrap ">
      <div class="w-full md:w-1/2 flex flex-row text-sm px-1 py-1">Faedah Semasa  :&nbsp;<p class="font-semibold">RM {{number_format($current_career_history->current_salary,2)}}</p></div>
      <div class="w-full md:w-1/2 flex flex-row text-sm px-1 py-1">Elaun Semasa (Jika Ada) :&nbsp;<p class="font-semibold">RM {{number_format($current_career_history->current_allowance,2)}}</p></div>
    </div>
    <div class="flex flex-wrap ">
      <div class="w-full flex flex-row text-sm px-1 py-1">Jumlah Bonus Terakhir Diterima dan Tarikh Penerimaan :&nbsp;<p class="font-semibold">RM {{number_format($current_career_history->latest_bonus_sum,2)}} , {{ \Carbon\Carbon::createFromFormat('d-m-Y', $current_career_history->latest_bonus_date)->format('d F Y') }}
      </p></div>
    </div>
    <div class="flex flex-wrap ">
      <div class="w-full md:w-1/2 flex flex-row text-sm px-1 py-1">Lapor Kepada Siapa ? :&nbsp;<p class="font-semibold">{{$current_career_history->responsible_officer}}</p></div>
    <div class="flex flex-wrap ">
      <div class="w-full flex flex-row text-sm px-1 py-1">Bilangan Orang Yang Melaporkan Kepada Anda :&nbsp;<p class="font-semibold">{{$current_career_history->num_staff_under}}</p></div>
      <div class="w-full flex flex-row text-sm px-1 py-1">Tempoh Notis Peletakan Jawatan :&nbsp;<p class="font-semibold">{{$current_career_history->resign_period}}</p></div>
    </div>
  </div>

  {{-- maklumat penguasaan bahasa--}}
  <div class="mt-2 w-full">
    <div class="py-1 flex flex-row">
      <div class="uppercase px-1 py-1 font-bold" colspan="9">Maklumat Penguasaan Bahasa</div> <button class="underline ml-2">Edit</button>
    </div>
    <div class="flex flex-wrap ">
      <div class="w-full md:w-1/2 flex flex-row text-sm px-1 py-1">Bahasa Melayu  :&nbsp;<p class="font-semibold">Baik</p></div>
      <div class="w-full md:w-1/2 flex flex-row text-sm px-1 py-1">Bahasa Inggeris :&nbsp;<p class="font-semibold">Baik</p></div>
    </div>
    <div class="flex flex-wrap ">
      <div class="w-full flex flex-row text-sm px-1 py-1">Bahasa Lain dan Tahap Penguasaan :&nbsp;<p class="font-semibold">Bahasa Jepun , Sederhana</p></div>
    </div>
  </div>


  {{-- kemahiran , bakat dan hobi--}}
  <div class="mt-2 w-full">
    <div class="py-1 flex flex-row">
      <div class="uppercase px-1 py-1 font-bold" colspan="9">Kemahiran, Bakat & Hobi</div> <button class="underline ml-2">Tambah</button>
    </div>
    <div class="relative overflow-x-auto shadow-md mb-3">
      <table class="w-full text-sm text-left rtl:text-right text-gray-500">
        <thead class="text-xs text-white uppercase bg-green-700">
          <tr>
              <th scope="col" class="px-2 py-2">
                Kemahiran, Bakat & Hobi
              </th>
              <th scope="col" class="px-6 py-3">
                  <span class="sr-only">Tindakan</span>
              </th>
          </tr>
        </thead>
        <tbody id="candidateTable">
          @foreach($hobbies as $hobby)
          <tr class="bg-white border-b hover:bg-gray-50 candidate-row">
            <td scope="row" class="px-2 py-4 font-medium text-gray-900 candidate-name">
              {{$hobby->hobby}}
            </td>
            <td class="px-2 py-4 text-right flex flex-row">
              <form action="{{route('delete-apply-form-pg3')}}" method="POST">
                  @csrf
                  <input type="hidden" id="candidate_id" name="candidate_id" value="" class="" required /> 
                  <button  class="font-medium text-blue-600 hover:underline">Padam</a>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  {{-- maklumat kecemasan--}}
<div class="mt-2 w-full">
    <div class="py-1 flex flex-row">
      <div class="uppercase px-1 py-1 font-bold" colspan="9">Maklumat Hubungan Semasa Kecemasan</div> <button class="underline ml-2">Edit</button>
    </div>
    <div class="flex flex-wrap ">
      <div class="w-full md:w-1/2 flex flex-row text-sm px-1 py-1">Nama :&nbsp;<p class="font-semibold">{{$candidate->emgcy_contact_name}}</p></div>
      <div class="w-full md:w-1/4 flex flex-row text-sm px-1 py-1">Hubungan :&nbsp;<p class="font-semibold">{{$candidate->emgcy_contact_relationship}}</p></div>
      <div class="w-full flex flex-row text-sm px-1 py-1">No. Telefon :&nbsp;<p class="font-semibold">{{$candidate->emgcy_contact_phone_num}}</p></div>
    </div>

  </div>


</section>
    
    
@endsection