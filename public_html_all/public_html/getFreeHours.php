<?php 

include 'config.php';



if($id=$_GET['day_id']){
    // echo $id;

    $wizyty = $mysqli->query("SELECT * FROM `wizyty` WHERE `data` LIKE '$id%' ");
    // echo "SELECT * FROM `wizyty` WHERE `data` LIKE '$id%' ";

    $generated_hours = [];
    $occupied_hours = [];

    while ($row = $wizyty->fetch_assoc()){
        $w_data = explode(' ',$row['data']);
        $occupied_hours[] = $w_data[1];
    }


    for($i=8; $i <=19; $i++){
        $hour = $i;
        if($i < 10){
            $hour = "0".$i;
        }
        $hour = $hour.":00:00";
        if(!in_array($hour,$occupied_hours)){

            $generated_hours[] = $hour; 
        }

    }
    $res = json_encode($generated_hours);

    echo $res;
    
}



?>