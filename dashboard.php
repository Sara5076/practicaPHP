<?php

session_start();

if(!isset($_SESSION['user'])){

header("Location: login.php");

}

?>

<h1>Zona privada</h1>

<?php

echo "Benvinguda " . $_SESSION['user'];

?>

<br><br>

<a href="logout.php">

Logout

</a>
