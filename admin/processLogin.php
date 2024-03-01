<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $user= $_POST{ 'user'};
    $pass=$_POST{'pass'};
    if($user=='manh'&&$pass=='abc'){
        session_start();
        $_SESSION['isLogin']=$user;
        header("Locaition:admin/index.php");
        else{
            header("Locaton:http://tlu.edu.vn");
        }


}