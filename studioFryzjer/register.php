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
                
                $login_error = "Nazwa użytkownika jest zajęta";

            }else{

                if($password == $_POST['password_copy']){

                    $password = password_hash($password, PASSWORD_DEFAULT);
                    $email = $_POST['email'];
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){

                        // Rejestracja przebiegła pomyślnie
                        $mysqli->query("INSERT INTO `users` (`login`, `password`, `email`, `admin`) VALUES ('$login', '$password', '$email', '0')");
                        $_SESSION['zalogowano'] = 'true';
                        $_SESSION['user_name'] = $login;
                        $_SESSION['admin'] = false;
                        $_SESSION['login_show'] = true;
                        header('Location: index.php');
                        die();
                        
                    }else{
                        $login_error ="Wprowadzony email nie jest prawidłowy";
                    }

                }else{
                    $login_error = "Wprowadzone hasła nie sa jednakowe";
                }
                
                
            }

        }

    ?>



</head>
<body>

    <?php include 'components/menu.php' ?>

    <main class="d-f jc-c ai-c">
        <div class="login_form d-f jc-c"> 

            <?php if($login_error): ?>
                <div class="login_error d-f jc-c ai-c"><?php echo $login_error; ?></div>
            <?php endif; ?>

                <header class="login_header"> Studio Urody Trendy</header>
            <form action="register.php" method="POST">
                <input type="text" placeholder="login" name="login" required>
                <input type="text" placeholder="email" name="email" required>
                <input type="password" placeholder ="hasło" name="password" required>
                <input type="password" placeholder ="powtórz hasło" name="password_copy" required>

                <button class="bgcolor-3 d-f jc-c ai-c">Zarejestruj</button>
            </form>

            <div class="login_register">Masz już konto? Zaloguj się <a href="./login.php">tutaj</a></div>
                
        </div>
    </main>

    
</body>
</html>