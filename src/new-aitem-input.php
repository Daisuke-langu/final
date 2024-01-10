<?php session_start();?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<p>商品を追加します。</p>
<form action="new-aitem-output.php" method="post">
    商品名<input type="text" name="vice_name"><br>
    価格<input type="text" name="h_name"><br>
    <input type="submit" value="追加">
</form>
<?php require 'footer.php'; ?>