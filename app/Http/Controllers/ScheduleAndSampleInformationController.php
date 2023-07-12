<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\AnalysisRequest;

class ScheduleAndSampleInformationController extends Controller
{

    public function clientTable(){
        $clients = Client::orderByDesc('updated_at')
        ->paginate(10);

        return view('service.schedule_and_sample_information.client_table', compact('clients'));
    }

    public function profileTable($account_number){
        $analysisRequest = AnalysisRequest::orderByDesc('updated_at')
        ->where('account_number', $account_number)
        ->paginate(10);

        return view('service.schedule_and_sample_information.profile_table', compact('analysisRequest'));
    }
}