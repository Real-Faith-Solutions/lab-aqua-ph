<form action="{{ route('laboratory.lab-work-order-form.chem7', ['analysis_id' => $requests->analysis_id]) }}" method="POST">
    @csrf

    <div class="card mb-3 bg-white">
        <h1 class="mb-3">CHEM7 - Lead</h1>
        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
            <div class="mb-3">
                <label for="chem7_instrument_reading_1">Instrument Reading 1</label>
                <input id="chem7_instrument_reading_1" type="number" name="chem7_instrument_reading_1" value="{{ $rawDataFileValue->chem7_instrument_reading_1 }}" required autofocus autocomplete="chem7_instrument_reading_1" onclick="chem7()">
                @error('chem7_instrument_reading_1')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem7_instrument_reading_2">Instrument Reading 2</label>
                <input id="chem7_instrument_reading_2" type="number" name="chem7_instrument_reading_2" value="{{ $rawDataFileValue->chem7_instrument_reading_2 }}" required autofocus autocomplete="chem7_instrument_reading_2" onclick="chem7()">
                @error('chem7_instrument_reading_2')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem7_instrument_reading_3">Instrument Reading 3</label>
                <input id="chem7_instrument_reading_3" type="number" name="chem7_instrument_reading_3" value="{{ $rawDataFileValue->chem7_instrument_reading_3 }}" required autofocus autocomplete="chem7_instrument_reading_3" onclick="chem7()">
                @error('chem7_instrument_reading_3')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem7_average_instrument_reading">Average Instrument Reading</label>
                <input id="chem7_average_instrument_reading" type="text" name="chem7_average_instrument_reading" value="{{ $rawDataFileValue->chem7_average_instrument_reading }}" required autofocus autocomplete="chem7_average_instrument_reading" readonly>
                @error('chem7_average_instrument_reading')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem7_final_result">Final Result</label>
                <input id="chem7_final_result" type="number" name="chem7_final_result" value="{{ $rawDataFileValue->chem7_final_result }}" required autofocus autocomplete="chem7_final_result" onclick="chem7()">
                @error('chem7_final_result')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem7_final_result_remarks">Final Result Remarks</label>
                <input id="chem7_final_result_remarks" type="text" name="chem7_final_result_remarks" value="{{ $rawDataFileValue->chem7_final_result_remarks }}" required autofocus autocomplete="chem7_final_result_remarks" readonly>
                @error('chem7_final_result_remarks')
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
