(function() {
    if (sessionStorage.getItem('session') !== null) {
        const session = JSON.parse(sessionStorage.getItem('session'));
        if (session.role !== 2)
            location.href = 'index-user';
    }
 })();
