<?php
$param = parse_ini_file('../../db.ini');

    try{
        $dbh = new PDO($param['url'], $param['user'], $param['password']);
    }catch(PDOException $e){
        echo("Erreur de connexion");
        exit;
    }

    if(isset($_POST['name_forma'])) {
        $name_forma=$_POST['name_forma'];
    }

    if(isset($_POST['new_name_forma'])) {
        $new_name_forma=$_POST['new_name_forma'];
    }

    if(isset($_POST['place'])) {
        $place=$_POST['place'];
    }

    if(isset($_POST['date_forma'])) {
        $date_forma=$_POST['date_forma'];
    }

    if(isset($_POST['description'])) {
        $description=$_POST['description'];
    }

    if (empty($name_forma) OR empty($description)) {
        // echo '<font color="red">Attention, veuillez remplir les champs !</font>';
    //     echo "<form action='admin_page.php' method='get'>
    //     <input type='submit' value='Retour'>
    // </form>";

        return;
    }
    else {
        $query = "UPDATE experience_pro SET nom_forma = :new_name_forma, place = :place, date_forma = :date_forma, description = :description WHERE nom_forma = :name_forma";
        $sql = $dbh->prepare($query);
        var_dump($query);
        $sql->execute(array(":new_name_forma"=>$new_name_forma,":name_forma"=>$name_forma,":place"=>$place, ":date_forma"=>$date_forma, ":description"=>$description));
        $dbh = null;
        // echo('Projet modifiée !');
        // echo "<form action='admin_page.php' method='get'>
        //     <input type='submit' value='Retour'>
        // </form>";
        header('location: admin_page.php#xp-pro');
        exit;
    }
