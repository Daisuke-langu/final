<?php session_start();?>
<?php require 'header.php'; ?>
<?php require 'menu.php'; ?>
<link rel="stylesheet" href="css/all.css">
<p>商品を追加します。</p>
<form action="new-aitem-output.php" method="post">
    <div class="tui">
        商品名<input class="tui" type="text" name="vice_name">
    </div>
    <div class="tui">
        借りている人物名<input class="tui" type="text" name="h_name">
    </div>
    <div class="tui">
        <input type="submit" value="追加">
    </div>
</form>
</table>
<?php require 'footer.php'; ?>