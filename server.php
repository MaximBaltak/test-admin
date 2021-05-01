<?php
$msql=include './conection.php';

if(!isset($_POST["login"])||!isset($_POST["password"])){
    return null;
}else {
    $login = $_POST["login"];
    $password = $_POST["password"];
    mysqli_set_charset($msql, 'utf8');
    $result = mysqli_query($msql, 'SELECT*FROM active');
    if (!$result) {
        return null;
    }
    while ($row = mysqli_fetch_array($result)) {
        if ($row['login'] === $login && $row['password'] === $password) {
            echo "<h2>С возвращение, {$row['name']}</h2>";
        }
    }

}
