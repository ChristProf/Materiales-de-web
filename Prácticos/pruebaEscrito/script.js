document.addEventListener('DOMContentLoaded', () => {
    const fetchHerramientas = () => {
        fetch('backend.php')
            .then(response => response.json())
            .then(data => {
                const tabla = document.querySelector('#herramientasTabla tbody');
                tabla.innerHTML = '';
                data.forEach(herramienta => {
                    const fila = `
                        <tr>
                            <td>${herramienta.id}</td>
                            <td>${herramienta.nombre}</td>
                            <td>${herramienta.tipo}</td>
                            <td>${herramienta.tamaño}</td>
                            <td>${herramienta.dueño}</td>
                        </tr>
                    `;
                    tabla.innerHTML += fila;
                });
            });
    };

    fetchHerramientas();

    document.querySelector('#actualizar').addEventListener('click', fetchHerramientas);
});