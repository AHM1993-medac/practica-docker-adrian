<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Práctica Docker</title>
</head>
<body>
 
<h1>Docker + PHP + MySQL</h1>
 
<?php
 
$host = "db";
$dbname = "practicas";
$user = "alumno";
$pass = "alumno";
 
try {
 
$pdo = new PDO(
"mysql:host=$host;dbname=$dbname",
$user,
$pass
);
 
echo "<p>✅ Conexión correcta con MySQL.</p>";
 
} catch (PDOException $e) {
 
echo "<p>❌ Error de conexión: "
. $e->getMessage() .
"</p>";
 
}
 
?>
 
</body>
</html>