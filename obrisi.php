<?php
require 'povezivanje.php';

if (isset($_GET['id'])) {
    $id = $connection->real_escape_string($_GET['id']);
    
    $query = "DELETE FROM tablica WHERE ID = $id";
    
    if ($connection->query($query) === TRUE) {
        header("Location: index.php");
        exit();
    } else {
        echo "Greška: " . $query . "<br>" . $connection->error;
    }
}
?>