<?php session_start();?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php require 'db-connect.php';?>
<form action="product.php" method="post">
    商品検索
    <input type="text" name="keyword">
    <input type="submit" value="検索">
    </form>
    <hr>
<?php
echo '<table>';
echo '<tr><th>商品番号</th><th>商品名</th><th>価格</th></tr>';
$pdo=new PDO($connect,USER,PASS);
if(isset($_POST['keyword'])){
    $sql=$pdo->prepare('select*from vice where name like ?');
    $sql->execute(['%'.$_POST['keyword'].'%']);
}else {
    $sql=$pdo->query('select*from vice');
}
foreach ($sql as $row){
    $id=$row['id'];
    echo'<tr>';
    echo'<td>',$id,'</td>';
    echo'<td>';
    echo'<a href="detail.php?id=',$id,'">',$row['vice_name'],'</a>';
    echo'</td>';
    echo'<td>',$row['h_name'],'</td>';
    echo'</tr>';
}
echo'</table>';
?>
<?php require '../chapter7/footer.php'; ?>