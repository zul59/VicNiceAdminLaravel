(function() {
    const params = new URLSearchParams(location.search);
    const type = params.get('type');

    const lblHeader = document.getElementById('lblHeader');
    
    switch (type) {
        case 'unit': 
            lblHeader.textContent = 'Add Unit';
            break;
        case 'sor':
            lblHeader.textContent = 'Source of Risk';
            break;
        case 'rc':
            lblHeader.textContent = 'Risk Category';
            break;
        case 'sa':
            lblHeader.textContent = 'Standar Akademik';
            break;
    }

    lblHeader.style.display = "block";

    const btnAdd = document.getElementById('btnAdd');
    btnAdd.addEventListener('click', function() {
        handleAdd();
    });

    const name = document.getElementById('inputName');

    async function handleAdd() {
        let url = '';
        switch (type) {
            case 'unit': 
                url = getUnitUrl();
                break;
            case 'sor':
                url = getSourceOfRiskUrl();
                break;
            case 'rc':
                url = getRiskCategory();
                break;
            case 'sa':
                url = getStandarAkademik();
                break;
        }

        const data = { name: name.value }

        try {
            const response = await fetch(url, {
                headers: {'Content-Type': 'application/json'},
                method: 'POST',
                body: JSON.stringify(data)
            })
            const result = await response.json();
            if (result.status !== 200) 
                throw new Error(result.message);
            alert('Add Success');
            location.href = 'index.html';
        } catch (ex) {
            alert(ex);
        }
    }

    function getUnitUrl() {
       return 'https://nice-admin1.herokuapp.com/unit' 
    }

    function getSourceOfRiskUrl() {
        return 'https://nice-admin1.herokuapp.com/sourceOfRisk'
    }

    function getRiskCategory() {
        return 'https://nice-admin1.herokuapp.com/riskCategory'
    }

    function getStandarAkademik() {
        return 'https://nice-admin1.herokuapp.com/standarAcademic'
    }
})();