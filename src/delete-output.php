<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php require 'db-connect.php';?>
<link rel="stylesheet" href="css/all.css">
<?php $pdo=new PDO($connect,USER,PASS);
$sql=$pdo->prepare('delete from vice where id=?');
if($sql->execute([$_GET['id']])) { ?>
    <p>削除に成功しました。</p>
<?php } else { ?>
    <p>削除に失敗しました。</p>
<?php } ?>

<?php require 'footer.php'; ?>