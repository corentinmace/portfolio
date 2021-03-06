<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Portfolio - Corentin Macé</title>
    <script src="assets/js/jquery.js"></script>
    <link rel="stylesheet" href="assets/css/font.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/sideInfo.css">
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="stylesheet" media="screen" href="assets/css/responsive.css">
    <script src="assets/js/smooth.js"></script>
    <script src="assets/js/anime.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="assets/js/sideInfo.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Khand" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/loader.css">
</head>

<body>
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <div id="content"></div>
        <main>
            <div class="sideInfo">
                <p id="nav" class="navElement navhome">Home</p>
            </div>
            <div id="logo" class="logoSVG">

                <a href="#accueil"><img src="assets/img/photo/logo.png" alt="Logo Corentin Mace" /></a>
            </div>
            <div id="accueil" class="accueil">
                <h1 class="ml11 title">
                  <span class="text-wrapper">
                    <span class="line line1"></span>
                    <span class="letters">Developer / Photographer</span>
                  </span>
                </h1>

                <a href="#about" data-aos="fade-zoom-in" data-aos-delay="2000"><img id="arrow_down" src="assets/img/icon/arrow.png" alt="fleche"></a>
            </div>
            <div class="jumper"></div>
            <div id="about">
                <h1 data-aos="zoom-in">/ ABOUT ME /</h1>
                <h2 data-aos="fade-right">Corentin Macé</h2>
                <h3 data-aos="zoom-in">Developer / Photographer</h3>
                <div class="text-about">
                    <p data-aos="fade-right">My name is Corentin Macé, I'm living in Berre l'Etang, near Marseille. I'm actually a student of Ynov Digital School, where i'm learning web developement, software developement and cyber-security, basically, it's computer Engineering studies</p>
                    <p data-aos="zoom-in">I'm passionated by Photography, Computers, Videos Games, Bass, I got these from my father</p>
                    <p data-aos="fade-right">I'm passionated by the infinity of space, I love taking pictures of stars, moon ect..</p>
                    <p data-aos="zoom-in">I'm a bassist in a band of stoner rock called Flyin' Distortion, and in a band called Nearby Pond</p>
                    <p data-aos="fade-right">I'm a beginner in programing, and with my friend Enzo Avagliano we own a Discord Server called Program'Ligue FR. It's a french community of programmer.</p>

                </div>
                <h6 data-aos="zoom-in">My Skills</h6>
                <div class="skills">
                    <div data-aos="fade-up" data-aos-delay="100" class="container-skill">
                        <img src="assets/img/svg/html5.svg" alt="" width="100px" height="100px">
                        <div class="overlay">
                            <div class="text">
                                <p>70%</p>
                            </div>
                        </div>
                        <p>HTML</p>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="200" class="container-skill">
                        <img src="assets/img/svg/css3.svg" alt="" width="100px" height="100px">
                        <div class="overlay">
                            <div class="text">
                                <p>65%</p>
                            </div>
                        </div>
                        <p>CSS</p>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="300" class="container-skill">
                        <img src="assets/img/svg/javascript.svg" alt="" width="100px" height="100px">
                        <div class="overlay">
                            <div class="text">
                                <p>20%</p>
                            </div>
                        </div>
                        <p>Javascript</p>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="400" class="container-skill">
                        <img src="assets/img/svg/nodejs.svg" alt="" width="100px" height="100px">
                        <div class="overlay">
                            <div class="text">
                                <p>20%</p>
                            </div>
                        </div>
                        <p>NodeJS</p>
                    </div>
                    <div data-aos="fade-down" data-aos-delay="500" class="container-skill">
                        <img src="assets/img/svg/photography.svg" alt="" width="100px" height="100px">
                        <div class="overlay">
                            <div class="text">
                                <p>85%</p>
                            </div>
                        </div>
                        <p>Photography</p>
                    </div>
                    <div data-aos="fade-down" data-aos-delay="600" class="container-skill">
                        <img src="assets/img/svg/photoshop.svg" alt="" width="100px" height="100px">
                        <div class="overlay">
                            <div class="text">
                                <p>85%</p>
                            </div>
                        </div>
                        <p>Photoshop</p>
                    </div>
                    <div data-aos="fade-down" data-aos-delay="700" class="container-skill">
                        <img src="assets/img/svg/lightroom.svg" alt="" width="100px" height="100px">
                        <div class="overlay">
                            <div class="text">
                                <p>90%</p>
                            </div>
                        </div>
                        <p>Lightroom</p>
                    </div>
                    <div data-aos="fade-down" data-aos-delay="800" class="container-skill">
                        <img src="assets/img/svg/premiere.svg" alt="" width="100px" height="100px">
                        <div class="overlay">
                            <div class="text">
                                <p>75%</p>
                            </div>
                        </div>
                        <p>Premiere Pro</p>
                    </div>
                </div>
            </div>
            <div class="jumper"></div>
            <div id="works">
                <h1 data-aos="zoom-in">/ MY WORKS /</h1>

                <div class="projects">
                  <a href="project/project1.html">
                    <div data-aos="zoom-in" data-aos-delay="100" class="container-project">
                        <h2>Discord RPG BOT</h2>
                        <h5>Language : DiscordJS (NodeJs)</h5>
                        <h4>Description : A Discord BOT that will make a RPG game automaticly</h4>
                        <h4><a href="https://github.com/corentinmace/bot-discord-jdr">Github <img src="assets/img/svg/link.svg" alt="" width="20px" height="20px"></a></h4>
                  </div>
                </a>

                <a href="project/project2.html">
                    <div data-aos="zoom-in" data-aos-delay="200" class="container-project">
                        <h2>Program'Ligue BOT</h2>
                        <h5>Language : DiscordJS (NodeJs)</h5>
                        <h4>Description : Discord BOT for the server Program'Ligue FR.</h4>
                        <h4><a href="https://github.com/corentinmace/program-ligue-djs.bot">Github <img src="assets/img/svg/link.svg" alt="" width="20px" height="20px"></a></h4>
                    </div>
                </a>
                <a href="project/project3.html">
                  <div data-aos="zoom-in" data-aos-delay="300" class="container-project">
                        <h2>Portfolio</h2>
                        <h5>Language : HTML - CSS - Javascript</h5>
                        <h4>Description : My portfolio</h4>
                        <h4><a href="https://github.com/corentinmace/portfolio">Github <img src="assets/img/svg/link.svg" alt="" width="20px" height="20px"></a></h4>
                  </div>
                </a>

                  <a href="project/project4.html">
                    <div data-aos="zoom-in" data-aos-delay="400" class="container-project">
                        <h2>GoPro Timelapse</h2>
                        <h5>Language : Arduino</h5>
                        <h4>Description : That's a module that will be able to go from a circular direction to another with a motor and a choice</h4>
                        <h4><a href="https://github.com/corentinmace/timelapse-gopro-arduino">Github <img src="assets/img/svg/link.svg" alt="" width="20px" height="20px"></a></h4>
                    </div>
                  </a>

                  <a href="project/project5.html">
                    <div data-aos="zoom-in" data-aos-delay="500" class="container-project">
                        <h2>Thermometer on 4-digit</h2>
                        <h5>Language : Arduino</h5>
                        <h4>Description : Thermometer that will display the temperature on a 4-digit module</h4>
                        <h4><a href="https://github.com/corentinmace/temp-4digit-arduino">Github <img src="assets/img/svg/link.svg" alt="" width="20px" height="20px"></a></h4>
                    </div>
                  </a>

                  <a href="project/project6.html">
                    <div data-aos="zoom-in" data-aos-delay="600" class="container-project">
                        <h2>Vulnerable Website</h2>
                        <h5>Language : PHP - HTML - CSS - Javascript</h5>
                        <h4>Description : Vulnerable Website done for my startup "Hacking Challenge"</h4>
                        <h4><a href="https://github.com/corentinmace/vulnerable-website">Github <img src="assets/img/svg/link.svg" alt="" width="20px" height="20px"></a></h4>
                    </div>
                  </a>
              </div>
            </div>
            <div class="jumper"></div>
            <div id="contact">
                <h1 data-aos="zoom-in">/ CONTACT /</h1>
                <main>
                  <div class="formulaire">
                  <form action="assets/php/add.php" method="post">
                    Mail :
                    <input type="text" name="mail"  maxlength="50">
                    Nom Prénom :
                    <input type="text" name="pseudo"  maxlength="20">
                    Message
                    <textarea type="text" name="msg"></textarea>
                    <input id="sendButton" type="submit" name="Envoyer" value="Envoyer">
                  </form>
                </div>
                <div class="contacts">
              <div class="container-contact">
              <a href="https://twitter.com/cew_kuhaku"><img src="assets/img/svg/twitter.svg" alt="" height="70px" width="70px"></a>
              <p>@cew_kuhaku</p>
            </div>
            <div class="container-contact">
            <a href="mailto:corentin.mace@ynov.com?subject=feedback"><img src="assets/img/svg/mail.svg" alt="" height="65px" width="65px"></a>
            <p>corentin.mace@ynov.com</p>
          </div>
            <div class="container-contact">
            <a href="https://github.com/corentinmace"><img src="assets/img/svg/github.svg" alt="" height="70px" width="70px"></a>
            <p>corentinmace</p>
          </div>
          <div class="container-contact">
          <a href="https://www.instagram.com/cew_kuhaku/?hl=fr"><img src="assets/img/svg/instagram.svg" alt="" height="65px" width="65px"></a>
          <p>@cew_kuhaku</p>
        </div>
        <div class="container-contact">
        <a href="https://www.facebook.com/CorentinMacePhoto/"><img src="assets/img/svg/facebook.svg" alt="" height="70px" width="70px"></a>
        <p>Corentin Macé Photographie</p>
        </div>
        <div class="container-contact">
        <a href="https://www.linkedin.com/in/corentin-mace-300ba3170/"><img src="assets/img/svg/linkedin.svg" alt="" height="65px" width="65px"></a>
        <p>Corentin Macé</p>
      </div>
            </div>
          </div>
        </main>
        <footer>
            <div class="jumper">
                <p>Copyright &copy; Corentin Macé | 2019 </p>
            </div>
        </footer>
        <script src="assets/js/onload-script.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
</body>

</html>
