<?php

echo "Hello world";
echo "<br>";

$serverName = $_ENV['serverName'];
$username = $_ENV['userName'];
$password = $_ENV['password'];
$dbName = $_ENV['dbName'];
$port = $_ENV['port'];

// Create connection
$conn = new mysqli($serverName, $username, $password, $dbName, $port);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
echo "<br>";

$sql = "SELECT id, name FROM TestTable";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();

?>