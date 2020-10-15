<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atelier POO</title>
</head>
<body>
    <h1>Application de gestion des étudiants</h1>
    <h2>Liste des étudiants</h2>
    <ul>
        <?php 
            foreach($students as $student) {
                echo "<li>" . $student->getId(). " : " . $student->getFirstname() . "</li>";
            }
        ?>
    </ul>
    <h3>Enregistrer un étudiant</h3>
    <form action="" method="POST">
        <div>
            <input type="text" name="firstname">
        </div>
        <div>
            <input type="number" name="age">
        </div>
        <div>
            <input type="submit" name="newStudent" value="Enregister">
        </div>
    </form>
</body>
</html>