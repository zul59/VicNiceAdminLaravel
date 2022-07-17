(async function() {
    await initForm();

    const btnRegister = document.getElementById('btnRegister');
    btnRegister.addEventListener('click', function(event) {
        register(event);
    });

    async function initForm(){
        const path = '/adminUnit';
        const response = await fetch(path, {
            headers: {'Content-Type': 'application/json'},
            method: 'GET',
        })
        const result = await response.json();

        result.data.units.forEach((unit, idx) => {
            let option = document.createElement("option");
            option.text = unit.unit_name;
            option.value = `${unit.id}`;
            document.getElementById('yourUnit').add(option);
        })
    }

    async function register(event) {
        event.preventDefault()
        const checked = document.getElementById('acceptTerms').checked;
        const name = document.getElementById('yourName').value;
        const email = document.getElementById('yourEmail').value;
        const username = document.getElementById('yourUsername').value;
        const password = document.getElementById('yourPassword').value;
        const unitId = document.getElementById('yourUnit').value;

        if (!checked) {
            alert("You have to agree to terms and conditions");
            return;
        }

        const data = {
            name: name,
            email: email,
            username: username,
            password: password,
            unitId: unitId,
        }
        try {
            const path = '/register';
            const response = await fetch(path, {
                headers: {'Content-Type': 'application/json'},
                method: 'POST',
                body: JSON.stringify(data)
            })
            const result = await response.json();
            if (result.status !== 200)
                throw new Error(result.message);
            alert('Register Success');
            location.href = 'login';
        } catch (ex) {
            alert(ex);
        }
    }
})();