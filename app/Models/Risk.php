<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Risk extends Model
{
    // use HasFactory;
    protected $table = 'risks';

    protected $guarded = []; // YOLO

    // protected $fillable = [
    //     'id',
    //     'date_raised',
    //     'raised_by',
    //     'risk_objective',
    //     'risk_event',
    //     'standar',
    //     'risk_category',
    //     'cause',
    //     'source_of_risk',
    //     'consequence',
    //     'risk_owner',
    //     'unit_terkait_penyebab_resiko',
    //     'risk_inherrent_likelihood',
    //     'risk_inherrent_impact',
    //     'risk_treatment_action',
    //     'risk_treatment_plan',
    //     'risk_treatment_resolve_by',
    //     'residual_risk_likelihood',
    //     'residual_risk_impact',
    //     'risk_mitigation_opsi_risiko',
    //     'risk_mitigation_deskripsi_tindakan_mitigasi',
    //     'risk_after_mitigation_likelihood',
    //     'risk_after_mitigation_impact',
    //     'risk_monitoring_method',
    //     'risk_monitoring_progress',
    //     'risk_monitoring_status'
    // ];

}
