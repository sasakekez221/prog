<?php
require 'povezivanje.php';

$id = intval($_GET['id']); // Sanitize ID input
$query = "SELECT citati FROM tablica WHERE ID = $id";
$result = $connection->query($query);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Citati</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Citati</h1>
        <p><?php echo htmlspecialchars($row['citati']); ?></p>
        <a href="index.php" class="btn">Povratak na popis</a>
    </div>
</body>
</html>