<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    include 'config.php';

    if(isset($_POST['opiekun_id']) && isset($_POST['wizyta_id'])){

        $wizyta = $_POST['wizyta_id'];
        $opiekun = $_POST['opiekun_id'];

        $mysqli->query("UPDATE `wizyty` SET `opiekun_id` = '$opiekun' WHERE `id_wizyty` = '$wizyta'");

        $nowe = $mysqli->query("SELECT * FROM `wizyty` 
        INNER JOIN `typy_wizyt` ON wizyty.typ_wizyty=typy_wizyt.id 
        INNER JOIN `pracownicy` ON pracownicy.id = wizyty.opiekun_id 
        INNER JOIN `users` ON users.id = wizyty.user_id 
        WHERE `id_wizyty` = '$wizyta' LIMIT 1");
        $nowe = $nowe->fetch_assoc();

        $to = $nowe['email'];
        $subject = "Studio urody Trendy - Zaakceptowano wizytę";
        
        $message = "<b>Twoja wizyta na $nowe[Nazwa] została zaakceptowana</b>";
        $message .= "<u>Termin wizyty: $nowe[data] .</>";
        
        $header = "From:studiootrendy@gmail.com \r\n";
        $header .= "Cc:studiootrendy@gmail.com \r\n";
        $header .= "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html\r\n";
        
        mail ($to,$subject,$message,$header);

    

        $_SESSION['popup_show'] = true;
        $_SESSION['popup_text'] = 'Wizyta zaakceptowana';
        header('Location: panel_pracownika.php');



    }
?>