<?php

header("Content-Type:text/html; charset=utf-8");

$servername = "sql113.epizy.com";
$username = "epiz_24874961";
$password = "HuAONipmhAZzWG";
$dbname = "epiz_24874961_tt";

$conn = mysqli_connect($servername, $username, $password,$dbname);
mysqli_query($conn, 'SET NAMES utf8');

/*if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "<span style = 'color: red'>-----Connected successfully-----</span><br><br>";
*/
$stu_name = $_GET[name];
$stu_no = $_GET[number];
$stu_email = $_GET[email];


$sql = "INSERT INTO data (myname, mynumber, myemail) VALUES ('$stu_name', '$stu_no', '$stu_email')";
mysqli_query($conn, $sql);


$sql = "SELECT * FROM data";
$result = mysqli_query($conn, $sql);




if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo " No. " . $row["mynumber"]. " - " . $row["myname"].  " - " . $row["myemail"]."<br>";
    }
}


?>
