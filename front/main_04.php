<?php
$type=$_GET['type']??0;
$nav='';
$goods=null;
if($type==0){
    $nav="全部商品";
    $goods=$Goods->all(['sh'=>1]);
}else{
    $t=$Type->find($type);
    if($t['big_id']==0){
        $nav=$t['name'];
        $goods=$Goods->all(['sh'=>1,'big'=>$t['id']]);
    }else{
        $b=$Type->find($t['big_id']);
        $nav=$b['name'] ." > ". $t['name'];
        $goods=$Goods->all(['sh'=>1,'mid'=>$t['id']]);
    }
}

?>
<h2><?=$nav;?></h2>

<?php
foreach($goods as $good){
    echo $good['name'];
    echo "<br>";
}
?>
