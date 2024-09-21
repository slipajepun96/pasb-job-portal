<?php

namespace App\Http\Controllers;
use App\Models\Candidate;
use App\Models\Relative;
use App\Models\Education;
use App\Models\Job;
use App\Models\Hobby;
use App\Models\CareerHistory;
use App\Models\OtherInformation;
use App\Models\CurrentCareerHistory;
use Spatie\LaravelPdf\Facades\Pdf;
// use Illuminate\Http\Request;
use function Spatie\LaravelPdf\Support\pdf;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $candidate_data=Candidate::where('form_submitted_date','!=','')->where('job_id','!=','')->get();
        $jobs=Job::all();

        return view('dashboard',['candidate_data' => $candidate_data,'jobs' => $jobs]);
    }

    public function indexWithSelection(Request $request)
    {
        $candidate_data=Candidate::where('job_id','=',$request->job_id)->where('form_submitted_date','!=','')->where('job_id','!=','')->get();
        $jobs=Job::all();


        return view('dashboard',['candidate_data' => $candidate_data,'jobs' => $jobs]);
    }

    public function main()
    {
        $today=date("m/d/Y");
        $jobs=Job::where('end_date','>=',$today)->where('start_date','<=',$today)->get();


        return view('index',['jobs' => $jobs]);
    }

    public function getAttachment(Request $request)
    {
        // dd($request);
        // return Storage::download($request->attachment_location);
        $url = '/storage/'.$request->attachment_location;
        dd($url);
        return redirect($url);
    }

    public function getFormPDF(Request $request)
    {
        $candidate_data = Candidate::where('id','=',$request->id)->firstOrFail();
        $job_data = Job::where('id','=',$candidate_data->job_id)->firstOrFail();
        $relative_data = Relative::where('candidate_id','=',$request->id)->get();
        $education_data = Education::where('candidate_id','=',$request->id)->orderBy('start_year', 'ASC')->get();
        $career_history_data = CareerHistory::where('candidate_id','=',$request->id)->orderBy('start_year', 'ASC')->orderBy('end_year', 'DESC')->get();
        $current_career_history_data = CurrentCareerHistory::where('candidate_id','=',$request->id)->firstOrFail();
        $other_information_data = OtherInformation::where('candidate_id','=',$request->id)->firstOrFail();
        $hobbies_data = Hobby::where('candidate_id','=',$request->id)->get();
        // dd($candidate_data->job_id);
        $data[0] = $candidate_data;
        $data[1] = $relative_data;
        $data[2] = $education_data;
        $data[3] = $career_history_data;
        $data[4] = $current_career_history_data;
        $data[5] = $other_information_data;
        $data[6] = $hobbies_data;
        $data[7] = $job_data->job_ads_title;
    // {->margins($top, $right, $bottom, $left)
        return pdf()->view('pdf.apply_form_pdf', compact('data'))->margins(10, 10, 10, 10)->name('invoice-2023-04-10.pdf');
    }
    // public function getFormView(Request $request)
    // {
    //     $candidate_data = Candidate::where('id','=',$request->id)->firstOrFail();
    //     $relative_data = Relative::where('candidate_id','=',$request->id)->get();
    //     dd($relative_data);
    //     $data[0] = $candidate_data;
    //     $data[1] = $relative_data;
    // // {->margins($top, $right, $bottom, $left)
    //     return view('pdf.apply_form_pdf', compact('data'));
    // }
}
