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
        <script>
            function myMove() {
              let id = null;
              const elem = document.getElementById("nazov");   
                const elem2 = document.getElementById("welcome_text");
                const elem3 = document.getElementById("resume_but");
                let wait = 0;
                let opa = 0;
                let opa2 = 0;
              clearInterval(id);
              id = setInterval(frame, 10);
              function frame() {
                if (opa > 0.79) {
                    if (opa2 > 0.79) {
                        clearInterval(id);
                    } else {
                        opa2=opa2+0.01;
                        elem2.style.opacity = opa2;
                        elem3.style.opacity = opa2;
                    }
                } else if(wait>0.2) {
                    
                  opa=opa+0.01;
                    elem.style.opacity = opa;
                } else {
                    wait = wait + 0.01;
                }
              }
            }
            
            function odtien() {
              let id2 = null;
              const elem2 = document.getElementById("welcome_text");
              let pos2 = 0;
              clearInterval(id2);
              id2 = setInterval(frame, 10);
              function frame() {
                if (pos2 == 1) {
                  clearInterval(id2);
                } else {
                  pos2=pos2+0.01;
                    elem2.style.opacity = pos2;
                }
              }
            }
            
            window.onload = myMove;
        </script>
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
        <div class="paragraf_uno">
            <img src="imgs/pattern3.png" id="pattern_bck" draggable="false" style="position: relative;overflow:hidden;">
            <div id="nazov">Welcome to my <span id='portfol' style='background-color:rgba(200,30,30,1);color:white;'>portfolio</span>!</div>
            <div id="welcome_text">Scroll down to find out more about me and my projects</div>
            <a href="my-cv.pdf" target="_blank" rel="noreferrer noopener" id="resume_but">Resume</a>
            
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
        <section>
        <div  class="paragraf_duo" id="prvy_parag" style="height: 90vh;">
            <img src="imgs/pattern4.png" id="pattern_bck_other" draggable="false" style="position: absolute; height: 152vh;float: right;top: 0vh;opacity: 0.5;overflow:hidden;">
            <div class="lava_strana_parag_text">
                <div class="nazov_sekcia">About me</div>
                <div class="text_sekcia svetla_tema_text" id="info_text_dari" style="font-size: 22px;">Hello there! And welcome to my website :)<br><br> My name is <span style='color:white;'>Juraj Kebis</span>, and I am a junior App/Game developer. I've recently finished studying Computing Science at <a href='https://www.uu.nl' target='_blank' rel='noreferrer noopener' >Utrecht University</a>, where I started my <span style='color:white;'>postgraduate</span> studies in 2022.<br>I was born in Bratislava, capital of Slovakia, and lived most of my childhood in a little town called Pezinok. At the age of 17 I had little knowledge about programming or how to even create an app, but my interest served as a catalyst for my motivation in becoming more skilled and educated in the field of App development. You can find some of the interesting projects I have worked on also on the App Store!
                </div>
                <script>
                    var iText1 = "Hello there! And welcome to my website :)<br><br> My name is <span style='color:white;'>Juraj Kebis</span>, and I am a junior App/Game developer. I've recently finished studying Computing Science at <a href='https://www.uu.nl' target='_blank' rel='noreferrer noopener' >Utrecht University</a>, where I started my <span style='color:white;'>postgraduate</span> studies in 2022.<br>I was born in Bratislava, capital of Slovakia, and lived most of my childhood in a little town called Pezinok. At the age of 17 I had little knowledge about programming or how to even create an app, but my interest served as a catalyst for my motivation in becoming more skilled and educated in the field of App development. You can find some of the interesting projects I have worked on also on the App Store!";
                    var iText2 = "Hello there! And welcome to my website :)<br><br> My name is <span style='color:white;'>Juraj Kebis</span>, and I am a junior App/Game developer. I've recently finished studying Computing Science at <a href='https://www.uu.nl' target='_blank' rel='noreferrer noopener' >Utrecht University</a>, where I started my <span style='color:white;'>postgraduate</span> studies in 2022.<br>I was born in Bratislava, capital of Slovakia, and lived most of my childhood in a little town called Pezinok. At the age of 17 I had little knowledge about programming or how to even create an app, but my interest served as a catalyst for my motivation in becoming more skilled and educated in the field of App development. You can find some of the interesting projects I have worked on also on the App Store!<br><br>Many of the projects I have worked on are iOS games. That is because there I feel like I can apply my creative ideas in the full potential.<br>iOS development is not my only interest. In recent years, I've started to learn more about coding apps for other platforms, such as Windows, WebGL or Android.<br><br>But my life is not just about App development. In my free time, I like to do bit of swimming, or even some hiking if place and occasion for it. I am also a huge fan of space exploration, so I always keep one eye on NASA and SpaceX newsfeed. When giving my body break, I like to read Tolkien books, or play board games with my friends. But even in my free time, I always try to find a place to code something.";
                </script>
                <button type="button" class="button_sekcia svetla_tema_button" id="prvyButton" onclick="readMore(1)">Read more</button>
                <script>
                    function readMore(a) {
                        if (a<2) {
                            var x = document.getElementById("prvy_parag");
                            var temp = document.getElementById("info_text_dari");
                            var prBut = document.getElementById("prvyButton");
                            if (x.style.height === "155vh") {
                                x.style.height = "90vh";
                                temp.innerHTML = iText1;
                                prBut.innerHTML = "Read more";
                            } else {
                                x.style.height = "155vh";
                                temp.innerHTML = iText2;
                                prBut.innerHTML = "Show less";
                            }
                            x.style.transition = "all 1s";
                        } else {
                            var y = document.getElementById("druhy_parag");
                            var temp = document.getElementById("dev_text_dari");
                            var drBut = document.getElementById("druhyButton");
                            if (y.style.height === "150vh") {
                                y.style.height = "104vh";
                                temp.innerHTML = dText1;
                                drBut.innerHTML = "Read more";
                            } else {
                                y.style.height = "150vh";
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
            <div class="prava_strana_parag_img">
                <div class="images_circle">
                    <div id="main_ring" class="white_theme_ring"><img src="imgs/profile.png" class="profilovka" style="width: 100%;"></div>
                    <div id="second_ring" class="white_theme_ring"><img src="imgs/promoc.png" class="profilovka"></div>
                    <div id="three_ring" class="white_theme_ring"><img src="imgs/hory.png" class="profilovka"></div>
                    <div id="fourth_ring" class="white_theme_ring"><img src="imgs/skola2.png" class="profilovka"></div>
                </div>
                
            </div>
        </div>
        </section>
        <!--    Tretie cast - Education & Experience  -->
        <div class="paragraf_truo" id="druhy_parag" style="height: 104vh;">
            <img src="imgs/pattern5.png" id="pattern_bck_other" draggable="false" style="position: absolute; height: 152vh;float: right;top: 0;opacity: 0.5;overflow:hidden;">
            <div class="prava_strana_parag_text">
                <div class="nazov_sekcia" style="color: black;">Education</div>
                <div class="text_sekcia tmava_tema_text" id="dev_text_dari">I graduated from <span style='color:black;'>Applied Informatics (HBO)</span> in 2021 at the <a href='https://www.ucm.sk' target='_blank' rel='noreferrer noopener' >University of Ss. Cyril and Methodius in Trnava</a>. During my studies, I've completed many courses related to my field, such as Software Engineering, Advanced Internet Technologies, Information Security, Fundamentals of law for IT students, Analysis and Computerization of Dynamic Systems, Algorithms and Data Structures, Computer Networks and others. I've continued to study <span style='color:black;'>Computing Science</span> at the <a href='https://www.uu.nl' target='_blank' rel='noreferrer noopener' >Utrecht University</a>, where I completed multiple advanced courses from Computer Science, such as Software Architecture, Logics for Safe AI, Algorithms for Decision Support and else.</div>
                <button type="button" class="button_sekcia tmava_tema_button" id="druhyButton" onclick="readMore(4)">Read more</button>
                <div class="popis2">UCM logo image, University image, and UU logo image from this urls:www.ucm.sk/sk/<br>www.coe.int/en/web/help/-/utrecht-university-launches-mooc-on-human-rights<br>en.wikipedia.org/wiki/Utrecht_University#/media/File:Utrecht_University_logo.svg</div>
                <script>
                    var dText1 = "I graduated from <span style='color:black;'>Applied Informatics (HBO)</span> in 2021 at the <a href='https://www.ucm.sk' target='_blank' rel='noreferrer noopener' >University of Ss. Cyril and Methodius in Trnava</a>. During my studies, I've completed many courses related to my field, such as Software Engineering, Advanced Internet Technologies, Information Security, Fundamentals of law for IT students, Analysis and Computerization of Dynamic Systems, Algorithms and Data Structures, Computer Networks and others. I've continued to study <span style='color:black;'>Computing Science</span> at the <a href='https://www.uu.nl' target='_blank' rel='noreferrer noopener' >Utrecht University</a>, where I completed multiple advanced courses from Computer Science, such as Software Architecture, Logics for Safe AI, Algorithms for Decision Support and else.";
                    var dText2 = "I graduated from <span style='color:black;'>Applied Informatics (HBO)</span> in 2021 at the <a href='https://www.ucm.sk' target='_blank' rel='noreferrer noopener' >University of Ss. Cyril and Methodius in Trnava</a>. During my studies, I've completed many courses related to my field, such as Software Engineering, Advanced Internet Technologies, Information Security, Fundamentals of law for IT students, Analysis and Computerization of Dynamic Systems, Algorithms and Data Structures, Computer Networks and others. I've continued to study <span style='color:black;'>Computing Science</span> at the <a href='https://www.uu.nl' target='_blank' rel='noreferrer noopener' >Utrecht University</a>, where I completed multiple advanced courses from Computer Science, such as Software Architecture, Logics for Safe AI, Algorithms for Decision Support and else.<br><br>My interest in Information Technology grew before I even started my high school studies at <a href='https://zochova.sk' target='_blank' rel='noreferrer noopener' >Zochova 9</a> <span style='color:black;'>Electrical Engineering school</span>.<br><br>During my university years, I've maximized my interest in gaining knowledge in app development, and I've attended many public lectures and meetings with senior developers in the field. I've completed multiple online courses, and at the end of my studies even received a <span style='color:black;'>Dean award</span> for an Excellent Project Thesis, which was an educational <a href='naturae.php'>AR iOS App</a>.";
                </script>
            </div>
            <div class="lava_strana_parag_img">
                <div class="images_circle">
                    <div id="main_ring" class="white_theme_ring"><img src="imgs/uni_1.jpg" class="profilovka" style="width: 100%;"></div>
                    <div id="three_ring" class="white_theme_ring"><img src="imgs/ucm_logo.png" class="profilovka"></div>
                    <div id="fourth_ring" class="white_theme_ring"><img src="imgs/uu_logo.png" class="profilovka"></div>
                </div>
            </div>
            
        </div>
        <!--    Stvrta cast - about me   -->
        <div class="paragraf_quatro">
            <img src="imgs/pattern4.2.png" id="pattern_bck_other" draggable="false" style="position: absolute; height: 116%;float: right;top:0;opacity: 0.5;">
            <div class="lava_strana_parag_text">
                <div class="nazov_sekcia">Projects &#38 Experience</div>
                <!--    Text before: My first full programming experience started in 2017, when I was working as a PLC junior Programmer in <a href='https://en.volkswagen.sk/en.html' target='_blank' rel='noreferrer noopener' >Volkswagen, Bratislava</a>. There, I've learned a lot about programming and how fascinating and creative that field is. <br>In years after, during my Bachelor's studies, I was part of various team groups, where we worked together on various projects. One of the projects I worked on was History-Pexeso, which is a cross-platform educational game.<br><br>Next to my studies, I started developing iOS and MacOS apps which I am currently most skilled in. At this moment, there are 4 apps that I have worked on, from which 2 are finished, and one is published on the App Store. You can read more about those projects under the Projects tab.  -->
                <div class="text_sekcia svetla_tema_text" id="info_text_dari">My experience with development has been expanding since the beginning of my student years, and since then has been growing year by year. With each new project, I learn new things and discover more interesting features in the field of development. My first interest has sparked in high school when I was learning about graphic design and UI, and my head was constantly stick in Adobe Photoshop, Blender and Illustrator.<br>My portfolio is currently full of many interesting projects I've worked on. I have experience with the full development process of UI/UX design, software architecture design, coding, testing and publishing. I am always looking for a new challenge where I can test and expand my knowledge and skills.
                </div>
                 
                <div class="popis">App Store image from this url:<br>https://www.watchosicongallery.com/icons/apple-developer-2020-03-19/ </div>
            </div>
            <div class="prava_strana_parag_img">
                <div class="images_circle">
                    <div id="main_ring" class="white_theme_ring"><img src="imgs/develop.png" class="profilovka" style="width: 100%;" alt="https://www.watchosicongallery.com/icons/apple-developer-2020-03-19/"></div>
                    <div id="second_ring" class="white_theme_ring"><img src="imgs/students.png" class="profilovka"></div>
                    <div id="three_ring" class="white_theme_ring"><img src="imgs/dev_preview.png" class="profilovka"></div>
                    
                </div>
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
