<?php

session_start();

if (strlen($_SESSION['login']) < 1){

  header('location: ../../admin.php');

}

 ?>



<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../css/font.css">
    <link rel="stylesheet" href="../css/main.css">
    <script src="../js/jquery.js" type="text/javascript"></script>
    <script src="../js/scroll.js" type="text/javascript"></script>
</head>

<body>
    <?php
    $param = parse_ini_file('../../db.ini');

      try {
        $dbh = new PDO($param['url'], $param['user'], $param['password']);
      } catch (PDOException $e) {
          echo("Erreur de connexion");
          exit;
      }
       ?>
        <header>
            <nav class="navAdmin">
                <div class="navAdmin__container">
                    <img src="../img/svg/returntosite.svg" alt=""><a href="../../index.php">Retourner au site</a>
                </div>
                <div class="navAdmin__container">
                    <img src="../img/svg/skills.svg" alt=""><a href="admin_page.php#competence-container">Competences</a>
                </div>
                <div class="navAdmin__container">
                    <img src="../img/svg/project.svg" alt=""><a href="admin_page.php#projet-container">Projet</a>
                </div>
                <div class="navAdmin__container">
                    <img src="../img/svg/xppro.svg" alt=""><a href="admin_page.php#xp-pro">Experience Pro</a>
                </div>
                <div class="navAdmin__container">
                    <img src="../img/svg/message.svg" alt=""><a href="admin_page.php#message-container-section">Messages reçus</a>
                </div>
            </nav>
        </header>
        <main>
            <div id="admin_page_main">
                <div id="competence-container" class="container-admin">
                    <h2>Compétences</h2>
                    <div class="comp-inner-container">

                        <div class="comp-inner">
                            <h3>Ajouter une compétence</h3>
                            <form action="ajout_comp.php" method="POST">
                                <input name="nom" type="text" placeholder="Compétence">
                                <input name="percent" type="number" min="25" max="100" step="5" placeholder="50%">
                                <input name="image" type="text" placeholder="Lien vers l'image">

                                <button id="sendButton" type="submit">Ajouter</button>
                            </form>
                        </div>
                        <div class="comp-inner">
                            <h3>Modifier une compétence</h3>
                            <form action="modif_comp.php" method="POST">
                                <select name="comp">
                                    <?php
                       $tab = "SELECT nom_comp FROM competences;";
                       $sql = $dbh->prepare($tab);
                       $sql->execute();

                       while($ligne = $sql->fetch(PDO::FETCH_NUM)){
                           foreach($ligne as $val){
                               echo "<option name='$val'>$val</option>";
                           }
                       }
                       ?>
                                </select>
                                <input name="percent" type="number" min="50" max="100" step="5" placeholder="50%">
                                <button id="sendButton" type="submit">Modifier</button>
                            </form>
                        </div>
                        <div class="comp-inner">
                            <h3>Supprimer une compétence</h3>
                            <form action="del_comp.php" method="POST">
                                <select name="comp">
                                    <?php
                     $tab = "SELECT nom_comp FROM competences;";
                     $sql = $dbh->prepare($tab);
                     $sql->execute();

                     while($ligne = $sql->fetch(PDO::FETCH_NUM)){
                         foreach($ligne as $val){
                             echo "<option name='$val'>$val</option>";
                         }
                     }
                     ?>
                                </select>
                                <button id="sendButton" type="submit">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="jumper"></div>
            <div id="admin_page_main">
                <div id="projet-container" class="container-admin">
                    <h2>Projets</h2>
                    <div class="comp-inner">
                        <h3>Ajouter un projet</h3>
                        <form action="ajout_projet.php" method="POST">
                            <input name="name_projet" type="text" placeholder="Nom du projet">
                            <input name="langage_used" type="text" placeholder="Langage utilisé">
                            <input name="lien" type="text" placeholder="Lien du projet">
                            <textarea name="description" type="text" placeholder="Description"></textarea>
                            <button id="sendButton" type="submit">Ajouter</button>
                        </form>
                    </div>
                    <div class="comp-inner-container">
                        <div class="comp-inner">
                            <h3>Modifier un projet</h3>
                            <form action="modif_projet.php" method="POST">
                                <select name="name_projet">
                                    <?php
                       $tab = "SELECT nom_projet FROM projets;";
                       $sql = $dbh->prepare($tab);
                       $sql->execute();

                       while($ligne = $sql->fetch(PDO::FETCH_NUM)){
                           foreach($ligne as $val){
                               echo "<option name='$val'>$val</option>";
                           }
                       }
                       ?>
                                </select>
                                <input name="new_name_projet" type="text" placeholder="Nom du projet">
                                <input name="langage_used" type="text" placeholder="Langage utilisé">
                                <input name="lien" type="text" placeholder="Lien Github">
                                <textarea name="description" type="text" placeholder="Description du projet"></textarea>

                                <button id="sendButton" type="submit">Modifier</button>
                            </form>
                        </div>
                        <div class="comp-inner">
                            <h3>Supprimer un projet</h3>
                            <form action="del_projet.php" method="POST">
                                <select name="projet_del">
                                    <?php
                     $tab = "SELECT nom_projet FROM projets;";
                     $sql = $dbh->prepare($tab);
                     $sql->execute();

                     while($ligne = $sql->fetch(PDO::FETCH_NUM)){
                         foreach($ligne as $val){
                             echo "<option name='$val'>$val</option>";
                         }
                     }
                     ?>
                                </select>
                                <button id="sendButton" type="submit">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="jumper"></div>
            <div id="admin_page_main">
                <div id="xp-pro" class="container-admin">
                    <h2>Experiences Pro</h2>
                    <div class="comp-inner-container">
                        <div class="comp-inner">
                            <h3>Ajouter une experience</h3>
                            <form action="ajout_xppro.php" method="POST">
                                <input name="nom_forma" type="text" placeholder="Nom de l'entreprise">
                                <input name="place" type="text" placeholder="Place dans l'entreprise">
                                <input name="date_forma" type="text" placeholder="Date de l'experiences">
                                <textarea name="description" type="text" placeholder="Description"></textarea>
                                <button id="sendButton" type="submit">Ajouter</button>
                            </form>
                        </div>
                        <div class="comp-inner">
                            <h3>Modifier une experience</h3>
                            <form action="modif_xppro.php" method="POST">
                                <select name="name_forma">
                                    <?php
                       $tab = "SELECT nom_forma FROM experience_pro;";
                       $sql = $dbh->prepare($tab);
                       $sql->execute();

                       while($ligne = $sql->fetch(PDO::FETCH_NUM)){
                           foreach($ligne as $val){
                               echo "<option name='$val'>$val</option>";
                           }
                       }
                       ?>
                                </select>
                                <input name="new_name_forma" type="text" placeholder="Nom de l'entreprise">
                                <input name="place" type="text" placeholder="Place dans l'entreprise">
                                <input name="date_forma" type="text" placeholder="Date de l'experiences">
                                <textarea name="description" type="text" placeholder="Description"></textarea>
                                <button id="sendButton" type="submit">Modifier</button>
                            </form>
                        </div>
                        <div class="comp-inner">
                            <h3>Supprimer une experience</h3>
                            <form action="del_xppro.php" method="POST">
                                <select name="forma_del">
                                    <?php
                     $tab = "SELECT nom_forma FROM experience_pro;";
                     $sql = $dbh->prepare($tab);
                     $sql->execute();

                     while($ligne = $sql->fetch(PDO::FETCH_NUM)){
                         foreach($ligne as $val){
                             echo "<option name='$val'>$val</option>";
                         }
                     }
                     ?>
                                </select>
                                <button id="sendButton" type="submit">Supprimer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="jumper"></div>
            <div id="admin_page_main">
                <div id="message-container-section" class="message-container">
                    <h2>Messages reçus :</h2>
                    <?php
          $parameters = parse_ini_file('../../db.ini');
          $connect = new PDO($parameters['url'], $parameters['user'], $parameters['password']);
          $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = $connect->prepare("SELECT * FROM message ORDER BY id DESC LIMIT 5");
          $sql->execute();
           while ($row = $sql->fetch()) {
             echo "<div id='message-container'>";
              echo "<h5 style='margin-left: 5px;'>Nom :</h5>";
              echo "<p style='margin-left: 10px;'> ".$row['pseudo']."</p>";
              echo "<h5 style='margin-left: 5px;'>Mail :</h5>";
              echo "<p style='margin-left: 10px;'> ".$row['mail']."</p>";
              echo "<h5 style='margin-left: 5px;'>Message :</h5>";
              echo "<p style='margin-left: 10px;'> ".$row['msg']."</p>";
            echo "</div>";
           }
        ?>

                </div>
            </div>
        </main>

</body>

</html>
