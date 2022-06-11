(function() {
    const btnRegister = document.getElementById('btnRegister');
    btnRegister.addEventListener('click', function(event) {
        register(event);
    });

  
    async function register(event) {
        event.preventDefault()
        const checked = document.getElementById('acceptTerms').checked;
        const name = document.getElementById('yourName').value;
        const email = document.getElementById('yourEmail').value;
        const username = document.getElementById('yourUsername').value;
        const password = document.getElementById('yourPassword').value;

        if (!checked) {
            alert("You have to agree to terms and conditions");
            return;
        }
    
        const data = {
            name: name,
            email: email,
            username: username,
            password: password
        }
        try {
            const path = 'https://nice-admin1.herokuapp.com/register';
            const response = await fetch(path, {
                headers: {'Content-Type': 'application/json'},
                method: 'POST',
                body: JSON.stringify(data)
            })
            const result = await response.json();
            if (result.status !== 200) 
                throw new Error(result.message);
            alert('Register Success');
            location.href = 'pages-login.html';
        } catch (ex) {
            alert(ex);
        }
    }
})();

