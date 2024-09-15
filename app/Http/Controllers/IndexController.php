<?php

namespace App\Http\Controllers;
use App\Models\Candidate;
use App\Models\Job;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $candidate_data=Candidate::all();
        $jobs=Job::all();
        // dd($candidate_data->jobs->job_ads_title);

        return view('dashboard',['candidate_data' => $candidate_data,'jobs' => $jobs]);
    }
    public function main()
    {
        $today=date("m/d/Y");
        $jobs=Job::where('end_date','>=',$today)->where('start_date','<=',$today)->get();


        return view('index',['jobs' => $jobs]);
    }

    public function getAttachment($attachment_location)
    {
        return Storage::download(storage_path('$attachment_location'));
    }
}
