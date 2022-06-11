<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRisksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('risks', function (Blueprint $table) {
            $table->id();
            $table->integer('risk_id');
            $table->string('date_raised');
            $table->string('raised_by');
            $table->string('risk_objective');
            $table->string('risk_event');
            $table->string('standar');
            $table->string('risk_category');
            $table->string('cause');
            $table->string('source_of_risk');
            $table->string('consequence');
            $table->string('risk_owner');
            $table->string('unit_name');
            $table->string('unit_terkait_penyebab_resiko');
            $table->integer('risk_inherrent_likelihood');
            $table->integer('risk_inherrent_impact');
            $table->string('risk_treatment_action');
            $table->string('risk_treatment_plan');
            $table->string('risk_treatment_resolve_by');
            $table->integer('residual_risk_likelihood');
            $table->integer('residual_risk_impact');
            $table->string('risk_mitigation_opsi_risiko');
            $table->string('risk_mitigation_deskripsi_tindakan_mitigasi');
            $table->integer('risk_after_mitigation_likelihood');
            $table->integer('risk_after_mitigation_impact');
            $table->string('risk_monitoring_method');
            $table->string('risk_monitoring_progress');
            $table->string('risk_monitoring_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('risks');
    }
}
