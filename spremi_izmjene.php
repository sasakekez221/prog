<?php
require 'povezivanje.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and escape all inputs
    $id = intval($_POST['id']); // Ensure ID is an integer
    $naslov_djela = $connection->real_escape_string($_POST['naslov_djela']);
    $autor = $connection->real_escape_string($_POST['autor']);
    $godina_izdanja = !empty($_POST['godina_izdanja']) ? intval($_POST['godina_izdanja']) : null;
    $kratak_sadrzaj = $connection->real_escape_string($_POST['kratak_sadrzaj']);
    $vrsta_djela = $connection->real_escape_string($_POST['vrsta_djela']);
    $tema_djela = $connection->real_escape_string($_POST['tema_djela']);
    $glavni_likovi = $connection->real_escape_string($_POST['glavni_likovi']);
    $citati = !empty($_POST['citati']) ? $connection->real_escape_string($_POST['citati']) : null;
    $kompozicija_djela = $connection->real_escape_string($_POST['kompozicija_djela']);
    $knjizevna_vrsta = $connection->real_escape_string($_POST['knjizevna_vrsta']);
    $knjizevno_razdoblje = $connection->real_escape_string($_POST['knjizevno_razdoblje']);
    $stilska_sredstva = $connection->real_escape_string($_POST['stilska_sredstva']);
    $jezicno_stilska_analiza = $connection->real_escape_string($_POST['jezicno_stilska_analiza']);
    $povijesni_kontekst = $connection->real_escape_string($_POST['povijesni_kontekst']);
    $osobni_osvrt = !empty($_POST['osobni_osvrt']) ? $connection->real_escape_string($_POST['osobni_osvrt']) : null;

    // Construct the query
    $query = "UPDATE tablica SET 
        naslov_djela = '$naslov_djela', 
        autor = '$autor', 
        godina_izdanja = " . ($godina_izdanja ? $godina_izdanja : "NULL") . ", 
        kratak_sadrzaj = '$kratak_sadrzaj', 
        vrsta_djela = '$vrsta_djela', 
        tema_djela = '$tema_djela', 
        glavni_likovi = '$glavni_likovi', 
        citati = " . ($citati ? "'$citati'" : "NULL") . ", 
        kompozicija_djela = '$kompozicija_djela', 
        knjizevna_vrsta = '$knjizevna_vrsta', 
        knjizevno_razdoblje = '$knjizevno_razdoblje', 
        stilska_sredstva = '$stilska_sredstva', 
        jezicno_stilska_analiza = '$jezicno_stilska_analiza', 
        povijesni_kontekst = '$povijesni_kontekst', 
        osobni_osvrt = " . ($osobni_osvrt ? "'$osobni_osvrt'" : "NULL") . "
        WHERE ID = $id";
    
    // Execute the query
    if ($connection->query($query) === TRUE) {
        // Redirect to index page on successful update
        header("Location: index.php");
        exit();
    } else {
        // Display error if query fails
        echo "Greška: " . $query . "<br>" . $connection->error;
    }
}
?>