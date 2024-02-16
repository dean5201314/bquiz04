<?php
$type=$_GET['type']??0;
$nav='';

if($type==0){
    $nav="全部商品";
}else{
    $t=$Type->find($type);
    if($t['big_id']==0){
        $nav=$t['name'];
    }else{
        $b=$Type->find($t['big_id']);
        $nav=$b['name'] ." > ". $t['name'];
    }
}


?>


<h2><?=$nav;?></h2>
