<?php
session_start();
if($_SESSION['isLogin']){
    unset($_SESSION['isLogin']);
    header("Location:Login.php");
}
