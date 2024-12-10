<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Uređivanje književnog djela</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    require 'povezivanje.php';
    $id = intval($_GET['id']); // Sanitize ID input
    $query = "SELECT * FROM tablica WHERE ID = $id";
    $result = $connection->query($query);
    $row = $result->fetch_assoc();
    ?>
    <div class="container">
        <h1>Uređivanje književnog djela</h1>
        <form method="POST" action="spremi_izmjene.php">
            <input type="hidden" name="id" value="<?php echo $row['ID']; ?>">
            
            <label>Naslov djela:</label>
            <input type="text" name="naslov_djela" value="<?php echo htmlspecialchars($row['naslov_djela']); ?>" required>
            
            <label>Autor:</label>
            <input type="text" name="autor" value="<?php echo htmlspecialchars($row['autor']); ?>" required>
            
            <label>Godina izdanja:</label>
            <input type="number" name="godina_izdanja" 
                   value="<?php echo htmlspecialchars($row['godina_izdanja'] ?? ''); ?>">
            
            <label>Kratak sadržaj:</label>
            <textarea name="kratak_sadrzaj" required><?php echo htmlspecialchars($row['kratak_sadrzaj']); ?></textarea>
            
            <label>Vrsta djela:</label>
            <select name="vrsta_djela" required>
                <option value="roman" <?php echo ($row['vrsta_djela'] == 'roman' ? 'selected' : ''); ?>>Roman</option>
                <option value="pripovjetka" <?php echo ($row['vrsta_djela'] == 'pripovjetka' ? 'selected' : ''); ?>>Pripovjetka</option>
                <option value="drama" <?php echo ($row['vrsta_djela'] == 'drama' ? 'selected' : ''); ?>>Drama</option>
                <option value="poezija" <?php echo ($row['vrsta_djela'] == 'poezija' ? 'selected' : ''); ?>>Poezija</option>
                <option value="novela" <?php echo ($row['vrsta_djela'] == 'novela' ? 'selected' : ''); ?>>Novela</option>
            </select>
            
            <label>Tema djela:</label>
            <input type="text" name="tema_djela" value="<?php echo htmlspecialchars($row['tema_djela']); ?>" required>
            
            <label>Glavni likovi:</label>
            <textarea name="glavni_likovi" required><?php echo htmlspecialchars($row['glavni_likovi']); ?></textarea>
            
            <label>Citati:</label>
            <textarea name="citati"><?php echo htmlspecialchars($row['citati'] ?? ''); ?></textarea>
            
            <label>Kompozicija djela:</label>
            <textarea name="kompozicija_djela" required><?php echo htmlspecialchars($row['kompozicija_djela']); ?></textarea>
            
            <label>Književna vrsta:</label>
            <input type="text" name="knjizevna_vrsta" value="<?php echo htmlspecialchars($row['knjizevna_vrsta']); ?>" required>
            
            <label>Književno razdoblje:</label>
            <input type="text" name="knjizevno_razdoblje" value="<?php echo htmlspecialchars($row['knjizevno_razdoblje']); ?>" required>
            
            <label>Stilska sredstva:</label>
            <textarea name="stilska_sredstva" required><?php echo htmlspecialchars($row['stilska_sredstva']); ?></textarea>
            
            <label>Jezično-stilska analiza:</label>
            <textarea name="jezicno_stilska_analiza" required><?php echo htmlspecialchars($row['jezicno_stilska_analiza']); ?></textarea>
            
            <label>Povijesni kontekst:</label>
            <textarea name="povijesni_kontekst" required><?php echo htmlspecialchars($row['povijesni_kontekst']); ?></textarea>
            
            <label>Osobni osvrt:</label>
            <textarea name="osobni_osvrt"><?php echo htmlspecialchars($row['osobni_osvrt'] ?? ''); ?></textarea>
            
            <input type="submit" value="Pohrani izmjene" class="btn">
        </form>
    </div>
</body>
</html>