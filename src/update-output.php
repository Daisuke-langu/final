<?php session_start();?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php require 'db-connect.php';?>
<link rel="stylesheet" href="css/all.css">
<?php
$pdo=new PDO($connect,USER,PASS);
$sql=$pdo->prepare('update vice set vice_name=?, h_name=? where id=?');
if(empty($_POST['vice_name'])) { ?>
    <p>商品名を入力してください。</p>
<?php } else
 if(empty($_POST['h_name'])) { ?>
    <p>人物名を入力してください。</p>
 <?php } else
  if($sql->execute(
    [htmlspecialchars($_POST['vice_name']), $_POST['h_name'],
                      $_POST['id']]
  )) { ?>
  <p>更新成功しました。</p>
  <?php } else {?>
    <p>更新に失敗しました。</p>
    <?php } ?>
<?php require 'footer.php'; ?>