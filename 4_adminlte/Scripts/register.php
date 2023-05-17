<?php
session_start();
/*
 echo "<pre>";
    print_r($_POST);
 echo "<pre>";*/

foreach ($_POST as $key => $value){
    //echo "$key: $value<br>";
    if(empty($value)){
        //echo "$key<br>";
        $_SESSION["error"] = "Wypełnij wszystkie pola!";
        echo "<script>history.back();</script>";
        exit();
    }
}

     mysqli_report(MYSQLI_REPORT_STRICT);

try{
    $conn = new mysqli("localhost", "root", "", "tech_internetowe_register");

    //rejestracje uytkoiwnika
    //https://www.php.net/manual/en/mysqli-stmt.bind-param.php
}catch(mysqli_sql_exception $e){
    echo $e->getMessage();
}
echo "ok";






