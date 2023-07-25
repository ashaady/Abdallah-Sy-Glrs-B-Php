<!-- view/patient/add.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un patient</title>
</head>
<body>
    <h1>Ajouter un patient</h1>
    <form method="post" action="index.php?action=addPatient">
        <label>Nom complet:</label>
        <input type="text" name="nomComplet" required><br>
        <label>Adresse:</label>
        <input type="text" name="adresse"><br>
        <label>Numéro de téléphone:</label>
        <input type="text" name="numeroTelephone" required><br>
        <input type="submit" value="Ajouter">
    </form>
</body>
</html>
