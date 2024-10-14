document.getElementById('formAgregar').addEventListener('submit', function(e) {
    e.preventDefault();
    const ci = document.getElementById('ci').value;
    const nombre = document.getElementById('nombre').value;
    const apellido = document.getElementById('apellido').value;
    
    fetch('../controller/controlador.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'accion=agregar&ci=' + encodeURIComponent(ci) + '&nombre=' + encodeURIComponent(nombre) + '&apellido=' + encodeURIComponent(apellido)
    })
    .then(response => response.json())
    .then(data => {
        const mensaje = document.getElementById('mensaje');
        if (data.exito==true) {
            mensaje.textContent = data.mensaje;
            mensaje.style.color = 'green';
        } else {
            mensaje.textContent = 'Error: ' + data.mensaje;
            mensaje.style.color = 'red';
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Ocurrió un error al agregar el alumno');
    });
});