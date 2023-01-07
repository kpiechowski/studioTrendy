<?php 
session_start();
session_unset();
// echo "1";
$_SESSION['wylogowano'] = true; 

$_SESSION['popup_show'] = true;
$_SESSION['popup_text'] = 'Pomyślnie wylogowano';

header('Location: index.php');

?>