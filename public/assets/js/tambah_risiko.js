(async function() {

    const params = new URLSearchParams(location.search);
    console.log(params)
    const unit = params.get('unit');
    const edit = params.get('type');
    const riskId = params.get('id');

    let units = [];
    let riskCategories = [];
    let sourceOfRisks = [];
    let standarAcademics = [];

    const unitSelect = document.getElementById('unit');
    const riskCategorySelect = document.getElementById('riskCategory');
    const sourceOfRiskSelect = document.getElementById('sourceOfRisk');
    const standarSelect = document.getElementById('standar');

    const inputRiskId = document.getElementById('riskId');
    const inputDateRaised = document.getElementById('dateRaised');
    const inputRaisedBy = document.getElementById('raisedBy');
    const inputRiskObjective = document.getElementById('riskObjective');
    const inputRiskEvent = document.getElementById('riskEvent');
    const inputCause = document.getElementById('cause');
    const inputConsequence = document.getElementById('consequence');
    const inputRiskOwner = document.getElementById('riskOwner');
    const inputUnitTerkaitPenyebabRisiko = document.getElementById('unitTerkaitPenyebabRisiko');

    const inputRiskInherrentLikelihood = document.getElementById('riskInherrentLikelihood');
    const inputRiskInherrentImpact = document.getElementById('riskInherrentImpact');
    const inputRiskInherrentRating = document.getElementById('riskInherrentRating');
    const inputRiskInherrentMatrix = document.getElementById('riskInherrentMatrix');

    const inputRiskTreatmentAction = document.getElementById('riskTreatmentAction');
    const inputRiskTreatmentPlan = document.getElementById('riskTreatmentPlan');
    const inputRiskTreatmentResolveBy = document.getElementById('riskTreatmentResolveBy');

    const inputRiskResidualLikelihood = document.getElementById('riskResidualLikelihood');
    const inputRiskResidualImpact = document.getElementById('riskResidualImpact');
    const inputRiskResidualRating = document.getElementById('riskResidualRating');
    const inputRiskResidualMatrix = document.getElementById('riskResidualMatrix');

    const inputRiskMitigationOpsiRisiko = document.getElementById('riskMitigationOpsiRisiko');
    const inputRiskMitigationDeskripsiTindakanMitigasi = document.getElementById('riskMitigationDeskripsiTindakanMitigasi');

    const inputRiskAfterMitigationLikelihood = document.getElementById('riskAfterMitigationLikelihood');
    const inputRiskAfterMitigationImpact = document.getElementById('riskAfterMitigationImpact');
    const inputRiskAfterMitigationRating = document.getElementById('riskAfterMitigationRating');
    const inputRiskAfterMitigationMatrix = document.getElementById('riskAfterMitigationMatrix');

    const inputRiskMonitoringMethod = document.getElementById('riskMonitoringMethod');
    const inputRiskMonitoringProgress = document.getElementById('riskMonitoringProgress');
    const inputRiskMonitoringStatus = document.getElementById('riskMonitoringStatus');

    inputRiskInherrentLikelihood.addEventListener('input', function() {
        inputFieldValid(inputRiskInherrentLikelihood);
        updateInherrentRatingAndMatrix()
    })
    inputRiskInherrentImpact.addEventListener('input', function() {
        inputFieldValid(inputRiskInherrentImpact);
        updateInherrentRatingAndMatrix();
    })

    inputRiskResidualLikelihood.addEventListener('input', function() {
        inputFieldValid(inputRiskResidualLikelihood);
        updateResidualRatingAndMatrix()
    })
    inputRiskResidualImpact.addEventListener('input', function() {
        inputFieldValid(inputRiskResidualImpact);
        updateResidualRatingAndMatrix();
    })

    inputRiskAfterMitigationLikelihood.addEventListener('input', function() {
        inputFieldValid(inputRiskAfterMitigationLikelihood);
        updateAfterMitigationRatingAndMatrix()
    })
    inputRiskAfterMitigationImpact.addEventListener('input', function() {
        inputFieldValid(inputRiskAfterMitigationImpact);
        updateAfterMitigationRatingAndMatrix();
    })

    await init();

    if (edit && riskId) {
        await fetchExistingData(riskId);
    }

    const btnTambahRisiko = document.getElementById('btnTambahRisiko');
    btnTambahRisiko.addEventListener('click', function(ev) {
        if (edit) {
            editRisiko(ev);
        }
        else {
            tambahRisiko(ev);
        }
    })

    async function init() {
        try {
            const path = '/adminUnit';
            const response = await fetch(path, {
                headers: {'Content-Type': 'application/json'},
                method: 'GET',
            })
            const result = await response.json();

            units = result.data.units;
            riskCategories = result.data.riskCategories;
            sourceOfRisks = result.data.sourceOfRisks;
            standarAcademics = result.data.standarAcademics;

            units.forEach((unit, index) => {
                var option = document.createElement("option");
                option.text = unit.unit_name;
                option.value = `unit-${index}`;
                unitSelect.add(option);
            })

            if (unit) {
                const unitSelectedIndex = units.findIndex(u => u.unit_name === unit.trim());
                if (unitSelectedIndex != -1) {
                    unitSelect.value = `unit-${unitSelectedIndex}`;
                }
            }

            riskCategories.forEach((rc, index) => {
                var option = document.createElement("option");
                option.text = rc.risk_category_name;
                option.value = `risk-category-${index}`;
                riskCategorySelect.add(option);
            })

            sourceOfRisks.forEach((sor, index) => {
                var option = document.createElement("option");
                option.text = sor.source_of_risk_name;
                option.value = `source-of-risk-${index}`;
                sourceOfRiskSelect.add(option);
            })

            standarAcademics.forEach((st, index) => {
                var option = document.createElement("option");
                option.text = st.standar_academic_name;
                option.value = `standar-${index}`;
                standarSelect.add(option);
            })

        } catch (ex) {
            console.log(ex);
        }
    }

    function updateInherrentRatingAndMatrix() {
        const likelihood = inputRiskInherrentLikelihood.value === '' ? 1 : inputRiskInherrentLikelihood.value;
        const impact = inputRiskInherrentImpact.value === '' ? 1 : inputRiskInherrentImpact.value;

        const res = likelihood * impact;
        inputRiskInherrentRating.value = res;

        if (res <= 2) {
            inputRiskInherrentMatrix.value = "Rare";
            inputRiskInherrentMatrix.style.backgroundColor = '#2b6419';
            inputRiskInherrentMatrix.style.color = '#ffffff';
        }
        else if (res <= 4) {
            inputRiskInherrentMatrix.value = "Unlikely";
            inputRiskInherrentMatrix.style.backgroundColor = '#a0ce63';
            inputRiskInherrentMatrix.style.color = '#ffffff';
        }
        else if (res <= 10) {
            inputRiskInherrentMatrix.value = "Medium";
            inputRiskInherrentMatrix.style.backgroundColor = '#ffff55';
            inputRiskInherrentMatrix.style.color = '#000000';
        }
        else if (res <= 15) {
            inputRiskInherrentMatrix.value = "High";
            inputRiskInherrentMatrix.style.backgroundColor = '#ee752f';
            inputRiskInherrentMatrix.style.color = '#ffffff';
        }
        else {
            inputRiskInherrentMatrix.value = "Very High";
            inputRiskInherrentMatrix.style.backgroundColor = '#ea3524';
            inputRiskInherrentMatrix.style.color = '#ffffff';
        }
    }

    function updateResidualRatingAndMatrix() {
        const likelihood = inputRiskResidualLikelihood.value === '' ? 1 : inputRiskResidualLikelihood.value;
        const impact = inputRiskResidualImpact.value === '' ? 1 : inputRiskResidualImpact.value;

        const res = likelihood * impact;
        inputRiskResidualRating.value = res;

        if (res <= 2) {
            inputRiskResidualMatrix.value = "Rare";
            inputRiskResidualMatrix.style.backgroundColor = '#2b6419';
            inputRiskResidualMatrix.style.color = '#ffffff';
        }
        else if (res <= 4) {
            inputRiskResidualMatrix.value = "Unlikely";
            inputRiskResidualMatrix.style.backgroundColor = '#a0ce63';
            inputRiskResidualMatrix.style.color = '#ffffff';
        }
        else if (res <= 10) {
            inputRiskResidualMatrix.value = "Medium";
            inputRiskResidualMatrix.style.backgroundColor = '#ffff55';
            inputRiskResidualMatrix.style.color = '#000000';
        }
        else if (res <= 15) {
            inputRiskResidualMatrix.value = "High";
            inputRiskResidualMatrix.style.backgroundColor = '#ee752f';
            inputRiskResidualMatrix.style.color = '#ffffff';
        }
        else {
            inputRiskResidualMatrix.value = "Very High";
            inputRiskResidualMatrix.style.backgroundColor = '#ea3524';
            inputRiskResidualMatrix.style.color = '#ffffff';
        }
    }

    function updateAfterMitigationRatingAndMatrix() {
        const likelihood = inputRiskAfterMitigationLikelihood.value === '' ? 1 : inputRiskAfterMitigationLikelihood.value;
        const impact = inputRiskAfterMitigationImpact.value === '' ? 1 : inputRiskAfterMitigationImpact.value;

        const res = likelihood * impact;
        inputRiskAfterMitigationRating.value = res;

        if (res <= 2) {
            inputRiskAfterMitigationMatrix.value = "Rare";
            inputRiskAfterMitigationMatrix.style.backgroundColor = '#2b6419';
            inputRiskAfterMitigationMatrix.style.color = '#ffffff';
        }
        else if (res <= 4) {
            inputRiskAfterMitigationMatrix.value = "Unlikely";
            inputRiskAfterMitigationMatrix.style.backgroundColor = '#a0ce63';
            inputRiskAfterMitigationMatrix.style.color = '#ffffff';
        }
        else if (res <= 10) {
            inputRiskAfterMitigationMatrix.value = "Medium";
            inputRiskAfterMitigationMatrix.style.backgroundColor = '#ffff55';
            inputRiskAfterMitigationMatrix.style.color = '#000000';
        }
        else if (res <= 15) {
            inputRiskAfterMitigationMatrix.value = "High";
            inputRiskAfterMitigationMatrix.style.backgroundColor = '#ee752f';
            inputRiskAfterMitigationMatrix.style.color = '#ffffff';
        }
        else {
            inputRiskAfterMitigationMatrix.value = "Very High";
            inputRiskAfterMitigationMatrix.style.backgroundColor = '#ea3524';
            inputRiskAfterMitigationMatrix.style.color = '#ffffff';
        }
    }

    function inputFieldValid(input) {
        if (input.value === '') return true;
        if (input.value >= 1 && input.value <= 5) {
            return true;
        }
        else {
            if (input.value < 1) input.value = 1;
            else input.value = 5;
            return false;
        }
    }

    async function tambahRisiko(ev) {
        ev.preventDefault();

        const data = {
            riskId: inputRiskId.value,
            dateRaised: inputDateRaised.value,
            raisedBy: inputRaisedBy.value,
            riskObjective: inputRiskObjective.value,
            riskEvent: inputRiskEvent.value,
            standar: standarSelect.options[standarSelect.selectedIndex].text,
            riskCategory: riskCategorySelect.options[riskCategorySelect.selectedIndex].text,
            cause: inputCause.value,
            sourceOfRisk: sourceOfRiskSelect.options[sourceOfRiskSelect.selectedIndex].text,
            consequence: inputConsequence.value,
            riskOwner: inputRiskOwner.value,
            unitTerkaitPenyebabResiko: inputUnitTerkaitPenyebabRisiko.value,
            riskInherrentLikelihood: inputRiskInherrentLikelihood.value,
            riskInherrentImpact: inputRiskInherrentImpact.value,
            unitName: unitSelect.options[unitSelect.selectedIndex].text,
            riskTreatmentAction: inputRiskTreatmentAction.value,
            riskTreatmentPlan: inputRiskTreatmentPlan.value,
            riskTreatmentResolveBy: inputRiskTreatmentResolveBy.value,
            residualRiskLikelihood: inputRiskResidualLikelihood.value,
            residualRiskImpact: inputRiskResidualImpact.value,
            riskMitigationOpsiRisiko: inputRiskMitigationOpsiRisiko.value,
            riskMitigationDeskripsiTindakanMitigasi: inputRiskMitigationDeskripsiTindakanMitigasi.value,
            riskAfterMitigationLikelihood: inputRiskAfterMitigationLikelihood.value,
            riskAfterMitigationImpact: inputRiskAfterMitigationImpact.value,
            riskMonitoringMethod: inputRiskMonitoringMethod.value,
            riskMonitoringProgress: inputRiskMonitoringProgress.value,
            riskMonitoringStatus: inputRiskMonitoringStatus.value
        }

        try {
            const path = '/risk';
            const response = await fetch(path, {
                headers: {'Content-Type': 'application/json'},
                method: 'POST',
                body: JSON.stringify(data)
            })
            const result = await response.json();
            if (result.status !== 200)
                throw new Error(result.message);

            alert('Submit Success');
            location.href = 'risiko-unit';
        } catch (ex) {
            alert(ex);
        }
    }

    async function editRisiko(ev) {
        ev.preventDefault();

        const data = {
            riskId: inputRiskId.value,
            dateRaised: inputDateRaised.value,
            raisedBy: inputRaisedBy.value,
            riskObjective: inputRiskObjective.value,
            riskEvent: inputRiskEvent.value,
            standar: standarSelect.options[standarSelect.selectedIndex].text,
            riskCategory: riskCategorySelect.options[riskCategorySelect.selectedIndex].text,
            cause: inputCause.value,
            sourceOfRisk: sourceOfRiskSelect.options[sourceOfRiskSelect.selectedIndex].text,
            consequence: inputConsequence.value,
            riskOwner: inputRiskOwner.value,
            unitTerkaitPenyebabResiko: inputUnitTerkaitPenyebabRisiko.value,
            riskInherrentLikelihood: inputRiskInherrentLikelihood.value,
            riskInherrentImpact: inputRiskInherrentImpact.value,
            unitName: unitSelect.options[unitSelect.selectedIndex].text,
            riskTreatmentAction: inputRiskTreatmentAction.value,
            riskTreatmentPlan: inputRiskTreatmentPlan.value,
            riskTreatmentResolveBy: inputRiskTreatmentResolveBy.value,
            residualRiskLikelihood: inputRiskResidualLikelihood.value,
            residualRiskImpact: inputRiskResidualImpact.value,
            riskMitigationOpsiRisiko: inputRiskMitigationOpsiRisiko.value,
            riskMitigationDeskripsiTindakanMitigasi: inputRiskMitigationDeskripsiTindakanMitigasi.value,
            riskAfterMitigationLikelihood: inputRiskAfterMitigationLikelihood.value,
            riskAfterMitigationImpact: inputRiskAfterMitigationImpact.value,
            riskMonitoringMethod: inputRiskMonitoringMethod.value,
            riskMonitoringProgress: inputRiskMonitoringProgress.value,
            riskMonitoringStatus: inputRiskMonitoringStatus.value
        }

        try {
            const path = '/risk';
            const response = await fetch(path, {
                headers: {'Content-Type': 'application/json'},
                method: 'PUT',
                body: JSON.stringify(data)
            })
            const result = await response.json();
            if (result.status !== 200)
                throw new Error(result.message);

            alert('Edit Success');
            location.href = 'risiko-unit';
        } catch (ex) {
            alert(ex);
        }
    }

    async function fetchExistingData(riskId) {
        try {
            const path = `/risk/${riskId}`;
            const response = await fetch(path);
            const result = await response.json();
            if (result.status !== 200)
                throw new Error(result.message);

            const unitSelectedIndex = units.findIndex(u => u.unit_name === result.data.unit_name);
            if (unitSelectedIndex != -1) {
                unitSelect.value = `unit-${unitSelectedIndex}`;
            }

            const riskCategorySelectedIndex = riskCategories.findIndex(u => u.risk_category_name === result.data.risk_category);
            if (riskCategorySelectedIndex != -1) {
                riskCategorySelect.value = `risk-category-${riskCategorySelectedIndex}`;
            }

            const sourceOfRiskSelectedIndex = sourceOfRisks.findIndex(u => u.source_of_risk_name === result.data.source_of_risk);
            if (sourceOfRiskSelectedIndex != -1) {
                sourceOfRiskSelect.value = `source-of-risk-${sourceOfRiskSelectedIndex}`;
            }

            const standarSelectedIndex = standarAcademics.findIndex(u => u.standar_academic_name === result.data.standar);
            if (standarSelectedIndex != -1) {
                standarSelect.value = `standar-${standarSelectedIndex}`;
            }

            inputRiskId.value = result.data.risk_id;
            inputDateRaised.value = result.data.date_raised;
            inputRaisedBy.value = result.data.raised_by;
            inputRiskObjective.value = result.data.risk_objective;
            inputRiskEvent.value = result.data.risk_event;
            inputCause.value = result.data.cause;
            inputConsequence.value = result.data.consequence;
            inputRiskOwner.value = result.data.risk_owner;
            inputUnitTerkaitPenyebabRisiko.value = result.data.unit_terkait_penyebab_resiko;
            inputRiskInherrentLikelihood.value = result.data.risk_inherrent_likelihood;
            inputRiskInherrentImpact.value = result.data.risk_inherrent_impact;
            inputRiskTreatmentAction.value = result.data.risk_treatment_action;
            inputRiskTreatmentPlan.value = result.data.risk_treatment_plan;
            inputRiskTreatmentResolveBy.value = result.data.risk_treatment_resolve_by;
            inputRiskResidualLikelihood.value = result.data.residual_risk_likelihood;
            inputRiskResidualImpact.value = result.data.residual_risk_impact;
            inputRiskMitigationOpsiRisiko.value = result.data.risk_mitigation_opsi_risiko;
            inputRiskMitigationDeskripsiTindakanMitigasi.value = result.data.risk_mitigation_deskripsi_tindakan_mitigasi;
            inputRiskAfterMitigationLikelihood.value = result.data.risk_after_mitigation_likelihood;
            inputRiskAfterMitigationImpact.value = result.data.risk_after_mitigation_impact;
            inputRiskMonitoringMethod.value = result.data.risk_monitoring_method;
            inputRiskMonitoringProgress.value = result.data.risk_monitoring_progress;
            inputRiskMonitoringStatus.value = result.data.risk_monitoring_status;

            updateInherrentRatingAndMatrix();
            updateResidualRatingAndMatrix();
            updateAfterMitigationRatingAndMatrix();
        } catch (ex) {
            alert(ex);
        }
    }
 })();
