<?php

namespace App\Http\Controllers;
use App\Models\Job;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class JobController extends Controller
{
    public function index()
    {
        $jobs=Job::all();
        // dd($candidate);

        return view('jobs.index',['jobs' => $jobs]);
    }

    public function viewAddForm()
    {
        // $jobs=Job::all();
        // dd($candidate);

        return view('jobs.add');
    }

    public function storeAddForm(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'job_ads_title' => 'required',
            'job_location' => 'required',
            'job_description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'ads_link' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect('/jobs/add')
                        ->withErrors($validator)
                        ->withInput();
        }

        $validated=$validator->validated();

        // dd($validated[1]);
        
        $job = new Job();
        $job->job_ads_title = $request->job_ads_title;
        $job->job_location = $request->job_location;
        $job->job_description = $request->job_description;
        $job->start_date = $request->start_date;
        $job->end_date = $request->end_date;
        $job->ads_link = $request->ads_link;

        $job->save();

        // dd($candidate->id);
        return redirect()->route('index-jobs');
    }
}

