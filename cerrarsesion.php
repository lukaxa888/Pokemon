<?php
session_start();
unset($_SESSION['user']);
echo header('Location: '.'index.php');
?>