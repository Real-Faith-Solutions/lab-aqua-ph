@extends('layouts.app')
@section('title', 'Lab Result All Details')
@section('content')

<div class="grid grid-cols-5">

    <div class="p-4 col-span-1">
        <button class="btn btn-secondary" onclick="categoryClientInformation()">Client Information</button>
        <button class="btn btn-secondary" onclick="categoryAnalysisRequest()">Analysis Request</button>
    </div>
    <div class="p-4 col-span-4">
        <div id="categoryClientInformation">
            @include('record_and_report.lab_result.partials.client')
        </div>

    </div>

</div>


@endsection
