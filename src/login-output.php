<?php session_start();?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php require 'db-connect.php';?>
<?php
unset($_SESSION['customer']);
$pdo=new PDO($connect,USER,PASS);
$sql=$pdo->prepare('select * from customer where login=? and password=?');
$sql->execute([$_POST['login'],$_POST['password']]);

foreach($sql as $row){
    // if(password_ver($_POST['password'],$row['password']) == true) {

    $_SESSION['customer']=[
    'id'=>$row['id'],'name'=>$row['name'],
    'address'=>$row['address'],'login'=>$row['login'],
    'password'=>$row['password']];
    // }
}
if(isset($_SESSION['customer'])){
        echo 'いらっしゃいませ、',$_SESSION['customer']['name'],'さん。';
        
    }else {
        echo 'ログイン名またはパスワードが違います。';
    }
    

?>
<?php require 'footer.php'; ?>