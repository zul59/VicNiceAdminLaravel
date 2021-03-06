document.addEventListener('DOMContentLoaded', function() {
  const btnLogin = document.getElementById('btnLogin');
  btnLogin.addEventListener('click', function(event) {
      login(event);
  });
})

async function login(event) {
    event.preventDefault()
    const username = document.getElementById('yourUsername').value;
    const password = document.getElementById('yourPassword').value;

    const data = {
        username: username,
        password: password
    }
    try {
        const path = 'https://nice-admin1.herokuapp.com/login';
        const response = await fetch(path, {
            headers: {'Content-Type': 'application/json'},
            method: 'POST',
            body: JSON.stringify(data)
        })
        const result = await response.json();
        if (result.status !== 200) 
            throw new Error(result.message);
        
        const sessionData = {
            email: result.data.email,
            userId: result.data.user_id,
            username: result.data.username,
            name: result.data.name,
            role: result.data.role
        }
        sessionStorage.setItem("session", JSON.stringify(sessionData));
        alert('Login Success');
        if (sessionData.role === 1) {
            location.href = 'index-user.html';
        }
        else {
            location.href = 'index.html';
        }
    } catch (ex) {
        alert(ex);
    }
}