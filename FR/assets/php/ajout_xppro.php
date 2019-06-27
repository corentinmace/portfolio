<?php
$param = parse_ini_file('../../db.ini');

  try {
    $dbh = new PDO($param['url'], $param['user'], $param['password']);
  } catch (PDOException $e) {
      echo("Erreur de connexion");
      exit;
  }

  if(isset($_POST['nom_forma'])) {
    $nom_forma=$_POST['nom_forma'];
  } else {
    $nom_forma="";
  }

  if(isset($_POST['place'])) {
    $place=$_POST['place'];
  } else {
    $place="";
  }

  if(isset($_POST['date_forma'])) {
    $date_forma=$_POST['date_forma'];
  } else {
    $date_forma="";
  }

  if(isset($_POST['description'])) {
    $description=$_POST['description'];
  } else {
    $description="";
  }


  if(empty($nom_forma) OR empty($place)) {
    echo '<font color="red">Veuillez remplir tout les champs</font>';
    return;
  } else {
    $query = "INSERT INTO experience_pro(nom_forma, place, date_forma, description)  VALUES(?,?,?,?)";
    $sql = $dbh->prepare($query);
    $sql->execute([$nom_forma,$place,$date_forma,$description]);
    $dbh = null;
    // echo('Competence ajoutée');
    header('location: admin_page.php#xp-pro');
    exit;
  }
?>
