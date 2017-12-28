<?php
session_start();
$id = $_POST['id'];
$qty = $_POST['qty'];
$_SESSION['id'][] = $id;
$_SESSION['qty'][] = $qty;
print_r($_SESSION['id'])

echo "<script>
alert(".$id.");
window.history.go(-1);
</script>";

?>