<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Models\Relative;
use App\Models\Education;
use App\Models\CareerHistory;
use App\Models\CurrentCareerHistory;
use App\Models\OtherInformation;
use App\Models\Hobby;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CandidateController extends Controller
{
    public function storeApplyFormPg1(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'job_id' => 'required',
            'name' => 'required',
            'birthdate' => 'required',
            'gender' => 'required',
            'race' => 'required',
            'age' => 'required',
            'ic_num' => 'required',
            'marital_status' => 'required',
            'fixed_address' => 'required',
            'mail_address' => 'required',
            'phone_tel_num' => 'required',
            'home_tel_num' => 'required',
            'email' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/apply-form')
                        ->withErrors($validator)
                        ->withInput();
        }

        $validated=$validator->validated();

        // dd($validated[1]);
        
        $candidate = new Candidate();
        $candidate->job_id = $request->job_id;
        $candidate->name = $request->name;
        $candidate->birthdate = $request->birthdate;
        $candidate->gender = $request->gender;
        $candidate->race = $request->race;
        $candidate->age = $request->age;
        $candidate->ic_num = $request->ic_num;
        $candidate->marital_status = $request->marital_status;
        $candidate->fixed_address = $request->fixed_address;
        $candidate->mail_address = $request->mail_address;
        $candidate->phone_tel_num = $request->phone_tel_num;
        $candidate->home_tel_num = $request->home_tel_num;
        $candidate->email = $request->email;

        $candidate->save();

        // dd($candidate->id);
        return redirect()->route('apply-form-pg2', ['candidate_id' => $candidate->id]);
        // return $this->viewApplyFormPg2($candidate->id);


    }

    //page-2--------------------------------------------------------------------------------------------------------


    public function viewApplyFormPg2($candidate_id)
    {
        $relatives=Relative::where('candidate_id','=',$candidate_id)->get();
        // dd($relative);

        return view('apply-form.apply-form-2',['candidate_id' => $candidate_id,'relatives' => $relatives]);
    }

    public function storeApplyFormPg2(Request $request)
    {
        // dd($request);

        $validator=Validator::make($request->all(),[
            'job_id' => 'required',
            'candidate_id' => 'required',
            'name' => 'required',
            'relationship' => 'required',
            'age' => 'required',
            'occupation' => 'required',
            'company_name' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->route('apply-form-pg2', ['candidate_id' => $request->candidate_id])
                        ->withErrors($validator)
                        ->withInput();
        }

        $validated=$validator->validated();

        $relative = new Relative();
        $relative->job_id = $request->job_id;
        $relative->candidate_id = $request->candidate_id;
        $relative->name = $request->name;
        $relative->relationship = $request->relationship;
        $relative->age = $request->age;
        $relative->occupation = $request->occupation;
        $relative->company_name = $request->company_name;

        $relative->save();

        return redirect()->route('apply-form-pg2', ['candidate_id' => $request->candidate_id]);

    }

    public function deleteApplyFormPg2(Request $request)
    {
        DB::table('relatives')->where('id',$request->id)->delete();
        Session::flash('status','Successfully deleted');
        return redirect()->route('apply-form-pg2', ['candidate_id' => $request->candidate_id]);
    }

    //page-3--------------------------------------------------------------------------------------------------------

    public function viewApplyFormPg3($candidate_id)
    {
        $educations=DB::table('education')->where('candidate_id','=',$candidate_id)->get();
        // $educations=DB::table('education')->get();
        // dd($request);
        // return redirect()->route('apply-form-pg3', ['candidate_id' => $candidate_id]);
        return view('apply-form.apply-form-3',['candidate_id' => $candidate_id,'educations' => $educations]);

        // return view('apply-form.apply-form-3',['candidate_id' => $request->candidate_id,'educations' => $educations]);
    }

    public function storeApplyFormPg3(Request $request)
    {
        // dd($request);

        $validator=Validator::make($request->all(),[
            'job_id' => 'required',
            'candidate_id' => 'required',
            'edu_institute_name' => 'required',
            'start_year' => 'required',
            'end_year' => 'required',
            'edu_level' => 'required',
            'edu_course_name' => 'required',
        ]);

        if ($validator->fails()) {

            dd($validator);
            return redirect()->route('apply-form-pg3', ['candidate_id' => $request->candidate_id])
                        ->withErrors($validator)
                        ->withInput();
        }

        $validated=$validator->validated();

        $education = new Education();
        $education->job_id = $request->job_id;
        $education->candidate_id = $request->candidate_id;
        $education->edu_institute_name = $request->edu_institute_name;
        $education->start_year = $request->start_year;
        $education->end_year = $request->end_year;
        $education->edu_level = $request->edu_level;
        $education->edu_course_name = $request->edu_course_name;

        $education->save();

        return redirect()->route('apply-form-pg3', ['candidate_id' => $request->candidate_id]);
    }

    public function deleteApplyFormPg3(Request $request)
    {
        DB::table('education')->where('id',$request->id)->delete();
        Session::flash('status','Successfully deleted');
        return redirect()->route('apply-form-pg3', ['candidate_id' => $request->candidate_id]);
    }

    //page-4--------------------------------------------------------------------------------------------------------

    public function viewApplyFormPg4($candidate_id)
    {
        $career_histories=DB::table('career_histories')->where('candidate_id','=',$candidate_id)->get();
        // $educations=DB::table('education')->get();
        // dd($request);
        return view('apply-form.apply-form-4',['candidate_id' => $candidate_id,'career_histories' => $career_histories]);
        // return view('apply-form.apply-form-4',['candidate_id' => $candidate_id]);

        // return view('apply-form.apply-form-3',['candidate_id' => $request->candidate_id,'educations' => $educations]);
    }    

    public function storeApplyFormPg4(Request $request)
    {
        // dd($request);

        $validator=Validator::make($request->all(),[
            'job_id' => 'required',
            'candidate_id' => 'required',
            'employer_name' => 'required',
            'designation' => 'required',
            'start_year' => 'required',
            'end_year' => 'required',
            'final_salary' => 'required',
            'resign_reason' => 'required',
        ]);

        if ($validator->fails()) {

            dd($validator);
            return redirect()->route('apply-form-pg4', ['candidate_id' => $request->candidate_id])
                        ->withErrors($validator)
                        ->withInput();
        }

        $validated=$validator->validated();



        $career_history = new CareerHistory();
        $career_history->job_id = $request->job_id;
        $career_history->candidate_id = $request->candidate_id;
        $career_history->employer_name = $request->employer_name;
        $career_history->designation = $request->designation;
        $career_history->start_year = $request->start_year;
        $career_history->end_year = $request->end_year;
        $career_history->final_salary = $request->final_salary;
        $career_history->resign_reason = $request->resign_reason;

        $career_history->save();

        return redirect()->route('apply-form-pg4', ['candidate_id' => $request->candidate_id]);

    }

    public function deleteApplyFormPg4(Request $request)
    {
        DB::table('career_histories')->where('id',$request->id)->delete();
        Session::flash('status','Successfully deleted');
        return redirect()->route('apply-form-pg4', ['candidate_id' => $request->candidate_id]);
    }

    //page-5--------------------------------------------------------------------------------------------------------

    public function viewApplyFormPg5($candidate_id)
    {

        // return view('apply-form.apply-form-4',['candidate_id' => $candidate_id,'career_histories' => $career_histories]);
        return view('apply-form.apply-form-5',['candidate_id' => $candidate_id]);

        // return view('apply-form.apply-form-3',['candidate_id' => $request->candidate_id,'educations' => $educations]);
    }   

    public function storeApplyFormPg5(Request $request)
    {
        // dd($request);

        $validator=Validator::make($request->all(),[
            'job_id' => 'required',
            'candidate_id' => 'required',
            'current_salary' => 'required',
            'current_allowance' => 'required',
            'latest_bonus_sum' => '',
            'latest_bonus_date' => '',
            'responsible_officer' => 'required',
            'num_staff_under' => 'required',
            'resign_period' => 'required',
        ]);

        if ($validator->fails()) {

            dd($validator);
            return redirect()->route('apply-form-pg5', ['candidate_id' => $request->candidate_id])
                        ->withErrors($validator)
                        ->withInput();
        }

        $validated=$validator->validated();



        $current_career_history = new CurrentCareerHistory();
        $current_career_history->job_id = $request->job_id;
        $current_career_history->candidate_id = $request->candidate_id;
        $current_career_history->current_salary = $request->current_salary;
        $current_career_history->current_allowance = $request->current_allowance;
        $current_career_history->latest_bonus_sum = $request->latest_bonus_sum;
        $current_career_history->latest_bonus_date = $request->latest_bonus_date;
        $current_career_history->responsible_officer = $request->responsible_officer;
        $current_career_history->num_staff_under = $request->num_staff_under;
        $current_career_history->resign_period = $request->resign_period;

        $current_career_history->save();

        return redirect()->route('apply-form-pg6', ['candidate_id' => $request->candidate_id]);

    }

    //page-6--------------------------------------------------------------------------------------------------------

    public function viewApplyFormPg6($candidate_id)
    {

        // return view('apply-form.apply-form-4',['candidate_id' => $candidate_id,'career_histories' => $career_histories]);
        return view('apply-form.apply-form-6',['candidate_id' => $candidate_id]);

        // return view('apply-form.apply-form-3',['candidate_id' => $request->candidate_id,'educations' => $educations]);
    }   

    public function storeApplyFormPg6(Request $request)
    {
        // dd($request);

        $validator=Validator::make($request->all(),[
            'job_id' => 'required',
            'candidate_id' => 'required',
            'bm_status' => 'required',
            'bi_status' => 'required',
            'other_language_name' => '',
            'other_language_status' => '',
            'drug_status' => 'required',
            'drug_description' => '',
            'bankcrupt_status' => 'required',
            'bankcrupt_description' => '',
            'business_status' => 'required',
            'business_description' => '',
            'license_status' => 'required',
            'license_description' => '',
            'smoking_status' => 'required',
            'drinking_status' => 'required',
            'illness_status' => 'required',
            'illness_description' => '',
            'physical_status' => 'required',
            'physical_description' => '',
            'pregnancy_status' => '',
            'pregnancy_description' => '',
        ]);

        if ($validator->fails()) {

            dd($validator);
            return redirect()->route('apply-form-pg6', ['candidate_id' => $request->candidate_id])
                        ->withErrors($validator)
                        ->withInput();
        }

        $validated=$validator->validated();



        $other_information = new OtherInformation();
        $other_information->job_id = $request->job_id;
        $other_information->candidate_id = $request->candidate_id;
        $other_information->bm_status = $request->bm_status;
        $other_information->bi_status = $request->bi_status;
        $other_information->other_language_name = $request->other_language_name;
        $other_information->other_language_status = $request->other_language_status;
        $other_information->drug_status = $request->drug_status;
        $other_information->drug_description = $request->drug_description;
        $other_information->bankcrupt_status = $request->bankcrupt_status;
        $other_information->bankcrupt_description = $request->bankcrupt_description;
        $other_information->business_status = $request->business_status;
        $other_information->business_description = $request->business_description;
        $other_information->license_status = $request->license_status;
        $other_information->license_description = $request->license_description;
        $other_information->smoking_status = $request->smoking_status;
        $other_information->drinking_status = $request->drinking_status;
        $other_information->illness_status = $request->illness_status;
        $other_information->illness_description = $request->illness_description;
        $other_information->physical_status = $request->physical_status;
        $other_information->physical_description = $request->physical_description;
        $other_information->pregnancy_status = $request->pregnancy_status;
        $other_information->pregnancy_description = $request->pregnancy_description;


        $other_information->save();

        return redirect()->route('apply-form-pg7', ['candidate_id' => $request->candidate_id]);

    }

    //page-6--------------------------------------------------------------------------------------------------------

    public function viewApplyFormPg7($candidate_id)
    {
        $hobbies=DB::table('hobbies')->where('candidate_id','=',$candidate_id)->get();
        return view('apply-form.apply-form-7',['candidate_id' => $candidate_id,'hobbies' => $hobbies]);
        // return view('apply-form.apply-form-7',['candidate_id' => $candidate_id]);

        // return view('apply-form.apply-form-3',['candidate_id' => $request->candidate_id,'educations' => $educations]);
    }     
    
    public function storeHobby(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'job_id' => 'required',
            'candidate_id' => 'required',
            'hobby' => 'required',

        ]);

        if ($validator->fails()) {

            dd($validator);
            return redirect()->route('apply-form-pg7', ['candidate_id' => $request->candidate_id])
                        ->withErrors($validator)
                        ->withInput();
        }

        $validated=$validator->validated();



        $hobby = new Hobby();
        $hobby->job_id = $request->job_id;
        $hobby->candidate_id = $request->candidate_id;
        $hobby->hobby = $request->hobby;

        $hobby->save();

        return redirect()->route('apply-form-pg7', ['candidate_id' => $request->candidate_id]);

    }  

    public function deleteHobby(Request $request)
    {
        DB::table('hobbies')->where('id',$request->id)->delete();
        Session::flash('status','Successfully deleted');
        return redirect()->route('apply-form-pg7', ['candidate_id' => $request->candidate_id]);
    }

    public function storeApplyFormPg7(Request $request)
    {

        $candidate = Candidate::find($request->candidate_id);
        $other_information = OtherInformation::where('candidate_id','=',$request->candidate_id)->first();
        // dd($other_information);


        $validator=Validator::make($request->all(),[
            'job_id' => 'required',
            'candidate_id' => 'required',
            'emgcy_contact_name' => 'required',
            'emgcy_contact_relationship' => 'required',
            'emgcy_contact_phone_num' => 'required',
            'ref1_name' => '',
            'ref1_phone_num' => 'required',
            'ref1_company' => '',
            'ref1_designation' => 'required',
            'ref2_name' => '',
            'ref2_phone_num' => 'required',
            'ref2_company' => '',
            'ref2_designation' => 'required',
        ]);

        if ($validator->fails()) {

            dd($validator);
            return redirect()->route('apply-form-pg7', ['candidate_id' => $request->candidate_id])
                        ->withErrors($validator)
                        ->withInput();
        }

        $validated=$validator->validated();



        // $other_information = new OtherInformation();
        $candidate->emgcy_contact_name = $request->emgcy_contact_name;
        $candidate->emgcy_contact_relationship = $request->emgcy_contact_relationship;
        $candidate->emgcy_contact_phone_num = $request->emgcy_contact_phone_num;
        $candidate->save();

        $other_information->ref1_name = $request->ref1_name;
        $other_information->ref1_phone_num = $request->ref1_phone_num;
        $other_information->ref1_company = $request->ref1_company;
        $other_information->ref1_designation = $request->ref1_designation;
        $other_information->ref2_name = $request->ref2_name;
        $other_information->ref2_phone_num = $request->ref2_phone_num;
        $other_information->ref2_company = $request->ref2_company;
        $other_information->ref2_designation = $request->ref2_designation;
        $other_information->save();

        return redirect('/');

    }
}
