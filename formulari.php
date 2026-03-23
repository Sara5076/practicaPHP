<!DOCTYPE html>

<html>

<body>

<h1>Formulari PHP</h1>

<form method="POST">

Nom:

<input type="text" name="nom">

<br><br>

Email:

<input type="text" name="email">

<br><br>

<input type="submit" value="Enviar">

</form>

<?php

if($_POST){

$nom = $_POST['nom'];

$email = $_POST['email'];

echo "Nom introduït: " . $nom . "<br>";

echo "Email introduït: " . $email;

}

?>

<br><br>

<a href="login.php">

Anar al login

</a>

</body>

</html>
