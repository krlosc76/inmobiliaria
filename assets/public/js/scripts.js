window.addEventListener('load', function() {
    console.log('Página cargada');
    setTimeout(function() {
        console.log('Timeout ejecutado');
        var alerts = document.querySelectorAll('.alert');
        console.log('Elementos alert encontrados:', alerts);
        alerts.forEach(function(alert) {
            console.log('Añadiendo clase hidden a', alert);
            alert.classList.add('hidden');
        });
    }, 5000);
});
