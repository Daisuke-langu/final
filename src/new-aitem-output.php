<?php session_start();?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php require 'db-connect.php';?>
<link rel="stylesheet" href="css/all.css">
<?php
$pdo=new PDO($connect,USER,PASS);
$sql=$pdo->prepare('insert into vice values(null, ?, ?)');
if($sql->execute([$_POST['vice_name'], $_POST['h_name']])) {?>
    <p>追加しました。</p>
<?php } else { ?>
        <p>追加に失敗しました。</p>
<?php } ?>
<?php require 'footer.php'; ?>