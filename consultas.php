<?php
// Conexión a la base de datos SQLite
$db = new SQLite3('escola.db');

// Verificar el tipo de consulta y ejecutar la consulta SQL correspondiente
if ($_GET['tipo'] === 'todos') {
    $query = "SELECT * FROM Alunos";
} elseif ($_GET['tipo'] === 'notas') {
    $query = "SELECT Nome, Nota FROM Alunos";
} elseif ($_GET['tipo'] === 'media') {
    $query = "SELECT AVG(Nota) AS Media FROM Alunos";
} elseif ($_GET['tipo'] === 'nota_mais_alta') {
    $query = "SELECT Nome, Nota FROM Alunos WHERE Nota = (SELECT MAX(Nota) FROM Alunos)";
}

// Ejecutar la consulta SQL
$resultado = $db->query($query);

// Preparar los resultados para retorno
$alumnos = [];
while ($row = $resultado->fetchArray(SQLITE3_ASSOC)) {
    $alumnos[] = $row;
}

// Devolver los resultados como JSON
header('Content-Type: application/json');
echo json_encode($alumnos);
?>
