<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    include 'config.php';

    if((isset($_POST['user_id']) || isset($_POST['opiekun_id']) ) && isset($_POST['wizyta_id'])){
        $wizyta = $_POST['wizyta_id'];

        if(isset($_POST['opiekun_id'])){

            $mysqli->query("UPDATE `wizyty` SET `opiekun_id` = 0 WHERE `id_wizyty` = '$wizyta'");

            $_SESSION['popup_show'] = true;
            $_SESSION['popup_text'] = 'Anulowano wizytę';
            header('Location: panel_pracownika.php');

        }else{

            $mysqli->query("DELETE FROM `wizyty` WHERE `id_wizyty` = '$wizyta'");

            $_SESSION['popup_show'] = true;
            $_SESSION['popup_text'] = 'Anulowano wizytę';
            header('Location: moje_wizyty.php');
        }

        
    }
?>