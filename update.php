
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Zihadul";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE Zihadul";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}
$conn->close();

$sql = "CREATE TABLE UP (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(20) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
)";

if ($conn->query($sql) === TRUE) {
  echo "Table UP created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
$conn->close();

$sql = "INSERT INTO UP (firstname, lastname, email)
VALUES ('zihadul', 'islam', 'zihadul@aiub.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();

$sql = "UPDATE UP SET firstname='naeem', lastname='khan', email='khan@aiub.com' WHERE id=2";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
$conn->close();


?>