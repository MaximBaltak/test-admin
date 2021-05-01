<?php
$host='localhost';
$usename='root';
$password='root';
$database='test';
$msql= mysqli_connect($host,$usename,$password,$database);
if(!$msql){
    echo "Ошибка".mysqli_connect_error();
    exit();
}else{
    return $msql;
}
