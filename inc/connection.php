<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "management";

$conn = mysqli_connect($server, $username, $password, $database);

// التحقق من حالة الاتصال مع قاعدة البيانات 
if($conn){
    echo "تم الاتصال مع قاعدة البيانات بنجاح .";
}else{
    
    echo "يوجد مشكلة في الاتصال مع قاعدة البيانات: " . mysqli_connect_error();
}

?>
