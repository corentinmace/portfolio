<?php
$param = parse_ini_file('../../db.ini');

try{
    $dbh = new PDO($param['url'], $param['user'], $param['password']);
}catch(PDOException $e){
    echo("Erreur de connexion");
    exit;
}

if(isset($_POST['forma_del'])) {
    $forma_del=$_POST['forma_del'];
} else {
    $forma_del="";
}

if (empty($forma_del)) {
    echo '<font color="red">Attention, veuillez remplir les champs !</font>';
    echo "<form action='admin_page.php' method='get'>
    <input type='submit' value='Retour'>
</form>";
    return;
}
else {
$query = "DELETE FROM experience_pro WHERE nom_forma = :forma_del ";
$sql = $dbh->prepare($query);
$sql->execute(array(":forma_del"=>$forma_del));
$dbh = null;
// echo('Compétence supprimée !');
// echo "<form action='admin_page.php' method='get'>
// <input type='submit' value='Retour'>
// </form>";
header('location: admin_page.php');
exit;
}
?>
