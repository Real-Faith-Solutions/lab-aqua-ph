<form action="route('laboratory.lab-work-order-form.chem5', ['analysis_id' => $acceptance->analysis_id])" method="POST">
    @csrf
    <input id="analysis_id" type="hidden" name="analysis_id" value="{{ $requests->analysis_id }}" required autofocus autocomplete="analysis_id" readonly>

    <div class="card mb-3 bg-white">
        <h1 class="mb-3">CHEM5 - Arsenic</h1>
        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
            <div class="mb-3">
                <label for="chem5_instrument_reading_1">Instrument Reading 1</label>
                <input id="chem5_instrument_reading_1" type="number" name="chem5_instrument_reading_1" value="{{ old('chem5_instrument_reading_1') }}" required autofocus
                    autocomplete="chem5_instrument_reading_1">
                @error('chem5_instrument_reading_1')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem5_instrument_reading_2">Instrument Reading 2</label>
                <input id="chem5_instrument_reading_2" type="number" name="chem5_instrument_reading_2" value="{{ old('chem5_instrument_reading_2') }}" required
                    autofocus autocomplete="chem5_instrument_reading_2">
                @error('chem5_instrument_reading_2')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem5_instrument_reading_3">Instrument Reading 3</label>
                <input id="chem5_instrument_reading_3" type="number" name="chem5_instrument_reading_3" value="{{ old('chem5_instrument_reading_3') }}" required
                    autofocus autocomplete="chem5_instrument_reading_3">
                @error('chem5_instrument_reading_3')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem5_average_instrument_reading">Average Instrument Reading</label>
                <input id="chem5_average_instrument_reading" type="text" name="chem5_average_instrument_reading" value="{{ old('chem5_average_instrument_reading') }}" required
                    autofocus autocomplete="chem5_average_instrument_reading" readonly>
                @error('chem5_average_instrument_reading')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem5_final_result">Final Result</label>
                <input id="chem5_final_result" type="number" name="chem5_final_result" value="{{ old('chem5_final_result') }}" required
                    autofocus autocomplete="chem5_final_result">
                @error('chem5_final_result')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="chem5_final_result_remarks">Final Result Remarks</label>
                <input id="chem5_final_result_remarks" type="text" name="chem5_final_result_remarks"
                    value="{{ old('chem5_final_result_remarks') }}" required autofocus autocomplete="chem5_final_result_remarks" readonly>
                @error('chem5_final_result_remarks')
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
