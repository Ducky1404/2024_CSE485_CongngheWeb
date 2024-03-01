<?php
session_start();//dich vu the
if($_SESSION['isLogin']){
    header("Location:.../Login.php");
}
?>
<h1> Homepage of Dasboad </h1>
<a href =" logout.php"</a>