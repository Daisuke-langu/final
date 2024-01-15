<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<?php require 'db-connect.php';?>
<link rel="stylesheet" href="css/all.css">
<table class="t1">
    <tr><th>商品番号</th><th>工具名</th><th>借りている人物名</th><th></th></tr>
<?php $pdo=new PDO($connect,USER,PASS);
foreach($pdo->query('select * from vice') as $row) { ?>
 <tr>
    <?php echo '<td>', $row['id'] ,'</td>';?>
    <?php echo '<td>', $row['vice_name'] ,'</td>';?>
    <?php echo '<td>', $row['h_name'] ,'</td>';?>
    <td>
        <?php echo '<a href="delete-output.php?id=', $row['id'], '">削除</a>'; ?>
    </td>
 </tr>
    
<?php }?>
</table>

<?php require 'footer.php'; ?>