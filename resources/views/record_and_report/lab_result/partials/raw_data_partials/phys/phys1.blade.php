    <div class="card mb-3 bg-white">
        <h1 class="mb-3">PHYS1 - Appearance</h1>
        <div class="sm:gid-cols-1 grid gap-4 lg:grid-cols-2">
            <div class="mb-3">
                <label for="phys1_observation">Observation</label>
                <select id="phys1_observation" type="number" name="phys1_observation" required autofocus autocomplete="phys1_observation">
                    <option value="Color without objectionable color">Color without objectionable color</option>
                    <option value="Not clear and with objectionable color">Not clear and with objectionable color</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="phys1_final_result">Final Result</label>
                <input id="phys1_final_result" type="text" name="phys1_final_result" value="{{ $rawData->phys1_final_result }}" required autofocus autocomplete="phys1_final_result" readonly>
            </div>

            <div class="mb-3">
                <label for="phys1_final_result_remarks">Final Result Remarks</label>
                <input id="phys1_final_result_remarks" type="text" name="phys1_final_result_remarks" value="{{ $rawData->phys1_final_result_remarks }}" required autofocus autocomplete="phys1_final_result_remarks" readonly>
            </div>
        </div>
    </div>
