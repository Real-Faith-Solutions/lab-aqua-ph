<?php

namespace App\Http\Controllers;

use App\Models\AnalysisRequest;
use App\Models\LabAcceptance;
use App\Models\RawData;
use Illuminate\Http\Request;

class LabApprovalController extends Controller
{
    public function index()
    {
        $requests = AnalysisRequest::orderByDesc('created_at')
        ->paginate(10);
        return view('laboratory.lab_approval.index', compact('requests'));
    }

    public function details($analysis_id)
    {
        $details = AnalysisRequest::find($analysis_id);

        $lab_approval = RawData::find($details->analysis_id);

        return view('laboratory.lab_approval.details', compact('details' , 'lab_approval'));
    }

    public function approval($analysis_id){

        $lab = AnalysisRequest::findOrFail($analysis_id);
        $lab->update(['remarks' => 'Approve']);

        $analysis = AnalysisRequest::findOrFail($analysis_id);
        $analysis->update(['remarks' => 'Approve']);

        return redirect()->back()->with(['message' => 'Approve']);

    }

    public function disapprove($analysis_id){

        $lab = AnalysisRequest::findOrFail($analysis_id);
        $lab->update(['remarks' => 'Disapprove']);

        $analysis = AnalysisRequest::findOrFail($analysis_id);
        $analysis->update(['remarks' => 'Disapprove']);

        return redirect()->back()->with(['message' => 'Disapprove']);

    }

}
