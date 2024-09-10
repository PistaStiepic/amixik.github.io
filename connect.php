<?php
$uername = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$conn = new mysqli("localhost","root","","test");
if($conn->connect_error){
    die("Connection failed : " .$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration (username , email , password )
    values(? ,?, ?)");
    $stmt->bind_param("sss",$uername , $email ,$password );
    $stmt->execute();
    echo "registration succesfull...";
    $stmt ->close();
    $conn ->close();
}
