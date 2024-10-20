<?php 
$name = htmlspecialchars($_POST['name'],ENT_QUOTES);
$product = htmlspecialchars($_POST['product'],ENT_QUOTES);
$num = htmlspecialchars($_POST['num'],ENT_QUOTES);
echo "私の名前は".$name."<br>";
echo "ご希望商品は".$product."<br>";
echo "ご注文数".$num."<br>";
?>
