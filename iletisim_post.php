<?php
include('header.php');
include('dbconnect.php');
echo "test";
?>




<?php

echo "test";
$name = $_POST['name'];
$surname = $_POST['surname'];
$username = $_POST['username'];
$email = $_POST['email'];
$cinsiyet=$_POST['cinsiyet'];

if( $_POST['name'] == '' ) { echo 'Adınızı yazın!'; }echo "<br>" ;
if( $_POST['surname'] == '' ) { echo 'Soyadınızı yazın!'; }echo "<br>" ;
if( $_POST['username'] == '' ) { echo 'Kullanııc adınızı yazın!'; }echo "<br>" ;
if( $_POST['email'] == '' ) { echo 'Mailinizi yazın!'; } echo "<br>" ;
echo "</br>" ;

echo "İsim-> $name <br>Soyad-> $surname<br>Kullanıcı adı-> $username<br>Mail-> $email";

$sql = "INSERT INTO iletisim (name, surname,username,email, cins) VALUES (?,?,?,?,?)";
$stmt= $conn->prepare($sql);
$stmt->execute([$name, $surname,$username ,$email, $cinsiyet]);
?>

<!--?php
$servername = "db";
$username = "db";
$password = "db";
$dbname = "db";

// Create connection
$conn = new PDO('mysql:host=db;dbname=db', $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, surname ,username  FROM iletisim";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["surname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>

<?php
include('footer.php');
?>