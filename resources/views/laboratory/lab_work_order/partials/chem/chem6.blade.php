<form action="{{ route('laboratory.lab-work-order-form.chem6', ['analysis_id' => $requests->analysis_id]) }}" method="POST">
    @csrf

    <div class="card mb-3 bg-white">
        <h1 class="mb-3">CHEM6 - Cadmium</h1>
        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
            <div class="mb-3">
                <label for="chem6_instrument_reading_1">Instrument Reading 1</label>
                <input id="chem6_instrument_reading_1" type="number" name="chem6_instrument_reading_1" value="{{ $rawDataFileValue->chem6_instrument_reading_1 }}" required autofocus autocomplete="chem6_instrument_reading_1" onchange="chem6()">
                @error('chem6_instrument_reading_1')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem6_instrument_reading_2">Instrument Reading 2</label>
                <input id="chem6_instrument_reading_2" type="number" name="chem6_instrument_reading_2" value="{{ $rawDataFileValue->chem6_instrument_reading_2 }}" required autofocus autocomplete="chem6_instrument_reading_2" onchange="chem6()">
                @error('chem6_instrument_reading_2')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem6_instrument_reading_3">Instrument Reading 3</label>
                <input id="chem6_instrument_reading_3" type="number" name="chem6_instrument_reading_3" value="{{ $rawDataFileValue->chem6_instrument_reading_3 }}" required autofocus autocomplete="chem6_instrument_reading_3" onchange="chem6()">
                @error('chem6_instrument_reading_3')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem6_average_instrument_reading">Average Instrument Reading</label>
                <input id="chem6_average_instrument_reading" type="text" name="chem6_average_instrument_reading" value="{{ $rawDataFileValue->chem6_average_instrument_reading }}" required autofocus autocomplete="chem6_average_instrument_reading" readonly>
                @error('chem6_average_instrument_reading')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem6_final_result">Final Result</label>
                <input id="chem6_final_result" type="number" name="chem6_final_result" value="{{ $rawDataFileValue->chem6_final_result }}" required autofocus autocomplete="chem6_final_result" onchange="chem6()">
                @error('chem6_final_result')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem6_final_result_remarks">Final Result Remarks</label>
                <input id="chem6_final_result_remarks" type="text" name="chem6_final_result_remarks" value="{{ $rawDataFileValue->chem6_final_result_remarks }}" required autofocus autocomplete="chem6_final_result_remarks" readonly>
                @error('chem6_final_result_remarks')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="flex justify-end gap-2">
            <button class="btn btn-primary" name="remarks" value="Testing on-going">Save</button>
            <button class="btn btn-primary" name="remarks" value="For approval">Save and Exit</button>
            <button class="btn btn-primary" name="remarks" value="For releasing">Save and Submit</button>
        </div>

    </div>
</form>
