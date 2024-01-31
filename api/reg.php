<?php include_once 'db.php';

if(!isset($_POST['id'])){
    $_POST['regdate']=date("Y-m-d");
}
$Mem->save($_POST);

if(isset($_POST['id'])){
    to("../back.php?do=mem");
}

