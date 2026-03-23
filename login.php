<?php

session_start();

?>

<!DOCTYPE html>

<html>

<body>

<h1>Login usuaris</h1>

<form method="POST">

Usuari:

<input type="text" name="user">

<br><br>

Password:

<input type="password" name="pass">

<br><br>

<input type="submit">

</form>

<?php

if($_POST){

$user = $_POST['user'];

$pass = $_POST['pass'];

if($user == "sara" && $pass == "1234"){

$_SESSION['user'] = $user;

header("Location: dashboard.php");

}else{

echo "Login incorrecte";

}

}

?>
