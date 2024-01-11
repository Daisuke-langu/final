<?php session_start();?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php require 'db-connect.php';?>
<link rel="stylesheet" href="css/all.css">
<table class="t1">
<tr><th>商品番号</th><th>商品名</th><th>借りている人物名</th></tr>
<?php $pdo=new PDO($connect,USER,PASS);
if(isset($_POST['keyword'])){
    $sql=$pdo->prepare('select*from vice where name like ?');
    $sql->execute(['%'.$_POST['keyword'].'%']);
}else {
    $sql=$pdo->query('select*from vice');
}
foreach ($sql as $row){
    $id=$row['id'];?>
    <tr>
    <?php echo'<td>',$id,'</td>'; 
    echo'<td>';
    echo'<a href="detail.php?id=',$id,'">',$row['vice_name'],'</a>';
    echo'</td>';
    echo'<td>',$row['h_name'],'</td>'; ?>
    </tr>
<?php } ?>
</table>
<?php require '../chapter7/footer.php'; ?>