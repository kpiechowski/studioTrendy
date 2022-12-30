<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css">
    <title>Studio Urody Trendy </title>

    <?php
    
        include 'config.php'; 
        include 'config_styles.php'; 

    
    ?>

</head>


<body class="special-bg">

    <?php if(isset($_SESSION['popup_show'])): ?>
        <?php unset($_SESSION['popup_show']); ?>
        <div class="login_cover jc-c ">
            <div class="login_popup d-f jc-c ai-c">
            <?php echo $_SESSION['popup_text'];?>
            </div>
        </div>

    <?php endif;?>

    <?php include 'components/menu.php' ?>
    
    <div class="main_container d-f jc-c ai-c">
    <main class="d-f ai-c front_page">

        <div class="front_info d-f ">
            <h1 class="color-3 front_h1">Umów swoją wizytę w 5 minut!</h1>
            <div class="front_desc">Wspaniałe włosy nie zdarzają się przez przypadek, zdarzają się przez umówienie!</div>
            <div class="front_desc">Wizyta w profesjonalnym slaonie fryzjerskim 
                <span class="trendy">Trendy</span> czeka właśnie na Ciebie!</div>
            <div class="front_desc">Zainwestuj w swoje włosy. To korona, której nigdy nie zdejmiesz.</div>

            <a href="umow_wizyte.php" class="front_button bgcolor-3 d-f jc-c ai-c">Umów wizytę</a>

        </div>
        <div class="front_img">
            <img src="./imgs/main_side.jpg" alt loading="lazy">
        </div>


    </main>
    </div>

    <section class="sep_section d-f jc-c ai-c bgcolor-3">
        Jesteśmy otwarci: pon-pt&nbsp;-&nbsp;8:00&nbsp;-&nbsp;20:00 | sob&nbsp;-&nbsp;8:00&nbsp;-&nbsp;18:00 
    </section>

    <section class="team" id="about_us">

    <h2 class="color-3 front_h1">Zespoły istnieją po to, aby realizowały wspólny cel</h2>
    <div class="front_desc">Naszym wspólnym celem jest zadbanie o Twoje włosy. Doświadczony zespół wraz narzędzami najlepszej jakości jest w stanie zagwarantować ... Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, nobis ratione inventore libero reiciendis maiores voluptas, accusantium autem ex ad amet aperiam voluptate magni eligendi, rem laboriosam obcaecati distinctio ipsam!</div>
    <div class="d-f  ai-c content_photo">
        <div class="img_container">
            <img src="./imgs/content_side.jpg"  loading="lazy" width="640" height="940">
        </div>
        <div class="content_text">

            <h2 class="color-3 front_h1">Jesteśmy wzorem jakości!</h2>
            <div class="front_desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, nobis ratione inventore libero reiciendis maiores voluptas, accusantium autem ex ad amet aperiam voluptate magni 
            <br><br>
            Officiis, nobis ratione inventore libero reiciendis maiores voluptas, accusantium autem ex ad amet aperiam voluptate magni eligendi, rem laboriosam obcaecati distinctio ipsam!
            <br><br>
            eligendi, rem laboriosam obcaecati distinctio ipsam!
            </div>
    
        </div>
    </div>
    </section>


    <section class="sep_section d-f jc-c ai-c bgcolor-3">
        Poznaj naszych pracowników
    </section>

    <section class="pracownicy_section">

        <div class="pracownicy_cont d-f ai-c jc-c">

            <div class="pracownik_box d-f ai-c">
                <div class="pracownik_img d-f jc-c ai-c">
                    <img src="./imgs/placeholder.png" alt>
                </div>
                <div class="pracownik_info ">
                    <div class="pracownik_name color-3 front_h1">Pracownik Nazwisko</div>
                    <div class="pracownik_desc ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores voluptas, accusantium autem ex ad</div>
                </div>
            </div>

            <div class="pracownik_box d-f ai-c">
                <div class="pracownik_img d-f jc-c ai-c">
                    <img src="./imgs/placeholder.png" alt>
                </div>
                <div class="pracownik_info ">
                    <div class="pracownik_name color-3 front_h1">Pracownik Nazwisko</div>
                    <div class="pracownik_desc ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, nobis ratione inventore libero reiciendis maiores voluptas, accusantium autem ex ad</div>
                </div>
            </div>

            <div class="pracownik_box d-f ai-c">
                <div class="pracownik_img d-f jc-c ai-c">
                    <img src="./imgs/placeholder.png" alt>
                </div>
                <div class="pracownik_info ">
                    <div class="pracownik_name color-3 front_h1">Pracownik Nazwisko</div>
                    <div class="pracownik_desc ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, nobis ratione inventore libero reiciendis maiores voluptas, accusantium autem ex ad</div>
                </div>
            </div>

            <div class="pracownik_box d-f ai-c">
                <div class="pracownik_img d-f jc-c ai-c">
                    <img src="./imgs/placeholder.png" alt>
                </div>
                <div class="pracownik_info ">
                    <div class="pracownik_name color-3 front_h1">Pracownik Nazwisko</div>
                    <div class="pracownik_desc ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, nobis ratione inventore maiores voluptas, accusantium autem ex ad</div>
                </div>
            </div>

            <div class="pracownik_box d-f ai-c">
                <div class="pracownik_img d-f jc-c ai-c">
                    <img src="./imgs/placeholder.png" alt>
                </div>
                <div class="pracownik_info ">
                    <div class="pracownik_name color-3 front_h1">Pracownik Nazwisko</div>
                    <div class="pracownik_desc ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, nobis ratione inventore libero reiciendis maiores voluptas, accusantium autem ex ad</div>
                </div>
            </div>

            <div class="pracownik_box d-f ai-c">
                <div class="pracownik_img d-f jc-c ai-c">
                    <img src="./imgs/placeholder.png" alt>
                </div>
                <div class="pracownik_info ">
                    <div class="pracownik_name color-3 front_h1">Pracownik Nazwisko</div>
                    <div class="pracownik_desc ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, nobis ratione inventore libero reiciendis maiores voluptas, accusantium autem ex ad</div>
                </div>
            </div>

            <div class="pracownik_box d-f ai-c">
                <div class="pracownik_img d-f jc-c ai-c">
                    <img src="./imgs/placeholder.png" alt>
                </div>
                <div class="pracownik_info ">
                    <div class="pracownik_name color-3 front_h1">Pracownik Nazwisko</div>
                    <div class="pracownik_desc ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis,  reiciendis maiores voluptas, accusantium autem ex ad</div>
                </div>
            </div>



        </div>

    </section>


    <section class="special-bg nasze_prace" id="foto_section">

        <h2 class="front_h1 color-3">Zobacz nasze prace</h2>

        <div class="prace_cont d-f jc-c ai-c">

            <?php
            // ini_set('display_errors', 1);
            // ini_set('display_startup_errors', 1);
            // error_reporting(E_ALL);

                $photos = 'imgs/prace';
                $photos = glob($photos . "/*jpg");

                foreach($photos as $img){
                    echo"<div class='prace_img'>
                        <img src='$img' loading='lazy' width='200' height='400'>
                        </div>
                    ";
                    
                }
            ?>

        </div>

    </section>



    <?php include 'components/footer.php'; ?>

    
</body>
</html>