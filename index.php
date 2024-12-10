<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Knjižnica lektirnih djela</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .table-container {
            overflow-x: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Knjižnica lektirnih djela</h1>
        <div class="actions">
            <a href="unos.php" class="btn">Unos novog djela</a>
            
            <form method="GET" class="search-form">
                <input type="text" name="pretraga" placeholder="Pretraži autora ili naslov">
                <select name="filter_vrsta">
                    <option value="">Sve vrste</option>
                    <option value="roman">Roman</option>
                    <option value="drama">Drama</option>
                    <option value="poezija">Poezija</option>
                    <option value="novela">Novela</option>
                </select>
                <input type="submit" value="Pretraži" class="btn">
            </form>
        </div>
        
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Naslov djela</th>
                        <th>Autor</th>
                        <th>Godina izdanja</th>
                        <th>Kratak sadržaj</th>
                        <th>Vrsta djela</th>
                        <th>Tema djela</th>
                        <th>Glavni likovi</th>
                        <th>Citati</th>
                        <th>Kompozicija djela</th>
                        <th>Akcije</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require 'povezivanje.php';
                    
                    $query = "SELECT * FROM tablica WHERE 1=1";
                    $params = [];
                    $types = '';

                    if (isset($_GET['pretraga']) && !empty($_GET['pretraga'])) {
                        $query .= " AND (autor LIKE ? OR naslov_djela LIKE ?)";
                        $search_term = "%" . $_GET['pretraga'] . "%";
                        $params[] = &$search_term;
                        $params[] = &$search_term;
                        $types .= 'ss';
                    }

                    if (isset($_GET['filter_vrsta']) && !empty($_GET['filter_vrsta'])) {
                        $query .= " AND vrsta_djela = ?";
                        $params[] = &$_GET['filter_vrsta'];
                        $types .= 's';
                    }

                    $stmt = $connection->prepare($query);
                    if (!empty($params)) {
                        $stmt->bind_param($types, ...$params);
                    }
                    $stmt->execute();
                    $result = $stmt->get_result();

                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row['ID']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['naslov_djela']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['autor']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['godina_izdanja'] ?? 'N/A') . "</td>";
                        echo "<td>" . (strlen($row['kratak_sadrzaj']) > 50 ? 
                            htmlspecialchars(substr($row['kratak_sadrzaj'], 0, 50) . '...') : 
                            htmlspecialchars($row['kratak_sadrzaj'])) . "</td>";
                        echo "<td>" . htmlspecialchars($row['vrsta_djela']) . "</td>";
                        echo "<td>" . htmlspecialchars($row['tema_djela']) . "</td>";
                        echo "<td>" . (strlen($row['glavni_likovi']) > 50 ? 
                            htmlspecialchars(substr($row['glavni_likovi'], 0, 50) . '...') : 
                            htmlspecialchars($row['glavni_likovi'])) . "</td>";
                        echo "<td>" . (!empty($row['citati']) ? 
                            (strlen($row['citati']) > 50 ? 
                            htmlspecialchars(substr($row['citati'], 0, 50) . '...') : 
                            htmlspecialchars($row['citati'])) : 'N/A') . "</td>";
                        echo "<td>" . (strlen($row['kompozicija_djela']) > 50 ? 
                            htmlspecialchars(substr($row['kompozicija_djela'], 0, 50) . '...') : 
                            htmlspecialchars($row['kompozicija_djela'])) . "</td>";
                        echo '<td>';
                        echo '<a href="uredi.php?id=' . $row['ID'] . '" class="btn">Uredi</a> ';
                        echo '<a href="obrisi.php?id=' . $row['ID'] . '" class="btn delete" onclick="return confirm(\'Jeste li sigurni?\')">Obriši</a>';
                        echo '</td>';
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>