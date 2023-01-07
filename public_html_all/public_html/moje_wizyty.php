<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/panel.css">
    <title>Studio Urody Trendy </title>


    <?php
    
        include 'config_styles.php'; 

        if(!isset($_SESSION['zalogowano'])){ 
            header('Location: login.php');
            die();
        }

        $date_now = date("Y-m-d H:i:s");
        $u_id = $_SESSION['user_id'];

        $last = $mysqli->query("SELECT * FROM `wizyty` INNER JOIN 
        `typy_wizyt` ON wizyty.typ_wizyty=typy_wizyt.id
        INNER JOIN `pracownicy` ON pracownicy.id = wizyty.opiekun_id
         WHERE  `data` < '$date_now' AND `user_id` = '$u_id' ORDER BY `data` DESC LIMIT 1");
        
        $last = (mysqli_num_rows($last) == 1) ? $last->fetch_assoc() : false;
        // print_r($last);

        
        // echo $last['data'];
        

        $upcoming = $mysqli->query("SELECT * FROM `wizyty` INNER JOIN 
        `typy_wizyt` ON wizyty.typ_wizyty=typy_wizyt.id
        INNER JOIN `pracownicy` ON pracownicy.id = wizyty.opiekun_id
         WHERE  `data` >'$date_now' AND `user_id` = '$u_id'  ORDER BY `data` ASC");

         



    ?>

</head>


<body class="wizyty-bg ">

    <?php if(isset($_SESSION['popup_show'])): ?>
        <?php unset($_SESSION['popup_show']); ?>
        <div class=" jc-c ">
            <div class="login_popup d-f jc-c ai-c">
            <?php echo $_SESSION['popup_text'];?>
            </div>
        </div>

    <?php endif;?>


    <?php include 'components/menu.php' ?>


    

    <main class="umow_panel d-f jc-c ai-c">
        
    <h2 class="color-3">Twoja ostatnia wizyta:</h2> 
    
    <?php if($last): ?>

        <?php
            $last_data = strtotime($last['data']);
            $last_data = getDate($last_data);    
        ?>
        <div class="row_container">
            <div class="wizyta_row d-f jc-c ai-c">
                <div class="day_cont ">
                    <div class="day_day color-3">
                        <?php echo (intval($last_data['mday']) < 10 ) ? "0".$last_data['mday'] : $last_data['mday'] ; ?>
                    </div>
                    <div class="day_rest">
                        <?php echo (intval($last_data['mon']) < 10 ) ? "0".$last_data['mon'] : $last_data['mon'] ; echo"-".$last_data['year']; ?>
                    </div>
                </div>

                <div class="row_info d-f">
                    <div class="row_info_hour"> Godzina: <?php echo substr($last['data'],11,-3) ;?></div>
                    <div class="row_info_type">Rodzaj wizyty: <?php echo $last['Nazwa'] ;?></div>
                    <div class="row_info_opiekun">Pracownik: <?php echo $last['Nazwa_pracownika'] ;?></div>
                </div>

            </div>
        </div>
    <?php else : ?>
        <b> Brak ostatnich wizyt</b> 
    <?php endif; ?>

    <h2 class="color-3">Nadchodzace wizyty</h2>

    <?php if(mysqli_num_rows($upcoming) > 0): ?>

    <div class="row_container row_container_full">

        <?php //echo ;

        ?>

        <?php while($row = $upcoming->fetch_assoc()): ?>

            <?php 
            // print_r($row);
            $row_day = strtotime($row['data']);
            $row_day = getDate($row_day);


            ?>


            <div class="wizyta_row _full d-f  ai-c">
                <div class="day_cont ">
                    <div class="day_day color-3">
                        <?php echo (intval($row_day['mday']) < 10 ) ? "0".$row_day['mday'] : $row_day['mday'] ; ?>
                    </div>
                    <div class="day_rest">
                        <?php echo (intval($row_day['mon']) < 10 ) ? "0".$row_day['mon'] : $row_day['mon'] ; echo"-".$row_day['year']; ?>
                    </div>
                </div>

                <div class="row_body d-f ai-c">

                    <div class="row_info d-f">
                        <div class="row_info_hour">Godzina: <?php echo substr($row['data'],11,-3) ;?></div>
                        <div class="row_info_type">Rodzaj wizyty: <?php echo $row['Nazwa'] ;?></div>
                        <div class="row_info_opiekun">Pracownik: <?php echo $row['Nazwa_pracownika'] ;?></div>
                    </div>

                    <div class="row_status d-f">
                        <div class="row_status_txt">
                            Status:<br>
                            <?php echo (!empty($row['Nazwa_pracownika'])) ? "<b>Zaakceptowana</b>" : "<b>Oczekuje</b>"; ?>
                        </div>

                    </div>

                    <form action="anuluj.php" method="POST">
                        <input type="hidden" name="user_id" value="<?php echo $u_id; ?>">
                        <input type="hidden" name="wizyta_id" value="<?php echo $row['id_wizyty']; ?>">
                        <button type="submit" class="wizyta_delete d-f jc-c ai-c bgcolor-3 color-2">
                            Anuluj wizytę    
                        </button>
                    </form>

                </div>

        </div>

        <?php endwhile; ?>

    </div>

    <?php else: ?>
        <b> Brak umówionych wizyt</b> 
    <?php endif; ?>


    </main>





    
</body>
</html>