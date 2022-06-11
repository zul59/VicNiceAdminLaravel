const client = require("../../connect");

exports.all = async (req, res) => {

    const getAllQuery = `SELECT * FROM "MsRisk"`;

    try {
        const result = await client.query(getAllQuery, []);

        return res.status(200).send({
            status: 200,
            message: "Risk get successfully",
            data: result.rows
        });
    } catch (err) {
        return res.status(500).send({
            status: 500,
            message: "Something wrong occured while getting all data",
            exception: err,
        });
    }
};

exports.getOne = async (req, res) => {

    const getOneQuery = `SELECT * FROM "MsRisk" WHERE risk_id = $1`;

    try {
        const result = await client.query(getOneQuery, [req.params.risk_id]);

        return res.status(200).send({
            status: 200,
            message: "Risk get successfully",
            data: result.rows[0]
        });
    } catch (err) {
        console.log(err);
        return res.status(500).send({
            status: 500,
            message: "Something wrong occured while getting data",
            exception: err,
        });
    }
};
  
exports.create = async (req, res) => {
    const { 
        riskId, dateRaised, raisedBy, riskObjective, 
        riskEvent, standar, riskCategory, cause,
        sourceOfRisk, consequence, riskOwner, unitTerkaitPenyebabResiko,
        riskInherrentLikelihood, riskInherrentImpact, unitName, 
        riskTreatmentAction, riskTreatmentPlan, riskTreatmentResolveBy,
        residualRiskLikelihood, residualRiskImpact,
        riskMitigationOpsiRisiko, riskMitigationDeskripsiTindakanMitigasi,
        riskAfterMitigationLikelihood, riskAfterMitigationImpact,
        riskMonitoringMethod, riskMonitoringProgress, riskMonitoringStatus
    } = req.body;

    const insertQuery = `INSERT INTO "MsRisk" (risk_id, date_raised, raised_by, risk_objective, risk_event, standar, risk_category, cause, source_of_risk, consequence, risk_owner, unit_terkait_penyebab_resiko, risk_inherrent_likelihood, risk_inherrent_impact, unit_name, risk_treatment_action, risk_treatment_plan, risk_treatment_resolve_by, residual_risk_likelihood, residual_risk_impact, risk_mitigation_opsi_risiko, risk_mitigation_deskripsi_tindakan_mitigasi, risk_after_mitigation_likelihood, risk_after_mitigation_impact, risk_monitoring_method, risk_monitoring_progress, risk_monitoring_status) VALUES ($1, $2, $3, $4, $5, $6, $7, $8, $9, $10, $11, $12, $13, $14, $15, $16, $17, $18, $19, $20, $21, $22, $23, $24, $25, $26, $27);`;

    try {
        await client.query(insertQuery, [
            riskId, dateRaised, raisedBy, riskObjective, riskEvent, 
            standar, riskCategory, cause, sourceOfRisk, consequence,
            riskOwner, unitTerkaitPenyebabResiko, riskInherrentLikelihood, riskInherrentImpact,
            unitName, riskTreatmentAction, riskTreatmentPlan, riskTreatmentResolveBy,
            residualRiskLikelihood, residualRiskImpact,
            riskMitigationOpsiRisiko, riskMitigationDeskripsiTindakanMitigasi,
            riskAfterMitigationLikelihood, riskAfterMitigationImpact,
            riskMonitoringMethod, riskMonitoringProgress, riskMonitoringStatus
        ]);

        return res.status(200).send({
            status: 200,
            message: "Risk submitted successfully",
        });

    } catch (err) {
        return res.status(500).send({
            status: 500,
            message: "Something wrong occured while submitting new risk",
            exception: err,
        });
    }
};

exports.update = async (req, res) => {
    const { 
        riskId, dateRaised, raisedBy, riskObjective, 
        riskEvent, standar, riskCategory, cause,
        sourceOfRisk, consequence, riskOwner, unitTerkaitPenyebabResiko,
        riskInherrentLikelihood, riskInherrentImpact, unitName,
        riskTreatmentAction, riskTreatmentPlan, riskTreatmentResolveBy,
        residualRiskLikelihood, residualRiskImpact,
        riskMitigationOpsiRisiko, riskMitigationDeskripsiTindakanMitigasi,
        riskAfterMitigationLikelihood, riskAfterMitigationImpact,
        riskMonitoringMethod, riskMonitoringProgress, riskMonitoringStatus
    } = req.body;

    const updateQuery = `UPDATE "MsRisk" SET 
        date_raised = $1,
        raised_by = $2,
        risk_objective = $3,
        risk_event = $4,
        standar = $5,
        risk_category = $6,
        cause = $7,
        source_of_risk = $8,
        consequence = $9,
        risk_owner = $10,
        unit_terkait_penyebab_resiko = $11,
        risk_inherrent_likelihood = $12,
        risk_inherrent_impact = $13,
        unit_name = $14,
        risk_treatment_action = $15, 
        risk_treatment_plan = $16, 
        risk_treatment_resolve_by = $17, 
        residual_risk_likelihood = $18, 
        residual_risk_impact = $19, 
        risk_mitigation_opsi_risiko = $20, 
        risk_mitigation_deskripsi_tindakan_mitigasi = $21, 
        risk_after_mitigation_likelihood = $22, 
        risk_after_mitigation_impact = $23, 
        risk_monitoring_method = $24, 
        risk_monitoring_progress = $25, 
        risk_monitoring_status = $26
        WHERE risk_id = $27
    `;

    try {
        await client.query(updateQuery, [
            dateRaised, raisedBy, riskObjective, riskEvent, 
            standar, riskCategory, cause, sourceOfRisk, consequence,
            riskOwner, unitTerkaitPenyebabResiko, 
            riskInherrentLikelihood, riskInherrentImpact, unitName, 
            riskTreatmentAction, riskTreatmentPlan, riskTreatmentResolveBy,
            residualRiskLikelihood, residualRiskImpact,
            riskMitigationOpsiRisiko, riskMitigationDeskripsiTindakanMitigasi,
            riskAfterMitigationLikelihood, riskAfterMitigationImpact,
            riskMonitoringMethod, riskMonitoringProgress, riskMonitoringStatus, riskId
        ]);

        return res.status(200).send({
            status: 200,
            message: "Risk updated successfully",
        });

    } catch (err) {
        console.log(err)
        return res.status(500).send({
            status: 500,
            message: "Something wrong occured while updating existing risk",
            exception: err,
        });
    }
}

exports.remove = async (req, res) => {
    const { riskId } = req.body;

    const deleteQuery = `DELETE FROM "MsRisk" WHERE risk_id = $1`;

    try {
        await client.query(deleteQuery, [riskId]);

        return res.status(200).send({
            status: 200,
            message: "Risk removed successfully",
        });

    } catch (err) {
        return res.status(500).send({
            status: 500,
            message: "Something wrong occured while removing the risk data",
            exception: err,
        });
    }
}