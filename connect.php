<?php
//connection
function OpenCon(){
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "cs412books";
 $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);
 return $conn;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }

 $conn = OpenCon();

/*
 $sqlquery = "SELECT * FROM content WHERE id=0";
 if ($result = mysqli_query($conn, $sqlquery)){
   $row = mysqli_fetch_array($result);
 }
*/

 ?>
