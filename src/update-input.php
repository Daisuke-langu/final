<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php require 'db-connect.php';?>
<link rel="stylesheet" href="css/all.css">
<table class="t1">
<tr><th>商品番号</th><th>工具名</th><th>借りている人物名</th><th></th></tr>
<?php $pdo=new PDO($connect,USER,PASS);

foreach($pdo->query('select * from vice') as $row) { ?>
 <form action="update-output.php" method="post">
   <tr>
    <?php echo'<input type="hidden" name="id" value="', $row["id"],'">';
    echo '<td>',$row['id'],'</td>';
    echo '<td><input type="text" name="vice_name" value="' , $row['vice_name'],'"></td>'; 
    echo '<td><input type="text" name="h_name" value="' , $row['h_name'] , '"></td>';?>
    <td><input type="submit" value="更新"></td>
    </tr>
 </form>
<?php }?>
</table>
<?php require 'footer.php'; ?>