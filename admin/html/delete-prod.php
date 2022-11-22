<?php

session_start();


if(isset($_GET['id'])){
$id=$_GET['id'];

include 'config.php';


$qry="delete from prod where id=$id";
$result=mysqli_query($link,$qry);

if($result){
    echo"DELETED";
    header('Location:remove-prod.php');
}else{
    echo"ERROR!!";
}
}
?>