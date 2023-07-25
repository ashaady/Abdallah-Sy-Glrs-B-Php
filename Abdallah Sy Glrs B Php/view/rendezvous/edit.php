<!-- view/consultation/edit.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Modifier la consultation</title>
</head>
<body>
    <h1>Modifier la consultation</h1>
    <form method="post" action="index.php?action=editConsultation&id=<?php echo $consultation['id']; ?>">
        <label>Médecin:</label>
        <input type="text" name="medecin" value="<?php echo $consultation['medecin']; ?>" required><br>
        <label>Médicaments (séparés par des virgules):</label>
        <input type="text" name="medicament" value="<?php echo $consultation['medicament']; ?>" required><br>
        <input type="submit" value="Enregistrer">
    </form>
</body>
</html>
