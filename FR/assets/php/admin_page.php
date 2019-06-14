<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../css/font.css">
    <link rel="stylesheet" href="../css/main.css">
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

       <div class="container-admin">
         <div class="comp-inner">
           <h3>Ajouter une compétence</h3>
           <form action="ajout_comp.php" method="POST">
               <input name="comp" type="text" placeholder="Compétence">
               <input name="percent" type="number" min="25" max="100" step="5" placeholder="50%">
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
                     $tabulation = [];
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
           <form action="deletecomp.php" method="POST">
               <select name="comp">
               <?php
                   $tab = "SELECT nom_comp FROM competences;";
                   $sql = $dbh->prepare($tab);
                   $sql->execute();
                   $tabulation = [];
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


  </body>
</html>
