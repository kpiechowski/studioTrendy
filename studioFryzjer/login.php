<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaloguj - Studio Trendy</title>

    <link rel="stylesheet" href="styles/login.css">
    <?php
    
        include 'config.php';
        include 'config_styles.php';

        $login_error = false;
        
        if (isset($_POST['login']) &&  isset($_POST['password'])){

            $password = $_POST['password'];
            $login = mysqli_real_escape_string($mysqli, $_POST['login']);

            $user = $mysqli -> query("SELECT * FROM `users` WHERE `login`='$login' LIMIT 1");

            
            if(mysqli_num_rows($user) == 1){

                $user_data = $user->fetch_assoc();
    
                if(password_verify($password, $user_data['password'])){

                    $_SESSION['zalogowano'] = 'true';
                    $_SESSION['user_name'] = $user_data['login'];
                    $_SESSION['user_id'] = $user_data['id'];
                    $_SESSION['admin'] = ($user_data['admin'] == 1) ? true : false;
                    $_SESSION['popup_show'] = true;
                    $_SESSION['popup_text'] = 'Pomyślnie zalogowano';
                    header('Location: index.php');
                    die();
    
                }else{
                   $login_error = true;
                }

            }else{
                $login_error = true;
            }

        }

    ?>



</head>
<body>

    <?php include 'components/menu.php' ?>

    <main class="d-f jc-c ai-c">
        <div class="login_form d-f jc-c"> 

            <?php if($login_error): ?>
                <div class="login_error d-f jc-c ai-c">Nieprawidłowe dane logowania</div>
            <?php endif; ?>

                <header class="login_header"> Studio Urody Trendy</header>
            <form action="login.php" method="POST">
                <input type="text" placeholder="login" name="login" required>
                <input type="password" placeholder ="hasło" name="password" required>

                <button class="bgcolor-3 d-f jc-c ai-c">Zaloguj</button>
            </form>

            <div class="login_register">Nie masz konta? Zarejestruj się <a href="./register.php">tutaj</a></div>
            <div class="login_register">Logowanie pracownika <a href="./logowanie_pracownika.php">tutaj</a></div>

                
        </div>
    </main>

    
</body>
</html>