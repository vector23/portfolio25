<?php
    if($_POST["message"]) {
        $vysledok = "";
        $result = mail("maildo@kebis.space", $_POST['subject'],
        $_POST['message']. "From: ".$_POST['email_sender']);
        if(!$result) {   
            $vysledok="Error, email could not be send.";
        } else {
            $vysledok="Email was successfully sent!";
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PORTFOLIO | Juraj Kebis</title>
        <link rel="stylesheet" href="main.css?v=<?php echo time(); ?>" type="text/css"> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
     
    <body>
        <!--    Hlavicka    -->
        <header>
            <div id="topBar">
                <a href="index.php"><div class="menuT">About me
                    </div></a>
                <div class="menuT" id="hoverProjects">Projects
                    </div>
                <!--Pod menu bar-->
                <div id="podMenu">
                        <a href="dari.php"><div class="podMT" id="dariCo">Dari Beary
                            </div></a>
                        <a href="fpv.php"><div class="podMT" id="fpvCo">FPV App
                        </div></a>
                        <a href="history.php"><div class="podMT" id="histCo">HISTORY PEXESO
                        </div></a>
                        <a href="naturae.php"><div class="podMT" id="natuCo">Naturae Slovakia
                        </div></a>
                        <a href="tower.php">
                        <div class="podMT" id="secretCo">Secret Tower
                        </div></a>
                    <a href=""><div class="podMT">Research projects
                        </div></a>
                    </div>
                <div class="menuT">Blogs
                    </div>
                <a href="contact.php"><div class="menuT">Contact
                    </div></a>
            </div>
            
            
        </header>
        <!--    Prva cast - welcome text  -->
        <div class="paragraf_uno">
            <div id="nazov"><?php print $vysledok; ?></div>
        </div>
        <div id="apka_dole">
            <div class="center_text_parag">
                <div class="tmava_tema_text" style="font-size: 18px;">All media on this webpage and domain belongs to the owner Juraj Kebis who is their creator.</div>
            </div>
        </div>
        <!--    Spodok  -->
        <footer>
            <div id="spodok">© 2022 kebis.space | All Rights Reserved |  <a href="privacy.php">Privacy Policy</a>
            </div>
        </footer>
    </body>
</html>
