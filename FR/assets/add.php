
<?php
$param = parse_ini_file('../../db.ini');

if(isset($_POST['mail'])) {
    $mail=$_POST['mail'];
} else {
    $mail="";
}

if(isset($_POST['pseudo'])) {
    $pseudo=$_POST['pseudo'];
} else {
    $pseudo="";
}

if(isset($_POST['msg'])) {
    $msg=$_POST['msg'];
} else {
    $msg="";
}


if (empty($mail) OR empty($msg) OR empty($pseudo)) {
        echo '<font color="red">Vous n\'avez pas rempli tout les champs</font>';
    } else {

      try{
          $dbh = new PDO($param['url'], $param['user'], $param['password']);
      }catch(PDOException $e){
          echo("Erreur de connexion");
          exit;
      }
      $query = "INSERT INTO message(mail, pseudo, msg) VALUES(?,?,?)";
      $sql = $dbh->prepare($query);
      $sql->execute([$mail,$pseudo,$msg]);
      $dbh = null;
      $message = $_POST['msg'];
      $headers = "Mail : ".$mail."";
      $to = "corentin.mace@ynov.com";
      $subject = "De : ".$pseudo." ";


      mail($to,$headers,$subject,$message);
      header('location: ../../index.php');


      exit;
  }


?>
