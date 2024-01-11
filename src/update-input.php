<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php require 'db-connect.php';?>
<link rel="stylesheet" href="css/all.css">
<?php $pdo=new PDO($connect,USER,PASS);
foreach($pdo->query('select * from vice') as $row) { ?>
 <form action="update-output.php" method="post">
    <?php echo'<input type="hidden" name="id" value="', $row["id"],'">';
    echo $row['id'];
    echo '<input type="text" name="vice_name" value="' , $row['vice_name'],'">'; 
    echo '<input type="text" name="h_name" value="' , $row['h_name'] , '">';?>
    <input type="submit" value="更新">
 </form>
<?php }?>

<?php require 'footer.php'; ?>