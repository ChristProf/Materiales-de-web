document.addEventListener('DOMContentLoaded', function() {
    fetch('../controller/controlador.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'accion=listar'
    })
    .then(response => response.json())
    .then(data => {
        if (data.alumnos) {
            const tbody = document.querySelector('#tablaAlumnos tbody');
            data.alumnos.forEach(alumno => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${alumno.ci}</td>
                    <td>${alumno.nombre}</td>
                    <td>${alumno.apellido}</td>
                `;
                tbody.appendChild(row);
            });
        } else if (data.error) {
            alert('Error: ' + data.error);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Ocurrió un error al cargar los datos');
    });
});