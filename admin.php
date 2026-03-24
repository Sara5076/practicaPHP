<?php

session_start();

if($_SESSION['rol']!="admin"){

header("Location: index.php");

}

?>

<h1>Zona administrador</h1>

Admin:

<?php

echo $_SESSION['user'];

?>

<br><br>

<a href="logout.php">Logout</a>
