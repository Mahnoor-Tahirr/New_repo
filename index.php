<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection fail" .$conn->connect_error);
}
$query = "SELECT * FROM users";
$res = $conn->query($query);
if($res->num_rows>0){
    while($data = $res->fetch_assoc()){
        echo "ID: {$data["id"]} -
        Name: {$data["username"]} -
        Email: {$data["email"]} -
        Password: {$data["password"]}-
        Gender: {$data["gender"]}<br>";
    }
}
$conn->close();
?>