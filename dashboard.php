<?php

session_start();

if(!isset($_SESSION['user'])){

header("Location: index.php");

}

?>

<h1>Zona client TravelDream</h1>

Benvingut:

<?php

echo $_SESSION['user'];

?>

<br><br>

<a href="logout.php">Logout</a>
