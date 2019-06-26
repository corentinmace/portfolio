<?php
$param = parse_ini_file('../../db.ini');

try{
    $dbh = new PDO($param['url'], $param['user'], $param['password']);
}catch(PDOException $e){
    echo("Erreur de connexion");
    exit;
}

if(isset($_POST['projet_del'])) {
    $projet_del=$_POST['projet_del'];
} else {
    $projet_del="";
}

if (empty($projet_del)) {
    echo '<font color="red">Attention, veuillez remplir les champs !</font>';
    echo "<form action='admin_page.php' method='get'>
    <input type='submit' value='Retour'>
</form>";
    return;
}
else {
$query = "DELETE FROM projets WHERE nom_projet = :projet_del ";
$sql = $dbh->prepare($query);
$sql->execute(array(":projet_del"=>$projet_del));
$dbh = null;
// echo('Compétence supprimée !');
// echo "<form action='admin_page.php' method='get'>
// <input type='submit' value='Retour'>
// </form>";
header('location: admin_page.php');
exit;
}
?>
