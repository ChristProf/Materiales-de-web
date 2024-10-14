document.getElementById('formBuscar').addEventListener('submit', function(e) {
    e.preventDefault();
    const ci = document.getElementById('ci').value;
    
    fetch('../controller/controlador.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'accion=buscar&ci=' + encodeURIComponent(ci)
    })
    .then(response => response.json())
    .then(data => {
        const tabla = document.getElementById('tablaAlumno');
        const tbody = tabla.querySelector('tbody');
        const mensajeError = document.getElementById('mensajeError');
        
        tbody.innerHTML = '';
        mensajeError.style.display = 'none';
        
        if (data.alumno) {

            document.querySelector('.table-container').style.display = 'block';
            const row = document.createElement('tr');
            row.innerHTML = `
                <td>${data.alumno.ci}</td>
                <td>${data.alumno.nombre}</td>
                <td>${data.alumno.apellido}</td>
            `;
            tbody.appendChild(row);
            tabla.style.display = 'table';
        } else if (!data.exito) {
            mensajeError.textContent = 'Error: ' + data.mensaje;
            mensajeError.style.display = 'block';
            tabla.style.display = 'none';
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Ocurrió un error al buscar el alumno');
    });
});