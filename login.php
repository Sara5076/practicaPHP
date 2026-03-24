<?php

session_start();

include("db.php");

if($_POST){

$user=$_POST['user'];

$pass=$_POST['pass'];

$sql="SELECT * FROM usuaris WHERE username='$user' AND password='$pass'";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==1){

$row=mysqli_fetch_assoc($result);

$_SESSION['user']=$row['username'];

$_SESSION['rol']=$row['rol'];

if($row['rol']=="admin"){

header("Location: admin.php");

}else{

header("Location: dashboard.php");

}

}else{

echo "Login incorrecte";

}

}

?>

<h2>Login TravelDream</h2>

<form method="POST">

Usuari:

<input name="user">

<br><br>

Password:

<input type="password" name="pass">

<br><br>

<input type="submit" value="Login">

</form>

<br>

<a href="index.php">Tornar</a>
