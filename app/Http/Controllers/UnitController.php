<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unit;
use App\Models\RiskCategory;
use App\Models\SourceRisk;
use App\Models\StandarAcademic;

class UnitController extends Controller
{
    /**
     * createUnit an user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function createUnit(Request $request)
    {
        $name = $request->input('name');

        try {
            $createdUnit = Unit::create([
                'unit_name' => $name,
            ]);

            return response()->json([
                'status' => 200,
                'message' => 'Created successfully',
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
     * deleteUnit an user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    // public function deleteUnit(Request $request)
    public function deleteUnit($deletedId)
    {
        try {
            $unitData = Unit::where('unit_id', '=', $deletedId)->first();

            if($unitData != null) {
                $unitData->delete();
            }

            return response()->json([
                'status' => 200,
                'message' => 'Removed successfully'
            ], 200);
        } catch (\Illuminate\Database\QueryException $exception) {
            return response()->json([
                'status' => 500,
                'message' => 'Something wrong occured while removing the item',
                'exception' => $exception->errorInfo
            ], 500);
        }
    }

    /**
     * createRiskCategory an user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function createRiskCategory(Request $request)
    {
        $name = $request->input('name');

        try {
            $createdRiskCategory = RiskCategory::create([
                'risk_category_name' => $name,
            ]);

            return response()->json([
                'status' => 200,
                'message' => 'Created successfully',
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
     * deleteRiskCategory an user.
     *
     * @param
     * @return \Illuminate\View\View
     */
    public function deleteRiskCategory($deletedId)
    {
        try {
            $riskCategoryData = RiskCategory::where('risk_category_id', '=', $deletedId)->first();

            if($riskCategoryData != null) {
                $riskCategoryData->delete();
            }

            return response()->json([
                'status' => 200,
                'message' => 'Removed successfully'
            ], 200);
        } catch (\Illuminate\Database\QueryException $exception) {
            return response()->json([
                'status' => 500,
                'message' => 'Something wrong occured while removing the item',
                'exception' => $exception->errorInfo
            ], 500);
        }
    }

    /**
     * createSourceofRisk an user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function createSourceofRisk(Request $request)
    {
        $name = $request->input('name');

        try {
            $createdRiskCategory = SourceRisk::create([
                'source_of_risk_name' => $name,
            ]);

            return response()->json([
                'status' => 200,
                'message' => 'Created successfully',
            ], 200);
        } catch (\Illuminate\Database\QueryException $exception) {
            return response()->json([
                'status' => 500,
                'message' => 'Something wrong occured while creating new unit',
                'exception' => $exception->errorInfo
            ], 500);
        }
    }

    /**
     * deleteSourceOfRisk an user.
     *
     * @param
     * @return \Illuminate\View\View
     */
    public function deleteSourceOfRisk($deletedId)
    {
        try {
            $sourceRiskData = SourceRisk::where('source_of_risk_id', '=', $deletedId)->first();

            if($sourceRiskData != null) {
                $sourceRiskData->delete();
            }

            return response()->json([
                'status' => 200,
                'message' => 'Removed successfully'
            ], 200);
        } catch (\Illuminate\Database\QueryException $exception) {
            return response()->json([
                'status' => 500,
                'message' => 'Something wrong occured while removing the item',
                'exception' => $exception->errorInfo
            ], 500);
        }
    }

    /**
     * createStandarAcademic an user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function createStandarAcademic(Request $request)
    {
        $name = $request->input('name');

        try {
            $createdRiskCategory = StandarAcademic::create([
                'standar_academic_name' => $name,
            ]);

            return response()->json([
                'status' => 200,
                'message' => 'Created successfully',
            ], 200);
        } catch (\Illuminate\Database\QueryException $exception) {
            return response()->json([
                'status' => 500,
                'message' => 'Something wrong occured while creating new unit',
                'exception' => $exception->errorInfo
            ], 500);
        }
    }

    /**
     * deleteStandarAcademic an user.
     *
     * @param
     * @return \Illuminate\View\View
     */
    public function deleteStandarAcademic($deletedId)
    {
        try {
            $standarAcademicData = StandarAcademic::where('standar_academic_id', '=', $deletedId)->first();

            if($standarAcademicData != null) {
                $standarAcademicData->delete();
            }

            return response()->json([
                'status' => 200,
                'message' => 'Removed successfully'
            ], 200);
        } catch (\Illuminate\Database\QueryException $exception) {
            return response()->json([
                'status' => 500,
                'message' => 'Something wrong occured while removing the item',
                'exception' => $exception->errorInfo
            ], 500);
        }
    }

    /**
     * getUnit an user.
     *
     * @param
     * @return \Illuminate\View\View
     */
    public function getUnit()
    {
        try {
            $units = Unit::all();

            return response()->json([
                'status' => 200,
                'message' => 'Get All Unit Successfully',
                'data' => $units
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
     * getAdminUnit an user.
     *
     * @param
     * @return \Illuminate\View\View
     */
    public function getAdminUnit()
    {
        try {
            $units = Unit::all();
            $riskCategories = RiskCategory::all();
            $sourceRisks = SourceRisk::all();
            $standarAcademics = StandarAcademic::all();

            return response()->json([
                'status' => 200,
                'message' => 'Get All Unit Successfully',
                'data' => [
                    'units' => $units,
                    'riskCategories' => $riskCategories,
                    'sourceOfRisks' => $sourceRisks,
                    'standarAcademics' => $standarAcademics,
                ]
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
