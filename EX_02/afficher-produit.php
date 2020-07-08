<?php
function connect_to_database() {
    $servername = "localhost";
    $username = 'root' ;
    $password = 'root' ;
    $databasename = "basetest01" ;
try{
    $pdo = new PDO("mysql:host=$servername;dbname=$databasename",$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully<br/>";
    return $pdo;
}
catch(PDOException $e)
{
    echo "Connection Failed : ". $e->getMessage();

   }
}
$pdo=connect_to_database();

$reponse= $pdo->query('SELECT * FROM produit');
while($donnees=$reponse->fetch())
{
    echo'<ul><li>' .$donnees [ 'nom' ]. '</li></ul>';
}
?>

