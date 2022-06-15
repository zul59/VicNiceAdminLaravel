(async function () {
    const session = sessionStorage.getItem("session");

    if (session != null) {
        const sessionData = JSON.parse(sessionStorage.getItem("session"));
    }

    const tableHeadUserAction = document.getElementById("thUserAction");

    let resikoUnitList = [];

    await getResikoUnitList();

    const searchUnitInput = document.getElementById("search-unit");
    const ddlUnitSelect = document.getElementById("ddlUnitName");
    const tableResiko = document.getElementById("tableResiko");
    const btnSearch = document.getElementById("btn-search");
    const labelNoData = document.getElementById("label-no-data");
    const btnExportExcel = document.getElementById("exportExcel");

    ddlUnitSelect.addEventListener("change", function () {
        const selectedUnitName = this.value.trim();

        clearDataTable();

        if (selectedUnitName === "All") {
            showTable(resikoUnitList);
            return;
        }

        const newResikoUnitList = [...resikoUnitList].filter(
            (x) => x.unit_name === selectedUnitName
        );
        showTable(newResikoUnitList);
    });

    // searchUnitInput.addEventListener("keyup", function (event) {
    //     if (event.key === "Enter") {
    //         search();
    //     }
    // });

    // btnSearch.addEventListener("click", function () {
    //     search();
    // });

    btnExportExcel.addEventListener("click", function () {
        var ddlValue = document.querySelector(
            "#ddlUnitName > option:checked"
        ).value;
        window.open(`/export-risk?unitName=${ddlValue}`, "_blank");
    });

    function clearDataTable() {
        document.getElementById("rows").innerHTML = "";
    }

    function search() {
        const value = searchUnitInput.value;
        const filteredList = resikoUnitList.filter((item) =>
            item.unit_name.toLowerCase().includes(value.toLowerCase())
        );
        if (filteredList.length === 0) {
            tableResiko.style.display = "none";
            labelNoData.style.display = "block";
        } else {
            tableResiko.style.display = "block";
            labelNoData.style.display = "none";
        }
        document.getElementById("rows").innerHTML = "";
        showTable(filteredList);
    }

    async function getResikoUnitList() {
        try {
            const path = "/risk";
            const response = await fetch(path);
            const result = await response.json();
            if (result.status !== 200) throw new Error(result.message);

            resikoUnitList = result.data;
            showTable(result.data);
        } catch (ex) {
            alert(ex);
        }
    }

    function showTable(list) {
        list.forEach((item) => {
            const tableRow = document.createElement("tr");

            const tdUnit = document.createElement("td");
            const tdRiskId = document.createElement("td");
            const tdDateRaised = document.createElement("td");
            const tdRaisedBy = document.createElement("td");
            const tdRiskObjective = document.createElement("td");
            const tdRiskEvent = document.createElement("td");
            const tdStandar = document.createElement("td");
            const tdRiskCategory = document.createElement("td");
            const tdCause = document.createElement("td");
            const tdSourceOfRisk = document.createElement("td");
            const tdConsequence = document.createElement("td");
            const tdRiskOwner = document.createElement("td");
            const tdUnitTerkaitPenyebabResiko = document.createElement("td");
            const tdUserAction = document.createElement("td");

            const tdInherrentLikelihood = document.createElement("td");
            const tdInherrentImpact = document.createElement("td");
            const tdInherrentRating = document.createElement("td");
            const tdInherrentMatrix = document.createElement("td");

            const tdAction = document.createElement("td");
            const tdPlan = document.createElement("td");
            const tdResolveBy = document.createElement("td");

            const tdResidualLikelihood = document.createElement("td");
            const tdResidualImpact = document.createElement("td");
            const tdResidualRating = document.createElement("td");
            const tdResidualMatrix = document.createElement("td");

            const tdMitigationOpsiRisiko = document.createElement("td");
            const tdMitigationDeskripsiTindakanMitigasi =
                document.createElement("td");

            const tdAfterMitigationLikelihood = document.createElement("td");
            const tdAfterMitigationImpact = document.createElement("td");
            const tdAfterMitigationRating = document.createElement("td");
            const tdAfterMitigationMatrix = document.createElement("td");

            const tdMonitoringMethod = document.createElement("td");
            const tdMonitoringProgress = document.createElement("td");
            const tdMonitoringStatus = document.createElement("td");

            tdUnit.innerHTML = item.unit_name;
            tdRiskId.innerHTML = item.risk_id;
            tdDateRaised.innerHTML = item.date_raised;
            tdRaisedBy.innerHTML = item.raised_by;
            tdRiskObjective.innerHTML = item.risk_objective;
            tdRiskEvent.innerHTML = item.risk_event;
            tdStandar.innerHTML = item.standar;
            tdRiskCategory.innerHTML = item.risk_category;
            tdCause.innerHTML = item.cause;
            tdSourceOfRisk.innerHTML = item.source_of_risk;
            tdConsequence.innerHTML = item.consequence;
            tdRiskOwner.innerHTML = item.risk_owner;
            tdUnitTerkaitPenyebabResiko.innerHTML =
                item.unit_terkait_penyebab_resiko;

            tdInherrentLikelihood.innerHTML = item.risk_inherrent_likelihood;
            tdInherrentImpact.innerHTML = item.risk_inherrent_impact;
            const inherrentRating =
                parseInt(getDefaultOrValue(item.risk_inherrent_likelihood, 0)) *
                parseInt(getDefaultOrValue(item.risk_inherrent_impact, 0));
            tdInherrentRating.innerHTML = inherrentRating;
            tdInherrentMatrix.innerHTML = getRating(inherrentRating);
            const [inherrentTextColor, inherrentBackgroundColor] =
                getTextAndBgColor(inherrentRating);
            tdInherrentMatrix.style.color = inherrentTextColor;
            tdInherrentMatrix.style.backgroundColor = inherrentBackgroundColor;

            tdAction.innerHTML = item.risk_treatment_action;
            tdPlan.innerHTML = item.risk_treatment_plan;
            tdResolveBy.innerHTML = item.risk_treatment_resolve_by;

            tdResidualLikelihood.innerHTML = item.residual_risk_likelihood;
            tdResidualImpact.innerHTML = item.residual_risk_impact;
            const residualRating =
                parseInt(getDefaultOrValue(item.residual_risk_likelihood, 0)) *
                parseInt(getDefaultOrValue(item.residual_risk_impact, 0));
            tdResidualRating.innerHTML = residualRating;
            tdResidualMatrix.innerHTML = getRating(residualRating);
            const [residualTextColor, residualBackgroundColor] =
                getTextAndBgColor(residualRating);
            tdResidualMatrix.style.color = residualTextColor;
            tdResidualMatrix.style.backgroundColor = residualBackgroundColor;

            tdMitigationOpsiRisiko.innerHTML = item.risk_mitigation_opsi_risiko;
            tdMitigationDeskripsiTindakanMitigasi.innerHTML =
                item.risk_mitigation_deskripsi_tindakan_mitigasi;

            tdAfterMitigationLikelihood.innerHTML =
                item.risk_after_mitigation_likelihood;
            tdAfterMitigationImpact.innerHTML =
                item.risk_after_mitigation_impact;
            const afterMitigationRating =
                parseInt(
                    getDefaultOrValue(item.risk_after_mitigation_likelihood, 0)
                ) *
                parseInt(
                    getDefaultOrValue(item.risk_after_mitigation_impact, 0)
                );
            tdAfterMitigationRating.innerHTML = afterMitigationRating;
            tdAfterMitigationMatrix.innerHTML = getRating(
                afterMitigationRating
            );
            const [afterMitigationTextColor, afterMitigationBackgroundColor] =
                getTextAndBgColor(afterMitigationRating);
            tdAfterMitigationMatrix.style.color = afterMitigationTextColor;
            tdAfterMitigationMatrix.style.backgroundColor =
                afterMitigationBackgroundColor;

            tdMonitoringMethod.innerHTML = item.risk_monitoring_method;
            tdMonitoringProgress.innerHTML = item.risk_monitoring_progress;
            tdMonitoringStatus.innerHTML = item.risk_monitoring_status;

            const btnEdit = document.createElement("button");
            btnEdit.innerText = "Edit";
            btnEdit.addEventListener("click", () =>
                editResiko(item.unit_name, item.risk_id)
            );
            tdUserAction.append(btnEdit);

            const btnDelete = document.createElement("button");
            btnDelete.innerText = "Delete";
            btnDelete.addEventListener("click", function () {
                removeResiko(item.risk_id);
            });
            tdUserAction.append(btnDelete);

            tableRow.append(tdUnit);
            tableRow.append(tdRiskId);
            tableRow.append(tdDateRaised);
            tableRow.append(tdRaisedBy);
            tableRow.append(tdRiskObjective);
            tableRow.append(tdRiskEvent);
            tableRow.append(tdStandar);
            tableRow.append(tdRiskCategory);
            tableRow.append(tdCause);
            tableRow.append(tdSourceOfRisk);
            tableRow.append(tdConsequence);
            tableRow.append(tdRiskOwner);
            tableRow.append(tdUnitTerkaitPenyebabResiko);

            tableRow.append(tdInherrentLikelihood);
            tableRow.append(tdInherrentImpact);
            tableRow.append(tdInherrentRating);
            tableRow.append(tdInherrentMatrix);

            tableRow.append(tdAction);
            tableRow.append(tdPlan);
            tableRow.append(tdResolveBy);

            tableRow.append(tdResidualLikelihood);
            tableRow.append(tdResidualImpact);
            tableRow.append(tdResidualRating);
            tableRow.append(tdResidualMatrix);

            tableRow.append(tdMitigationOpsiRisiko);
            tableRow.append(tdMitigationDeskripsiTindakanMitigasi);

            tableRow.append(tdAfterMitigationLikelihood);
            tableRow.append(tdAfterMitigationImpact);
            tableRow.append(tdAfterMitigationRating);
            tableRow.append(tdAfterMitigationMatrix);

            tableRow.append(tdMonitoringMethod);
            tableRow.append(tdMonitoringProgress);
            tableRow.append(tdMonitoringStatus);

            tableRow.append(tdUserAction);

            document.getElementById("rows").appendChild(tableRow);
        });
    }

    function getDefaultOrValue(value, defaultValue) {
        return !value || value === "" ? defaultValue : value;
    }

    function getRating(value) {
        if (value <= 2) {
            return "Rare";
        } else if (value <= 4) {
            return "Unlikely";
        } else if (value <= 10) {
            return "Medium";
        } else if (value <= 15) {
            return "High";
        } else {
            return "Very High";
        }
    }

    function getTextAndBgColor(value) {
        if (value <= 2) {
            return ["#ffffff", "#2b6419"];
        } else if (value <= 4) {
            return ["#ffffff", "#a0ce63"];
        } else if (value <= 10) {
            return ["#000000", "#ffff55"];
        } else if (value <= 15) {
            return ["#ffffff", "#ee752f"];
        } else {
            return ["#ffffff", "#ea3524"];
        }
    }

    function editResiko(unitName, riskId) {
        location.href =
            "add-data-risiko" +
            `?unit=${encodeURIComponent(unitName)}&type=edit&id=${riskId}`;
    }

    async function removeResiko(riskId) {
        try {
            // const path = '/risk';
            const path = `/risk/${riskId}`;
            const response = await fetch(path, {
                headers: { "Content-Type": "application/json" },
                method: "DELETE",
                // body: JSON.stringify({ riskId })
            });
            const result = await response.json();
            if (result.status !== 200) throw new Error(result.message);

            alert("Remove Success");
            location.reload();
        } catch (ex) {
            alert(ex);
        }
    }
})();
