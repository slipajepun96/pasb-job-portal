<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Models\Relative;
use App\Models\Education;

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

    public function viewApplyFormPg3(Request $request)
    {
        $educations=DB::table('education')->where('candidate_id','=',$request->candidate_id)->get();
        // $educations=DB::table('education')->get();
        dd($request);

        return view('apply-form.apply-form-3',['candidate_id' => $request->candidate_id,'educations' => $educations]);
    }

    public function storeApplyFormPg3(Request $request)
    {
        // dd($request);

        $validator=Validator::make($request->all(),[
            'job_id' => 'required',
            'candidate_id' => 'required',
            'edu_institute_name' => 'required',
            'start_year' => 'required|numeric|max:4',
            'end_year' => 'required|numeric|max:4',
            'edu_level' => 'required',
            'edu_course_name' => 'required',
        ]);

        if ($validator->fails()) {
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
}
