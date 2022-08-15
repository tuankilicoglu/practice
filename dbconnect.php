<?php

//local de calıstırmak için
/* $servername = "db";
$username = "db";
$password = "db";
$dbname = "db"; */


//live da calıstırmak icin
$servername = "eu-cdbr-west-03.cleardb.net";
$username = "b37f567b3f741c";
$password = "f43585bf";
$dbname = "heroku_123bc0464991a9f"; 

/* $servername = "ID221855_emirdeneme.db.webhosting.be";
$username = "ID221855_emirdeneme";
$password = "TMM112255";
$dbname = "ID221855_emirdeneme";
 */
try {
  // $conn = new PDO('mysql:host=db;dbname=db', $username, $password);
  $conn = new PDO('mysql:host=eu-cdbr-west-03.cleardb.net;dbname=heroku_123bc0464991a9f', $username, $password);
  //$conn = new PDO('mysql:host=ID221855_emirdeneme.db.webhosting.be;dbname=ID221855_emirdeneme', $username, $password);
  //$conn = new PDO("mysql://b37f567b3f741c:f43585bf@eu-cdbr-west-03.cleardb.net/heroku_123bc0464991a9f?reconnect=true");
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>