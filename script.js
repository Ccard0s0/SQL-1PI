function consultarAlunos() {
    fetch('consultas.php?tipo=todos')
    .then(response => response.json())
    .then(data => {
        // Actualizar el HTML para mostrar los resultados
        // Por ejemplo, podrías agregarlos a una tabla en el HTML
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

// Funciones similares para las demás consultas
