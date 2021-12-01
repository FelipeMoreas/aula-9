<?php
/*
$localhost  = "localhost";
$user       = "root";
$password   = "";
$db         = "bdcurso";

try{
    $con = new PDO ("mysql: host = $localhost;dbname = $db",$user,$password);
    var_dump($con);
} catch (PDOException $e){
    echo "conexão falou:<br> ". $e->getMessenger() ;
}

<?php
*/
$localhost  = "localhost";
$username   = "root";
$password   = "";
$db         = "bdcurso";

try {
    $con = new PDO("mysql:host=$localhost;dbname=$db",$username,$password);
    //var_dump($con); //debugar - Descobrir o que está sendo respondido

} catch(PDOException $e) {
    echo "conexão falhou:<br> ".$e->getMessage();

}