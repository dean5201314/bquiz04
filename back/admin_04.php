<div class="ct">
    <button onclick="location.href='?do=add_admin'">新增管理員</button>
</div>
<table class="all">
    <tr>
        <th class="tt ct">帳號</th>
        <th class="tt ct">密碼</th>
        <th class="tt ct">管理</th>
    </tr>
    <?php
    $rows=$Admin->all();
    foreach($rows as $row){
    ?>
    <tr>
        <td class="pp ct"><?=$row['acc'];?></td>
        <td class="pp ct"><?=str_repeat("*",strlen($row['pw']));?></td>
        <td class="pp ct">
            <?php
                if($row['acc']=='admin'){
                    echo "此帳號為最高權限";
                }else{
                    echo "<button onclick='location.href=&#39;?do=edit_admin&id={$row['id']}&#39;'>修改</button>";
                    echo "<button onclick='del(&#39;admin&#39;,{$row['id']})'>刪除</button>";
                }
            ?>
        </td>
    </tr>
    <?php
    }
    ?>
</table>
<div class="ct">
    <button onclick="location.href='index.php'">返回</button>
</div>
<script>
function del(table,id){
    $.post("./api/del.php",{table,id},()=>{
        location.reload();
    })
}
</script>