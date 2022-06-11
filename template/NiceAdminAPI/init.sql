CREATE TABLE "MsUser"
(
    user_id		UUID PRIMARY KEY,
    username	VARCHAR(255) NOT NULL,
    email       VARCHAR(255) NOT NULL,
	"name"		VARCHAR(255) NOT NULL,
	"password"	VARCHAR(255) NOT NULL,
    "role"      INTEGER DEFAULT 1,
	created_at 	TIMESTAMPTZ DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE "MsRisk"
(
    risk_id INTEGER PRIMARY KEY,
    date_raised VARCHAR,
    raised_by VARCHAR,
    risk_objective VARCHAR,
    risk_event VARCHAR,
    standar VARCHAR,
    risk_category VARCHAR,
    cause VARCHAR,
    source_of_risk VARCHAR,
    consequence VARCHAR,
    risk_owner VARCHAR,
    unit_terkait_penyebab_resiko VARCHAR,
    risk_inherrent_likelihood INTEGER,
    risk_inherrent_impact INTEGER,
    risk_treatment_action VARCHAR,
    risk_treatment_plan VARCHAR,
    risk_treatment_resolve_by VARCHAR,
    residual_risk_likelihood INTEGER,
    residual_risk_impact INTEGER,
    risk_mitigation_opsi_risiko VARCHAR,
    risk_mitigation_deskripsi_tindakan_mitigasi VARCHAR,
    risk_after_mitigation_likelihood INTEGER,
    risk_after_mitigation_impact INTEGER,
    risk_monitoring_method VARCHAR,
    risk_monitoring_progress VARCHAR,
    risk_monitoring_status VARCHAR
)

CREATE TABLE "MsUnit"
(
    unit_id UUID PRIMARY KEY,
    unit_name VARCHAR
)

CREATE TABLE "MsRiskCategory"
(
    risk_category_id UUID PRIMARY KEY,
    risk_category_name VARCHAR
)

CREATE TABLE "MsSourceOfRisk"
(
    source_of_risk_id UUID PRIMARY KEY,
    source_of_risk_name VARCHAR
)

CREATE TABLE "MsStandarAcademic"
(
    standar_academic_id UUID PRIMARY KEY,
    standar_academic_name VARCHAR
)