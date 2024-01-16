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
    <?php echo'<td>',$id,'</td>'; ?>
    <td>
    <?php echo $row['vice_name']; ?>
    </td>
    <?php echo'<td>',$row['h_name'],'</td>'; ?>
    </tr>
    
<?php } ?>
</table>
<div class="modo">
      <a href="menu.php">メニューに戻る</a>
</div>
<?php require '../chapter7/footer.php'; ?>