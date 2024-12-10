<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <title>Unos novog djela</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Unos novog književnog djela</h1>
        <form method="POST" action="spremi_knjigu.php">
            <label>Naslov djela:</label>
            <input type="text" name="naslov_djela" required>
            
            <label>Autor:</label>
            <input type="text" name="autor" required>
            
            <label>Godina izdanja:</label>
            <input type="number" name="godina_izdanja">
            
            <label>Kratak sadržaj:</label>
            <textarea name="kratak_sadrzaj" required></textarea>
            
            <label>Vrsta djela:</label>
            <select name="vrsta_djela" required>
                <option value="">Odaberi vrstu</option>
                <option value="roman">Roman</option>
                <option value="pripovjetka">Pripovjetka</option>
                <option value="drama">Drama</option>
                <option value="poezija">Poezija</option>
                <option value="novela">Novela</option>
            </select>
            
            <label>Tema djela:</label>
            <input type="text" name="tema_djela" required>
            
            <label>Glavni likovi:</label>
            <textarea name="glavni_likovi" required></textarea>
            
            <label>Citati:</label>
            <textarea name="citati"></textarea>
            
            <label>Kompozicija djela:</label>
            <textarea name="kompozicija_djela" required></textarea>
            
            <label>Književna vrsta:</label>
            <input type="text" name="knjizevna_vrsta" required>
            
            <label>Književno razdoblje:</label>
            <input type="text" name="knjizevno_razdoblje" required>
            
            <label>Stilska sredstva:</label>
            <textarea name="stilska_sredstva" required></textarea>
            
            <label>Jezično-stilska analiza:</label>
            <textarea name="jezicno_stilska_analiza" required></textarea>
            
            <label>Povijesni kontekst:</label>
            <textarea name="povijesni_kontekst" required></textarea>
            
            <label>Osobni osvrt:</label>
            <textarea name="osobni_osvrt"></textarea>
            
            <input type="submit" value="Spremi" class="btn">
        </form>
    </div>
</body>
</html>