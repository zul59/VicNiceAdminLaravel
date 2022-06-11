(function() {
    if (sessionStorage.getItem('session') == null) {
        location.href = 'login';
    }
 })();
