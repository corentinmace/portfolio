<?php
$param = parse_ini_file('../../db.ini');

    try{
        $dbh = new PDO($param['url'], $param['user'], $param['password']);
    }catch(PDOException $e){
        echo("Erreur de connexion");
        exit;
    }

    if(isset($_POST['name_projet'])) {
        $name_projet=$_POST['name_projet'];
    }

    if(isset($_POST['new_name_projet'])) {
        $new_name_projet=$_POST['new_name_projet'];
    }

    if(isset($_POST['description'])) {
        $description=$_POST['description'];
    }

    if(isset($_POST['langage_used'])) {
        $langage_used=$_POST['langage_used'];
    }

    if(isset($_POST['lien'])) {
        $lien=$_POST['lien'];
    }

    if (empty($name_projet) OR empty($description)) {
        // echo '<font color="red">Attention, veuillez remplir les champs !</font>';
    //     echo "<form action='admin_page.php' method='get'>
    //     <input type='submit' value='Retour'>
    // </form>";

        return;
    }
    else {
        $query = "UPDATE projets SET nom_projet = :new_name_projet, description = :description, langage_used = :langage_used, lien_github = :lien WHERE nom_projet = :name_projet";
        $sql = $dbh->prepare($query);
        var_dump($query);
        $sql->execute(array(":new_name_projet"=>$new_name_projet,":name_projet"=>$name_projet,":description"=>$description, ":langage_used"=>$langage_used, ":lien"=>$lien));
        $dbh = null;
        header('location: admin_page.php#projet-container');
        exit;
    }
