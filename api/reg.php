<?php include_once 'db.php';

$_POST['regdate']=date("Y-m-d");
$Mem->save($_POST);
