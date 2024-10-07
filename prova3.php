<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nom = " ";
        $cognom = " ";
        $edat= " ";
    ?>

    <form>
        <label for="nom">Nom:</label>
        <input type="text" id="nom" name="nom" value="<?php echo $nom; ?>"><br><br>
        <label for="nom">Cognom:</label>
        <input type="text" id="cognom" name="cognom" value="<?php echo $cognom; ?>"><br><br>
        <label for="nom">Edat:</label>
        <input type="text" id="edat" name="edat" value="<?php echo $edat; ?>"><br><br>
    </form>
</body>
</html>