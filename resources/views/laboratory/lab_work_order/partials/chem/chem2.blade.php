<form action="{{ route('laboratory.lab-work-order-form.chem2', ['analysis_id' => $requests->analysis_id]) }}" method="POST">
    @csrf

    <div class="card mb-3 bg-white">
        <h1 class="mb-3">CHEM2 - Nitrate</h1>
        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
            <div class="mb-3">
                <label for="chem2_instrument_reading_1">Instrument Reading 1</label>
                <input id="chem2_instrument_reading_1" type="number" name="chem2_instrument_reading_1" value="{{ old('chem2_instrument_reading_1') }}" required autofocus
                    autocomplete="chem2_instrument_reading_1">
                @error('chem2_instrument_reading_1')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem2_instrument_reading_2">Instrument Reading 2</label>
                <input id="chem2_instrument_reading_2" type="number" name="chem2_instrument_reading_2" value="{{ old('chem2_instrument_reading_2') }}" required
                    autofocus autocomplete="chem2_instrument_reading_2">
                @error('chem2_instrument_reading_2')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem2_instrument_reading_3">Instrument Reading 3</label>
                <input id="chem2_instrument_reading_3" type="number" name="chem2_instrument_reading_3" value="{{ old('chem2_instrument_reading_3') }}" required
                    autofocus autocomplete="chem2_instrument_reading_3">
                @error('chem2_instrument_reading_3')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem2_average_instrument_reading">Average Instrument Reading</label>
                <input id="chem2_average_instrument_reading" type="text" name="chem2_average_instrument_reading" value="{{ old('chem2_average_instrument_reading') }}" required
                    autofocus autocomplete="chem2_average_instrument_reading" readonly>
                @error('chem2_average_instrument_reading')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem2_final_result">Final Result</label>
                <input id="chem2_final_result" type="number" name="chem2_final_result" value="{{ old('chem2_final_result') }}" required
                    autofocus autocomplete="chem2_final_result">
                @error('chem2_final_result')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem2_final_result_remarks">Final Result Remarks</label>
                <input id="chem2_final_result_remarks" type="text" name="chem2_final_result_remarks"
                    value="{{ old('chem2_final_result_remarks') }}" required autofocus autocomplete="chem2_final_result_remarks" readonly>
                @error('chem2_final_result_remarks')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="flex justify-end">
            <button class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
