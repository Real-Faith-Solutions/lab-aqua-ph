<form action="{{ route('laboratory.lab-work-order-form.phys2', ['analysis_id' => $requests->analysis_id]) }}" method="POST">
    @csrf

    <div class="card mb-3 bg-white">
        <h1 class="mb-3">PHYS2 - Odor</h1>
        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
            <div class="mb-3">
                <label for="phys2_observation">Observation</label>
                <select id="phys2_observation" type="number" name="phys2_observation" required autofocus autocomplete="phys2_observation" onchange="phy2()">
                    <option value="No without objectionable color">No objectionable color</option>
                    <option value="With objectionable color">With objectionable color</option>
                </select>
                @error('phys2_observation')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="phys2_final_result">Final Result</label>
                <input id="phys2_final_result" type="text" name="phys2_final_result" value="{{ $rawDataFileValue->phys1_observation }}" required autofocus autocomplete="phys2_final_result" readonly>
                @error('phys2_final_result')
                    <span class="invalid" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="phys2_final_result_remarks">Final Result Remarks</label>
                <input id="phys2_final_result_remarks" type="text" name="phys2_final_result_remarks" value="{{ $rawDataFileValue->phys1_observation }}" required autofocus autocomplete="phys2_final_result_remarks" readonly>
                @error('phys2_final_result_remarks')
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
