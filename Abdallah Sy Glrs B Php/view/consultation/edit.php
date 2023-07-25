<!-- view/patient/edit.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Modifier le patient</title>
</head>
<body>
    <h1>Modifier le patient</h1>
    <form method="post" action="index.php?action=editPatient&id=<?php echo $patient['id']; ?>">
        <label>Nom complet:</label>
        <input type="text" name="nomComplet" value="<?php echo $patient['nomComplet']; ?>" required><br>
        <label>Adresse:</label>
        <input type="text" name="adresse" value="<?php echo $patient['adresse']; ?>"><br>
        <label>Numéro de téléphone:</label>
        <input type="text" name="numeroTelephone" value="<?php echo $patient['numeroTelephone']; ?>" required><br>
        <input type="submit" value="Enregistrer">
    </form>
</body>
</html>
