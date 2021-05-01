<?php
$msql=include './conection.php';

if(!isset($_POST["login"])||!isset($_POST["password"])||!isset($_POST["name"])||!isset($_POST["email"])){
    return null;
}else{
    $login=$_POST["login"];
    $password=$_POST["password"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    mysqli_set_charset($msql,'utf8');
    $result=mysqli_query($msql,'SELECT*FROM active');
    if(!$result){
        return null;
    }
    $m=0;
    while ($row=mysqli_fetch_array($result)){
        if($row['login']===$login && $row['password']===$password){
           $m+=1;
        }
    }
    if($m>0){
        echo "<p>Пользователь с таким именнем существует</p>";
    }else{
        $r=mysqli_query($msql, "INSERT INTO `active`(`name`,`login`,`password`,`email`,`date`) VALUES('".$name."','".$login."','".$password."','".$email."','".date('Y-m-d')."') ");
        if(!$r){
            echo "<h2>Добро пожаловать, {$name}</h2>";;
        }
    }


}
