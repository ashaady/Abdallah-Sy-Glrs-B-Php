<!-- view/consultation/add.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Ajouter une consultation</title>
</head>
<body>
    <h1>Ajouter une consultation</h1>
    <form method="post" action="index.php?action=addConsultation">
        <label>Médecin:</label>
        <input type="text" name="medecin" required><br>
        <label>Médicaments (séparés par des virgules):</label>
        <input type="text" name="medicament" required><br>
        <input type="submit" value="Ajouter">
    </form>
</body>
</html>
