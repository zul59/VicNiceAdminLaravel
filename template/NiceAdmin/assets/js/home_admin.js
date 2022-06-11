(function() {
    getData();

    async function getData() {
        try {
            const path = 'https://nice-admin1.herokuapp.com/adminUnit';
            const response = await fetch(path, {
                headers: {'Content-Type': 'application/json'},
                method: 'GET',
            })
            const result = await response.json();

            const units = result.data.units;
            const riskCategories = result.data.riskCategories;
            const sourceOfRisks = result.data.sourceOfRisks;
            const standarAcademics = result.data.standarAcademics;

            const tableBodyUnits = document.getElementById('tBodyUnits');
            const tableBodyRiskCategories = document.getElementById('tBodyRiskCategories');
            const tableBodySourceOfRisk = document.getElementById('tBodySourceOfRisk');
            const tableBodyStandarAkademik = document.getElementById('tBodyStandarAkademik');

            tableBodyUnits.innerHTML = ''
            tableBodyRiskCategories.innerHTML = ''
            tableBodySourceOfRisk.innerHTML = ''
            tableBodyStandarAkademik.innerHTML = ''

            units.forEach(unit => {
                const row = document.createElement("tr");
                const data = document.createElement("td");

                data.innerHTML = unit.unit_name;

                const deleteAction = document.createElement("td");
                deleteAction.innerHTML = 'x';
                deleteAction.style.cursor = 'pointer';
                deleteAction.style.color = 'red';

                deleteAction.addEventListener('click', function() {
                    remove(unit.unit_id, 'unit');
                })

                row.append(data);
                row.append(deleteAction);

                tableBodyUnits.append(row);
            })

            riskCategories.forEach(riskCategory => {
                const row = document.createElement("tr");
                const data = document.createElement("td");

                data.innerHTML = riskCategory.risk_category_name;

                const deleteAction = document.createElement("td");
                deleteAction.innerHTML = 'x';
                deleteAction.style.cursor = 'pointer';
                deleteAction.style.color = 'red';

                deleteAction.addEventListener('click', function() {
                    remove(riskCategory.risk_category_id, 'riskCategory');
                })

                row.append(data);
                row.append(deleteAction);

                tableBodyRiskCategories.append(row);
            })

            sourceOfRisks.forEach(sourceOfRisk => {
                const row = document.createElement("tr");
                const data = document.createElement("td");

                data.innerHTML = sourceOfRisk.source_of_risk_name;

                const deleteAction = document.createElement("td");
                deleteAction.innerHTML = 'x';
                deleteAction.style.cursor = 'pointer';
                deleteAction.style.color = 'red';

                deleteAction.addEventListener('click', function() {
                    remove(sourceOfRisk.source_of_risk_id, 'sourceOfRisk');
                })

                row.append(data);
                row.append(deleteAction);

                tableBodySourceOfRisk.append(row);
            })

            standarAcademics.forEach(standarAcademik => {
                const row = document.createElement("tr");
                const data = document.createElement("td");

                data.innerHTML = standarAcademik.standar_academic_name;

                const deleteAction = document.createElement("td");
                deleteAction.innerHTML = 'x';
                deleteAction.style.cursor = 'pointer';
                deleteAction.style.color = 'red';

                deleteAction.addEventListener('click', function() {
                    remove(standarAcademik.standar_academic_id, 'standarAcademic');
                })

                row.append(data);
                row.append(deleteAction);

                tableBodyStandarAkademik.append(row);
            })

            if (result.status !== 200)
                throw new Error(result.message);
        } catch (ex) {
            console.log(ex);
            console.log(ex.lineNumber);
        }
    }

    async function remove(id, type) {
        try {
            const path = `https://nice-admin1.herokuapp.com/${type}/${id}`;
            const response = await fetch(path, {
                headers: {'Content-Type': 'application/json'},
                method: 'DELETE',
                // body: JSON.stringify({ deletedId: id })
            })
            const result = await response.json();

            if (result.status != 200) throw new Error(result.message);

            alert('Remove success');
            getData();
        } catch (ex) {
            alert(ex);
        }
    }
 })();
