
<header class="d-f ai-c main_header"> 

    <div class="logo color-3">Studio Urody <span class="trendy">Trendy</span></div>

    <div id="menu" class="d-f jc-c ai-c color-3"> 
        <div class="menu_active jc-c ai-c">
            MENU
        </div>
        <nav><a href="./index.php">Strona główna</a></nav>
        <nav><a href="./index.php#about_us">O nas</a> </nav>
        <nav><a href="./index.php#foto_section">Nasze prace</a></nav>  
        <nav><a href="./index.php#footer">Kontakt</a></nav>

        <div class="nav_border"></div>

        <?php if(isset($_SESSION['zalogowano'])): ?>

                <?php if($_SESSION['admin'] == 1): ?>
                    <nav><a href="panel_pracownika.php">Panel wizyt</a></nav>
                <?php else :?>
                    <nav><a href="umow_wizyte.php">Umów wizytę</a></nav>
                    <nav><a href="moje_wizyty.php">Moje wizyty</a></nav>
                <?php endif; ?>

                <nav class="user_nav d-f jc-c ai-c"> 
                    Witaj,  <?php echo $_SESSION['user_name']; ?> 
                    <a href="./wyloguj.php"><img src="./imgs/logout.png" alt="logout" loading="laazy"></a>
                </nav>

        <?php else: ?>

                <nav class="login_nav"><a href="./login.php">Zaloguj</a></nav>

        <?php endif; ?>
    </div>

    




</header>