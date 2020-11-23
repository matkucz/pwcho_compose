<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
$servername = "10.0.11.2";
$username = "user";
$password = "password";
$dbname = "apache_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, imie, nazwisko FROM test";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  $wyniki = array();
  while($row = $result->fetch_assoc()) {
    $wyniki[] = array(
      "id" => $row["id"],
      "imie" => $row["imie"],
      "nazwisko" => $row["nazwisko"]
    );
  }
  echo json_encode(
    $wyniki
  );

} else {
  echo "Brak danych";
}
$conn->close();

?>
