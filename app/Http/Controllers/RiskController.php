<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\RiskExport;
use App\Models\Risk;
use App\Models\User;

class RiskController extends Controller
{
    /**
     * all an user.
     *
     * @param
     * @return \Illuminate\View\View
     */
    public function all()
    {
        try {
            $risks = Risk::all();

            return response()->json([
                'status' => 200,
                'message' => 'Risk get successfully',
                'data' => $risks
            ], 200);
        } catch (\Illuminate\Database\QueryException $exception) {
            return response()->json([
                'status' => 500,
                'message' => 'Something wrong occured while getting all data',
                'exception' => $exception->errorInfo
            ], 500);
        }
    }

    /**
     * all an user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function export(Request $request)
    {
        $unitName = $request->query('unitName');

        // dd($unitName);
        $risks = [];
        if($unitName == 'All') {
            $risks = Risk::all();
        } else {
            $risks = Risk::where('unit_name', '=', $unitName)->get();
        }
        // dd($risks);
        $export = new RiskExport($risks);

        return Excel::download($export, 'risks.xlsx');
    }

    /**
     * getOne an user.
     *
     * @param
     * @return \Illuminate\View\View
     */
    public function getOne($riskId)
    {
        try {
            $riskData = Risk::where('risk_id', '=', $riskId)->first();

            return response()->json([
                'status' => 200,
                'message' => 'Risk get successfully',
                'data' => $riskData
            ], 200);
        } catch (\Illuminate\Database\QueryException $exception) {
            return response()->json([
                'status' => 500,
                'message' => 'Something wrong occured while getting all data',
                'exception' => $exception->errorInfo
            ], 500);
        }
    }

