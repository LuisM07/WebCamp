
<?php 

$servername = "127.0.0.1:33065";
$username = "root";
$password = "";
$dbname = "gdlwebcamp";

    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->set_charset('utf8');

    if($conn->connect_error){
        echo $error -> $conn->connect_error;
    }
    if($conn->connect_error){
        echo "no conectado";
    }else{
        //echo "conectado";
    }
?>