<!DOCTYPE html>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-142489538-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-142489538-1');
</script>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Portfolio - Corentin Macé</title>
    <script src="assets/js/jquery.js"></script>
    <link rel="stylesheet" href="assets/css/font.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="stylesheet" media="screen" href="assets/css/responsive.css">
    <script src="assets/js/scroll.js"></script>
    <script src="assets/js/anime.min.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Khand" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/loader.css">
    <meta title="Portfolio de Corentin Macé">
    <meta name="description" content="Portfolio de Corentin Macé, Etudiant en informatique à Ynov Digital School - Aix en Provence">
    <meta name="keywords" content="Portfolio Macé Corentin CV Competences Projet Informatique">
</head>

<body>
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <div id="content"></div>
        <main>
            <div id="logo" class="logoSVG">

                <a href="#accueil"><img src="assets/img/photo/logo.png" alt="Logo Corentin Mace" /></a>
            </div>
            <div id="accueil" class="accueil">
                <h1 class="ml11 title">
                  <span class="text-wrapper">
                    <span class="line line1"></span>
                    <span class="letters">Developpeur / Photographe</span>
                  </span>
                </h1>

                <a href="#about" data-aos="fade-zoom-in" data-aos-delay="2000"><img id="arrow_down" src="assets/img/icon/arrow.png" alt="fleche"></a>
            </div>
            <div class="jumper"></div>
            <div id="about">
                <h1 data-aos="zoom-in">/ À PROPOS /</h1>
                <h2 data-aos="fade-right">Corentin Macé</h2>
                <h3 data-aos="zoom-in">Developpeur / Photographe</h3>
                <div class="text-about">
                    <p data-aos="fade-right">Je m'appelle Corentin Macé, J'habite à Berre l'etang, près de Marseille. Je suis acutellement étudiant à Ynov Digital School Aix en Provence, où j'apprends le developement web, la programmation et la cyber-sécurité</p>
                    <p data-aos="zoom-in">Je suis un passionné de Photographie, de technologies, de jeux vidéos, de basse, je tiens ça de mon père</p>
                    <p data-aos="fade-right">Je suis passionné par l'infinité de l'espace, prendre des photos des étoiles, de la lune..</p>
                    <p data-aos="zoom-in">Je suis bassiste dans un groupe de Stoner Rock appellé Flyin' Distortion, et dans un autre groupe appellé Nearby Pond</p>
                    <p data-aos="fade-right">Je suis un amateur en programmation, et avec mon ami Enzo Avagliano, nous gérons un serveur Discord appellé Program'Ligue FR. C'est un serveur d'entraide de programmateur français.</p>

                </div>
                <h6 data-aos="zoom-in">Mes compétences</h6>
                <div class="skills">
                    <?php
                        $parameters = parse_ini_file('db.ini');
                        $connect = new PDO($parameters['url'], $parameters['user'], $parameters['password']);
                        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $sql = $connect->prepare("SELECT * FROM competences");
                        $sql->execute();
                         while ($row = $sql->fetch()) {
                           echo  "<div data-aos='fade-down' data-aos-delay='150' class='container-skill'>";
                                 echo "<img src='assets/img/svg/".$row['image']."' alt='' width='100px' height='100px'>";
                               echo "<div class='overlay'>";
                                   echo  "<div class='text'>";
                                       echo  "<p>".$row['pourcentage']."</p>";
                                   echo  "</div>";
                                 echo "</div>";
                               echo "<p>".$row['nom_comp']."</p>";
                           echo  "</div>";
                         }
                        ?>
                </div>
            </div>
            <div class="jumper"></div>
            <div id="works">
                <h1 data-aos="zoom-in">/ MES PROJETS /</h1>
                <div class="projects">
                  <?php
                      $parameters = parse_ini_file('db.ini');
                      $connect = new PDO($parameters['url'], $parameters['user'], $parameters['password']);
                      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                      $sql = $connect->prepare("SELECT * FROM projets");
                      $sql->execute();
                       while ($row = $sql->fetch()) {
                        echo "<a href=''>";
                          echo "<div data-aos='zoom-in' data-aos-delay='100' class='container-project'>";
                               echo "<h2>".$row['nom_projet']."</h2>";
                               echo "<h5>".$row['langage_used']."</h5>";
                               echo "<h4>Description : ".$row['description']."</h4>";
                               echo "<h4><a href='".$row['lien_github']."'>Github <img src='assets/img/svg/link.svg' alt='' width='20px' height='20px'></a></h4>";
                        echo "</div>";
                       echo "</a>";
                       }
                      ?>
              </div>
            </div>
            <div class="jumper"></div>
            <div id="xp-pro">
              <h1 data-aos="zoom-in">/ EXPERIENCES PROFESSIONNELLES /</h1>
              <div class="xp-pro">
              <?php
                  $parameters = parse_ini_file('db.ini');
                  $connect = new PDO($parameters['url'], $parameters['user'], $parameters['password']);
                  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                  $sql = $connect->prepare("SELECT * FROM experience_pro");
                  $sql->execute();
                   while ($row = $sql->fetch()) {
                      echo "<div data-aos='zoom-in' data-aos-delay='100' class='container-xp-pro'>";
                      echo "<h2>".$row['nom_forma']."</h2>";
                      echo "<h4>".$row['place']."</h4>";
                      echo "<h5>".$row['date_forma']."</h5>";
                      echo "<h4>".$row['description']."</h4>";
                    echo "</div>";
                   }
                  ?>
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
                    <input class="sendButton" type="submit" name="Envoyer" value="Envoyer">
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