    /**
     * create an user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        $riskId = $request->input('riskId');
        $dateRaised = $request->input('dateRaised');
        $raisedBy = $request->input('raisedBy');
        $riskObjective = $request->input('riskObjective');
        $riskEvent = $request->input('riskEvent');
        $standar = $request->input('standar');
        $riskCategory = $request->input('riskCategory');
        $cause = $request->input('cause');
        $sourceOfRisk = $request->input('sourceOfRisk');
        $consequence = $request->input('consequence');
        $riskOwner = $request->input('riskOwner');
        $unitTerkaitPenyebabResiko = $request->input('unitTerkaitPenyebabResiko');
        $riskInherrentLikelihood = $request->input('riskInherrentLikelihood');
        $riskInherrentImpact = $request->input('riskInherrentImpact');
        $unitName = $request->input('unitName');
        $riskTreatmentAction = $request->input('riskTreatmentAction');
        $riskTreatmentPlan = $request->input('riskTreatmentPlan');
        $riskTreatmentResolveBy = $request->input('riskTreatmentResolveBy');
        $residualRiskLikelihood = $request->input('residualRiskLikelihood');
        $residualRiskImpact = $request->input('residualRiskImpact');
        $riskMitigationOpsiRisiko = $request->input('riskMitigationOpsiRisiko');
        $riskMitigationDeskripsiTindakanMitigasi = $request->input('riskMitigationDeskripsiTindakanMitigasi');
        $riskAfterMitigationLikelihood = $request->input('riskAfterMitigationLikelihood');
        $riskAfterMitigationImpact = $request->input('riskAfterMitigationImpact');
        $riskMonitoringMethod = $request->input('riskMonitoringMethod');
        $riskMonitoringProgress = $request->input('riskMonitoringProgress');
        $riskMonitoringStatus = $request->input('riskMonitoringStatus');

        try {
            $insertedRisk = Risk::create([
                'risk_id' => $riskId,
                'date_raised' => $dateRaised,
                'raised_by' => $raisedBy,
                'risk_objective' => $riskObjective,
                'risk_event' => $riskEvent,
                'standar' => $standar,
                'risk_category' => $riskCategory,
                'cause' => $cause,
                'source_of_risk' => $sourceOfRisk,
                'consequence' => $consequence,
                'unit_terkait_penyebab_resiko' => $unitTerkaitPenyebabResiko,
                'risk_inherrent_likelihood' => $riskInherrentLikelihood,
                'risk_inherrent_impact' => $riskInherrentImpact,
                'unit_name' => $unitName,
                'risk_owner' => $riskOwner,
                'risk_treatment_action' => $riskTreatmentAction,
                'risk_treatment_plan' => $riskTreatmentPlan,
                'risk_treatment_resolve_by' => $riskTreatmentResolveBy,
                'residual_risk_likelihood' => $residualRiskLikelihood,
                'residual_risk_impact' => $residualRiskImpact,
                'risk_mitigation_opsi_risiko' => $riskMitigationOpsiRisiko,
                'risk_mitigation_deskripsi_tindakan_mitigasi' => $riskMitigationDeskripsiTindakanMitigasi,
                'risk_after_mitigation_likelihood' => $riskAfterMitigationLikelihood,
                'risk_after_mitigation_impact' => $riskAfterMitigationImpact,
                'risk_monitoring_method' => $riskMonitoringMethod,
                'risk_monitoring_progress' => $riskMonitoringProgress,
                'risk_monitoring_status' => $riskMonitoringStatus,
            ]);

            return response()->json([
                'status' => 200,
                'message' => 'Risk submitted successfully',
            ], 200);
        } catch (\Illuminate\Database\QueryException $exception) {
            return response()->json([
                'status' => 500,
                'message' => 'Something wrong occured while submitting new risk',
                'exception' => $exception->errorInfo
            ], 500);
        }
    }

    /**
     * update an user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function update(Request $request)
    {
        $riskId = $request->input('riskId');
        $dateRaised = $request->input('dateRaised');
        $raisedBy = $request->input('raisedBy');
        $riskObjective = $request->input('riskObjective');
        $riskEvent = $request->input('riskEvent');
        $standar = $request->input('standar');
        $riskCategory = $request->input('riskCategory');
        $cause = $request->input('cause');
        $sourceOfRisk = $request->input('sourceOfRisk');
        $consequence = $request->input('consequence');
        $riskOwner = $request->input('riskOwner');
        $unitTerkaitPenyebabResiko = $request->input('unitTerkaitPenyebabResiko');
        $riskInherrentLikelihood = $request->input('riskInherrentLikelihood');
        $riskInherrentImpact = $request->input('riskInherrentImpact');
        $unitName = $request->input('unitName');
        $riskTreatmentAction = $request->input('riskTreatmentAction');
        $riskTreatmentPlan = $request->input('riskTreatmentPlan');
        $riskTreatmentResolveBy = $request->input('riskTreatmentResolveBy');
        $residualRiskLikelihood = $request->input('residualRiskLikelihood');
        $residualRiskImpact = $request->input('residualRiskImpact');
        $riskMitigationOpsiRisiko = $request->input('riskMitigationOpsiRisiko');
        $riskMitigationDeskripsiTindakanMitigasi = $request->input('riskMitigationDeskripsiTindakanMitigasi');
        $riskAfterMitigationLikelihood = $request->input('riskAfterMitigationLikelihood');
        $riskAfterMitigationImpact = $request->input('riskAfterMitigationImpact');
        $riskMonitoringMethod = $request->input('riskMonitoringMethod');
        $riskMonitoringProgress = $request->input('riskMonitoringProgress');
        $riskMonitoringStatus = $request->input('riskMonitoringStatus');

        try {
            Risk::where('risk_id', '=', $riskId)
                ->update([
                    'date_raised' => $dateRaised,
                    'raised_by' => $raisedBy,
                    'risk_objective' => $riskObjective,
                    'risk_event' => $riskEvent,
                    'standar' => $standar,
                    'risk_category' => $riskCategory,
                    'cause' => $cause,
                    'source_of_risk' => $sourceOfRisk,
                    'consequence' => $consequence,
                    'unit_terkait_penyebab_resiko' => $unitTerkaitPenyebabResiko,
                    'risk_inherrent_likelihood' => $riskInherrentLikelihood,
                    'risk_inherrent_impact' => $riskInherrentImpact,
                    'unit_name' => $unitName,
                    'risk_treatment_action' => $riskTreatmentAction,
                    'risk_treatment_plan' => $riskTreatmentPlan,
                    'risk_treatment_resolve_by' => $riskTreatmentResolveBy,
                    'residual_risk_likelihood' => $residualRiskLikelihood,
                    'residual_risk_impact' => $residualRiskImpact,
                    'risk_mitigation_opsi_risiko' => $riskMitigationOpsiRisiko,
                    'risk_mitigation_deskripsi_tindakan_mitigasi' => $riskMitigationDeskripsiTindakanMitigasi,
                    'risk_after_mitigation_likelihood' => $riskAfterMitigationLikelihood,
                    'risk_after_mitigation_impact' => $riskAfterMitigationImpact,
                    'risk_monitoring_method' => $riskMonitoringMethod,
                    'risk_monitoring_progress' => $riskMonitoringProgress,
                    'risk_monitoring_status' => $riskMonitoringStatus,
                ]);

            return response()->json([
                'status' => 200,
                'message' => 'Risk updated successfully',
            ], 200);
        } catch (\Illuminate\Database\QueryException $exception) {
            return response()->json([
                'status' => 500,
                'message' => 'Something wrong occured while updating existing risk',
                'exception' => $exception->errorInfo
            ], 500);
        }
    }

    /**
     * remove an user.
     *
     * @param
     * @return \Illuminate\View\View
     */
    public function remove($riskId)
    {
        try {
            $riskData = Risk::where('risk_id', '=', $riskId)->first();

            if($riskData != null) {
                $riskData->delete();
            }

            return response()->json([
                'status' => 200,
                'message' => 'Risk removed successfully'
            ], 200);
        } catch (\Illuminate\Database\QueryException $exception) {
            return response()->json([
                'status' => 500,
                'message' => 'Something wrong occured while getting all data',
                'exception' => $exception->errorInfo
            ], 500);
        }
    }
}