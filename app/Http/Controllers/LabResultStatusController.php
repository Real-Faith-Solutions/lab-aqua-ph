<?php

namespace App\Http\Controllers;

use App\Models\AnalysisRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class LabResultStatusController extends Controller
{
    public function index(){
        $datas = AnalysisRequest::orderByDesc('created_at')
        ->orWhere('remarks', 'Pending')
        ->orWhere('remarks', 'Rejected')
        ->paginate(10);
        return view ('service.lab_result_status.index', compact('datas'));
    }

    public function table(){
        $clients = Client::orderByDesc('updated_at')
        ->paginate(10);
        return view('record_and_report.lab_result.index', compact('clients'));
    }

    public function details($account_number){
        $clients = Client::find($account_number);

        return view('record_and_report.lab_result.details', compact('clients'));
    }

}