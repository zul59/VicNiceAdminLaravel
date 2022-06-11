<table>
    <thead>
        <tr>
            <td rowspan="2">Unit</td>
            <td colspan="12">Risk Identification</td>
            <td colspan="4">Risk Inherrent</td>
            <td colspan="3">Risk Treatment</td>
            <td colspan="4">Residual Risk</td>
            <td colspan="2">Risk Mitigation</td>
            <td colspan="4">Risk After Mitigation</td>
            <td colspan="3">Risk Monitoring and Review</td>
        </tr>
        <tr>
            <td>Risk ID</td>
            <td>Date Raised</td>
            <td>Raised By</td>
            <td>Risk Objective/KPI</td>
            <td>Risk Event</td>
            <td>Standar</td>
            <td>Risk Category</td>
            <td>Cause</td>
            <td>Source of Risk</td>
            <td>Consequence</td>
            <td>Risk Owner</td>
            <td>Unit Terkait Penyebab Resiko</td>
            <td>Likelihood</td>
            <td>Impact</td>
            <td>Risk Rating</td>
            <td>Risk Matrix</td>
            <td>Action</td>
            <td>Plan</td>
            <td>Resolve By</td>
            <td>Likelihood</td>
            <td>Impact</td>
            <td>Risk Rating</td>
            <td>Risk Matrix</td>
            <td>Opsi Perlakuan Risiko</td>
            <td>Deskripsi Tindakan Mitigasi</td>
            <td>Likelihood</td>
            <td>Impact</td>
            <td>Risk Rating</td>
            <td>Risk Matrix</td>
            <td>Method</td>
            <td>Progress and Compliance Reporting</td>
            <td>Status</td>
        </tr>
    </thead>
    <tbody>
    @foreach($risks as $risk)
        <tr>
            <td>{{ $risk->unit_name}}</td>
            <td>{{ $risk->risk_id }}</td>
            <td>{{ $risk->date_raised }}</td>
            <td>{{ $risk->raised_by }}</td>
            <td>{{ $risk->risk_objective }}</td>
            <td>{{ $risk->risk_event }}</td>
            <td>{{ $risk->standar }}</td>
            <td>{{ $risk->risk_category }}</td>
            <td>{{ $risk->cause }}</td>
            <td>{{ $risk->source_of_risk }}</td>
            <td>{{ $risk->consequence }}</td>
            <td>{{ $risk->risk_owner }}</td>
            <td>{{ $risk->unit_terkait_penyebab_resiko }}</td>

            <td>{{ $risk->risk_inherrent_likelihood }}</td>
            <td>{{ $risk->risk_inherrent_impact }}</td>
            @php
                $inherrentRating = ($risk->risk_inherrent_likelihood == "" ? 0 : $risk->risk_inherrent_likelihood) * ($risk->risk_inherrent_impact == "" ? 0 : $risk->risk_inherrent_impact);
                $inherrentMatrix = "";
                $inherrentTxtColor = "";
                $inherrentBgColor = "";
                if ($inherrentRating <= 2) {
                    $inherrentMatrix = "Rare";
                    $inherrentTxtColor = "#ffffff";
                    $inherrentBgColor = "#2b6419";
                }
                else if ($inherrentRating <= 4) {
                    $inherrentMatrix = "Unlikely";
                    $inherrentTxtColor = "#ffffff";
                    $inherrentBgColor = "#a0ce63";
                }
                else if ($inherrentRating <= 10) {
                    $inherrentMatrix = "Medium";
                    $inherrentTxtColor = "#000000";
                    $inherrentBgColor = "#ffff55";
                }
                else if ($inherrentRating <= 15) {
                    $inherrentMatrix = "High";
                    $inherrentTxtColor = "#ffffff";
                    $inherrentBgColor = "#ee752f";
                }
                else {
                    $inherrentMatrix = "Very High";
                    $inherrentTxtColor = "#ffffff";
                    $inherrentBgColor = "#ea3524";
                }
            @endphp
            <td>{{ $inherrentRating }}</td>
            <td>{{ $risk->inherrentRating }}</td>

            <td>{{ $risk->risk_treatment_action }}</td>
            <td>{{ $risk->risk_treatment_plan }}</td>
            <td>{{ $risk->risk_treatment_resolve_by }}</td>

            <td>{{ $risk->residual_risk_likelihood }}</td>
            <td>{{ $risk->residual_risk_impact }}</td>
            @php
                $residualRating = ($risk->residual_risk_likelihood == "" ? 0 : $risk->residual_risk_likelihood) * ($risk->residual_risk_impact == "" ? 0 : $risk->residual_risk_impact);
                $residualMatrix = "";
                $residualTxtColor = "";
                $residualBgColor = "";
                if ($residualRating <= 2) {
                    $residualMatrix = "Rare";
                    $residualTxtColor = "#ffffff";
                    $residualBgColor = "#2b6419";
                }
                else if ($residualRating <= 4) {
                    $residualMatrix = "Unlikely";
                    $residualTxtColor = "#ffffff";
                    $residualBgColor = "#a0ce63";
                }
                else if ($residualRating <= 10) {
                    $residualMatrix = "Medium";
                    $residualTxtColor = "#000000";
                    $residualBgColor = "#ffff55";
                }
                else if ($residualRating <= 15) {
                    $residualMatrix = "High";
                    $residualTxtColor = "#ffffff";
                    $residualBgColor = "#ee752f";
                }
                else {
                    $residualMatrix = "Very High";
                    $residualTxtColor = "#ffffff";
                    $residualBgColor = "#ea3524";
                }
            @endphp
            <td>{{ $residualRating }}</td>
            <td>{{ $residualMatrix }}</td>

            <td>{{ $risk->risk_mitigation_opsi_risiko }}</td>
            <td>{{ $risk->risk_mitigation_deskripsi_tindakan_mitigasi }}</td>

            <td>{{ $risk->risk_after_mitigation_likelihood }}</td>
            <td>{{ $risk->risk_after_mitigation_impact }}</td>
            @php
                $afterMitigationRating = ($risk->risk_after_mitigation_likelihood == "" ? 0 : $risk->risk_after_mitigation_likelihood) * ($risk->risk_after_mitigation_impact == "" ? 0 : $risk->risk_after_mitigation_impact);
                $afterMitigationMatrix = "";
                $afterMitigationTxtColor = "";
                $afterMitigationBgColor = "";
                if ($afterMitigationRating <= 2) {
                    $afterMitigationMatrix = "Rare";
                    $afterMitigationTxtColor = "#ffffff";
                    $afterMitigationBgColor = "#2b6419";
                }
                else if ($afterMitigationRating <= 4) {
                    $afterMitigationMatrix = "Unlikely";
                    $afterMitigationTxtColor = "#ffffff";
                    $afterMitigationBgColor = "#a0ce63";
                }
                else if ($afterMitigationRating <= 10) {
                    $afterMitigationMatrix = "Medium";
                    $afterMitigationTxtColor = "#000000";
                    $afterMitigationBgColor = "#ffff55";
                }
                else if ($afterMitigationRating <= 15) {
                    $afterMitigationMatrix = "High";
                    $afterMitigationTxtColor = "#ffffff";
                    $afterMitigationBgColor = "#ee752f";
                }
                else {
                    $afterMitigationMatrix = "Very High";
                    $afterMitigationTxtColor = "#ffffff";
                    $afterMitigationBgColor = "#ea3524";
                }
            @endphp
            <td>{{ $afterMitigationRating }}</td>
            <td>{{ $afterMitigationMatrix }}</td>

            <td>{{ $risk->risk_monitoring_method }}</td>
            <td>{{ $risk->risk_monitoring_progress }}</td>
            <td>{{ $risk->risk_monitoring_status }}</td>
        </tr>
    @endforeach
    </tbody>
</table>