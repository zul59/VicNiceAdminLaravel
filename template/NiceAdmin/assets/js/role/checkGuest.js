(function() {
    if (sessionStorage.getItem('session') == null) {
        location.href = 'pages-login.html';
    }
 })();