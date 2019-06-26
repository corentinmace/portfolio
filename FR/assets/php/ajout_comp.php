<?php
$param = parse_ini_file('../../db.ini');

  try {
    $dbh = new PDO($param['url'], $param['user'], $param['password']);
  } catch (PDOException $e) {
      echo("Erreur de connexion");
      exit;
  }

  if(isset($_POST['comp'])) {
    $comp=$_POST['comp'];
  } else {
    $comp="";
  }

  if(isset($_POST['percent'])) {
    $percent=$_POST['percent'].'%';
  } else {
    $percent="";
  }

  if(isset($_POST['image'])) {
    $image=$_POST['image'];
  } else {
    $image="";
  }


  if(empty($comp) OR empty($percent)) {
    echo '<font color="red">Veuillez remplir tout les champs</font>';
    return;
  } else {
    $query = "INSERT INTO competences(nom_comp, pourcentage, image)  VALUES(?,?,?)";
    $sql = $dbh->prepare($query);
    $sql->execute([$comp,$percent,$image]);
    $dbh = null;
    var_dump($comp . $percent);
    // echo('Competence ajoutée');
    header('location: admin_page.php');
    exit;
  }
?>
