<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo POO</title>
</head>
<body>
    <h1>Gestion de chats</h1>
    <h2>Tout les chats</h2>
    <ul>
        <?php 
            foreach($cats as $cat) {
                echo "<li>" . $cat->getName() . " : " . $cat->getColor() . "</li>";
            }
        ?>
    </ul>
    <h3>Ajouter un chat</h3>
    <form action="" method="POST">
        <div>
        <label for="name">Nom :</label>
            <input type="text" name="name">
        </div>
        <div>
        <label for="age">Age :</label>
            <input type="number" name="age">
        </div>
        <div>
        <label for="color">Couleur :</label>
            <input type="text" name="color">
        </div>
        <div>
        <label for="sexe">Sexe :</label>
            <input type="text" name="sexe">
        </div>
        <div>
            <input type="submit" name="newCat" value="Enregister">
        </div>
    </form>
</body>
</html>