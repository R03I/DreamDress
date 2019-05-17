<?php   
session_start();
unset($_SESSION['name']);
unset($_SESSION['price']);
unset($_SESSION['src']);
echo "A kosár üres";
exit();
?>