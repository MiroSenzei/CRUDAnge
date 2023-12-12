<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "crudange";
$conn = mysqli_connect($server,$user,$password,$db);
if($conn){
echo 'Connection Successfully';

}else{
    echo 'Not Connected';
}


?>