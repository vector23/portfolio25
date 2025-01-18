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
        <!--    Cesta    
        <div class="cesta">
                <div class="kruh prvy_kruh"></div>
                <div class="ciara prva_ciara"></div>
                <div class="kruh druhy_kruh"></div>
                <div class="ciara druha_ciara"></div>
                <div class="kruh treti_kruh"></div>
                <div class="ciara slaba tretia_ciara"></div>
                <div class="kruh slaba stvrty_kruh"></div>
        </div> -->
        
        <!--    Prva cast - welcome text  -->
        <div class="apka_main_bar fpv_color1">
            <img src="imgs/pattern3.png" id="pattern_bck" draggable="false" style="position: relative;">
            <div id="nazov_apky">FPV App</div>
            <div id="popis_apky"><span style="font-family: semiFont;">iOS App - Faculty App</span><br>Developer: <span style="font-family: semiFont;">&nbsp Juraj Kebis</span><br>Status: <span style="font-family: semiFont;">&nbsp Finished - Not available</span><br><br>Project development duration: <span style="font-family: semiFont;">&nbsp 3 weeks</span><br>Start of the development: <span style="font-family: semiFont;">&nbsp November 2020</span></div>
            
                <img src="imgs/fpv/logo_fpv.png" alt="logo" class="apka_picture">
                <!--VIDEO PLAYER -->
                <script>
                    window.document.onkeydown = function(e) {
                    if (!e) {
                        e = event;
                    }
                    if (e.keyCode == 27) {
                        lightbox_close();
                    }
                    }

                    function lightbox_open() {
                    var lightBoxVideo = document.getElementById("videoPreview");
                    window.scrollTo(0, 0);
                    document.getElementById('light').style.display = 'block';
                    document.getElementById('fade').style.display = 'block';
                    lightBoxVideo.play();
                    }

                    function lightbox_close() {
                    var lightBoxVideo = document.getElementById("videoPreview");
                    document.getElementById('light').style.display = 'none';
                    document.getElementById('fade').style.display = 'none';
                    lightBoxVideo.pause();
                    }
                </script>
                <div id="light">
                    <a class="boxclose" id="boxclose" onclick="lightbox_close();"></a>
                    <video id="videoPreview" style="height:90vh;width:auto;"controls>
                        <source src="imgs/fpv/ukazka.mov" type="video/mp4">
                        </video>
                    </div>
                    <div id="fade" onClick="lightbox_close();"></div>
                    <div>
                    <a href="#" onclick="lightbox_open();">Watch video</a>
                    <button type="button" class="button_sekcia svetla_i_tema_button speci_button" onclick=lightbox_open()>Play the preview</button>
                </div>
                <!--/VIDEO PLAYER -->
            
            <button type="button" id="sekcia_sipka" onclick="scrollSmooth();"><img src="imgs/sipka.png" id="sipka"></button>
            <script>
                function scrollSmooth() {
                    window.scrollTo({
                      top: 650,
                      behavior: 'smooth'
                    });
                }
            </script>
        </div>
        <!--    Druha cast - about me   -->
        <div id="apka_preview_bar" class="fpv_color2">
            <div class="lava_strana_parag_text">
                <div class="nazov_sekcia">About the app</div>
                <script>
                    function viewPreviewApp(cis) {
                        var temp=document.getElementById("gif_B");
                        var temp1=document.getElementById("first_B");
                        var temp2=document.getElementById("sec_B");
                        if (cis === 0) {
                            temp.style.opacity=0;
                            temp1.style.opacity=0;
                            temp2.style.opacity=0;
                            temp.style.display="none";
                            temp1.style.display="none";
                            temp2.style.display="none";
                        } else if (cis === 1) {
                            temp.style.opacity=1;
                            temp.style.display="flex";
                        } else if (cis === 2) {
                            temp1.style.opacity=1;
                            temp1.style.display="flex";
                        } else if (cis === 3) {
                            temp2.style.opacity=1;
                            temp2.style.display="flex";
                        }
                         var x = document.getElementById("black_scrn");
                         var y = document.getElementById("preview_screen");
                        if (x.style.display === "none") {
                            x.style.display = "flex";
                            x.style.opacity = 1;
                            y.style.display = "flex";
                            y.style.opacity = 1;
                        } else {
                            x.style.display = "none";
                            x.style.opacity = 0;
                            y.style.display = "none";
                            y.style.opacity = 0;
                        }
                    }
                </script>
                <div class="text_sekcia svetla_tema_text" id="info_text_dari">FPV app is an iOS app, that helps students and employees of the UCM to easily find informations about Faculty of Natural Sciences.<br>This app consist of 4 different views, which user can navigate through using the navigation bar.<br><br>First view is the faculty news, where you can read all the news and information provided by faculty. Second view contains all the information about the faculty and it's departments.Third view shows contact information for the faculty office, there you can quickly call or send an email using the contact info. Fourth view contains information about the student or employee.</div>
                <script>
                    var iText1 = "FPV app is an iOS app, that helps students and employees of the UCM to easily find informations about Faculty of Natural Sciences.<br>This app consist of 4 different views, which user can navigate through using the navigation bar.<br><br>First view is the faculty news, where you can read all the news and information provided by faculty. Second view contains all the information about the faculty and it's departments.Third view shows contact information for the faculty office, there you can quickly call or send an email using the contact info. Fourth view contains information about the student or employee.";
                    var iText2 = "FPV app is an iOS app, that helps students and employees of the UCM to easily find informations about Faculty of Natural Sciences.<br>This app consist of 4 different views, which user can navigate through using the navigation bar.<br><br>First view is the faculty news, where you can read all the news and information provided by faculty. Second view contains all the information about the faculty and it's departments.Third view shows contact information for the faculty office, there you can quickly call or send an email using the contact info. Fourth view contains information about the student or employee.<br><br>The development was part of the course for Mobile Applications, and was swiftly developed within just a few weeks. For this app, we also used Cocoapods, specifically SwiftSoup for HTML parsing. <br>This app was, however, not approved by the faculty, and therefore was not released to the public.";
                </script>
                <button type="button" class="button_sekcia svetla_tema_button" id="prvyButton" onclick="readMore(2)">Read more</button>
            </div>
            <div class="prava_strana_parag_img">
                <img src="imgs/fpv/screen_fpv.png" alt="preview" class="apka_preview">
            </div>
        </div>
        <!--    Tretie cast - Education & Experience  -->
        <div id="apka_info_bar" class="fpv_color1">
            <div class="prava_strana_parag_text">
                <div class="nazov_sekcia">Development</div>
                <div class="text_sekcia tmava_tema_text" id="dev_text_dari">The development of the FPV app was surprisingly short. It took 3 weeks to implement the whole app.<br>We used Xcode as a development software and Swift as a programming language.<br>We used storyboard for implementing the navigation between different windows. For HTML data parsing we used Cocoapod Podfile SwiftSoup.<br><br>We made all graphical elements and the design of the app in the Adobe XD software, from which we exported all elements for the app.</div>
                
                
            </div>
            <div class="lava_strana_parag_img">
                <div id="imageContainer">
                    <img src="imgs/fpv/dev1.png" alt="development" class="apka_develop" id="first_dev_img" onclick="viewPreviewApp(2);">
                    <img src="imgs/fpv/dev2.png" alt="development" class="apka_develop" id="second_dev_img" onclick="viewPreviewApp(3);" style="box-shadow: 0px 4px 14px 4px rgba(0,0,0,0.3);">
                </div>
                <div id="infoImageDev">Xcode software with the storyboard</div>
                <button type="button" class="button_dif_view" id="prvy_but" onclick='switchImage(1)'></button>
                <button type="button" class="button_dif_view" id="druhy_but" value="druhy_but" onclick='switchImage(2)'></button>
                <script>
                    function switchImage(r) {
                        if (r===1) {
                            var x = document.getElementById("first_dev_img");
                            var y = document.getElementById("second_dev_img");
                            var h = document.getElementById("prvy_but");
                            var f = document.getElementById("druhy_but");
                            var infoIm = document.getElementById("infoImageDev");
                            x.style.display="block";
                            x.style.opacity=1;
                            y.style.opacity=0;
                            y.style.display="none";
                            h.style.backgroundColor = "gray";
                            f.style.backgroundColor = "lightgray";
                            x.style.transition = "all 1s";
                            y.style.transition = "all 1s";
                            infoIm.innerHTML = "Xcode software with the storyboard";
                        } else if (r===2) {
                            var x = document.getElementById("first_dev_img");
                            var y = document.getElementById("second_dev_img");
                            var h = document.getElementById("prvy_but");
                            var f = document.getElementById("druhy_but");
                            var infoIm = document.getElementById("infoImageDev");
                            h.style.backgroundColor = "lightgray";
                            f.style.backgroundColor = "gray";
                            x.style.opacity=0;
                            x.style.display="none";
                            y.style.display="block";
                            y.style.opacity=1;
                            x.style.transition = "all 1s";
                            y.style.transition = "all 1s";
                            infoIm.innerHTML = "Part of the function that updates the cell data.";
                        }
                    }
                    function readMore(a) {
                        if (a<3) {
                            var x = document.getElementById("apka_preview_bar");
                            var temp = document.getElementById("info_text_dari");
                            var prBut = document.getElementById("prvyButton");
                            if (x.style.height === "130vh") {
                                x.style.height = "100vh";
                                temp.innerHTML = iText1;
                                prBut.innerHTML = "Read more";
                            } else {
                                x.style.height = "130vh";
                                temp.innerHTML = iText2;
                                prBut.innerHTML = "Show less";
                            }
                            x.style.transition = "all 1s";
                        } else {
                            var y = document.getElementById("apka_info_bar");
                            var temp = document.getElementById("dev_text_dari");
                            var drBut = document.getElementById("druhyButton");
                            if (y.style.height === "130vh") {
                                y.style.height = "100vh";
                                temp.innerHTML = dText1;
                                drBut.innerHTML = "Read more";
                            } else {
                                y.style.height = "130vh";
                                temp.innerHTML = dText2;
                                drBut.innerHTML = "Show less";
                            }
                            /*
                            for (let i = 0; i < z.length; i++) { 
                              z[i].style.height = "500vh";
                            }*/
                            y.style.transition = "all 1s";
                        }
                    }
                </script>
            </div>
            
        </div>
        <!--    Stvrta cast - about me   -->
        <div id="apka_preview_bar" class="fpv_color2">
            <div class="lava_strana_parag_text">
                <div class="nazov_sekcia">Future development?</div>
                <div class="text_sekcia svetla_tema_text" id="info_text_dari">The app was designed to be a faculty app for students who study there. Since this app was not approved by the faculty, there is no point in continuing the development.<br>The development of this app was part of the course, for which I implemeted it, so there was no intention to continue with it any further.<br><br>Either way there are some things that could be improved or finished. The login option for the students and employees is not implemented, neither the option to see the grades and other information.<br>Design of the app is a bit old, and with the new design idea of the university, it would be better to completely redesign it.</div>
            </div>
            <div class="prava_strana_parag_img">
                <img src="imgs/fpv/future_fpv.png" alt="preview" class="apka_preview">
            </div>
        </div>
        
        <!-- Info rights app -->
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
