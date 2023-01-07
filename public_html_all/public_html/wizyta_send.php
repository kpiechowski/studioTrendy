<?php

include 'config.php';

if($_POST['check'] && $_POST['user_id']){

    $typ = $_POST['type'];
    $data = $_POST['day_value'].' '.$_POST['hours'];
    $user_id = $_POST['user_id'];

    $mysqli->query("INSERT INTO `wizyty` (`typ_wizyty`, `user_id`, `data`, `opiekun_id`) 
    VALUES ('$typ', '$user_id', '$data', '0')");

    $_SESSION['popup_show'] = true;
    $_SESSION['popup_text'] = 'Pomyślnie umówiono';
    header('Location: index.php');
    die();
}

?>
