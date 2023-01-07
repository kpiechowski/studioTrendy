<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/panel.css">
    <title>Studio Urody Trendy </title>
    <script src="scripts/wizyta.js"></script>

    <?php
    

        include 'config_styles.php'; 

        if(!isset($_SESSION['zalogowano'])){ 
            header('Location: login.php');
            die();
        }

        $date_now = getdate();
        $day_num = $date_now['wday'];
        $month_day = $date_now['mday'];
        $month = $date_now['mon'];
        $year = $date_now['year'];

        $days_pol = [ "Niedziela","Poniedziałek", "Wtorek", "Środa", "Czwartek", "Piątek", "Sobota"];
        $max_days = [
            '12' => 31,
            '1' => 31,
            '2' => 28
        ];
        
        // $wizyty = $mysqli->query();
        $generated_days = [];
        for($i=0; $i<21; $i++){
            
            $generated_days[]=$days_pol[$day_num];

            if($day_num==6){
                $day_num=-1;
            }
            $day_num++;
        }

        $max_day_num = $max_days[$month];
    ?>

</head>


<body>


    <?php include 'components/menu.php' ?>


    

    <main class="umow_panel d-f jc-c ai-c">
        <h1 class="color-3 front_h1">Wybierz pasujący Tobie termin!</h1>

        <div class="panel_days_container d-f  ai-c">
            <?php foreach($generated_days as $day): ?>
                <?php if(intval($month_day) < 10) $month_day = "0".$month_day; ?>

                <div class="panel_day_box" data-day="<?php echo $year; ?>-<?php echo $month; ?>-<?php echo $month_day; ?>">
                    <div class="wizyta_name"><?php echo $day; ?></div>
                    <div class="day_day color-3"><?php echo $month_day; ?></div>
                    <div class="wizyta_number"><?php echo $month; ?>.<?php echo $year; ?></div>
                    <div class="dodaj_wizyte d-f jc-c ai-c">+</div>
                </div>
            
                <?php
                if($month_day == $max_day_num){
                    $month_day = 0;
                    $month = ($month == 12) ? '01' : $month+1;
                    $year++;
                }
                $month_day++;
                


                ?>
            <?php endforeach; ?>
        </div>

    </main>



    <div class="umow_form">
        <div class="close_form">+</div>
        <header class="login_header"> Studio Urody Trendy</header>
        <h3 class="form_date">2022-12-12</h3>
        <form action="wizyta_send.php" method="POST">
                <label  for="type">Rodzaj wizyty:</label>

                <select name="type" id="type" required >
                    <option value="1">Strzyżenie krótkie</option>
                    <option value="2">Strzyżenie boków</option>
                    <option value="3">Skin fade</option>
                    <option value="4">Combo</option>
                    <option value="5">Dziecięce</option>
                    <option value="6">Długa klasyka</option>
                </select>

                <div id="hours_container"></div>
                <input type="checkbox" value="potwierdzenie" name="check" required> Potwierdzam termin wizyty<br>
                <input type="hidden" id="user_id" name="user_id" value="<?php echo $_SESSION['user_id']; ?>" />
                <input type="hidden" id="day_value" name="day_value" value="" />
                <button type="submit" class="d-f jc-c ai-c bgcolor-3">Umów wizytę</button>

        </form>
    </div>




    
</body>
</html>