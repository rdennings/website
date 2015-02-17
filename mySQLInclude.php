<?php
$servername = "localhost";
$username = "dennings_rodney";
$password = "this is yo password yo";
$dbname = "dennings_rdennings1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM indexcon ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
    echo '<h2>' . $row['title'] . '</h2><h3>~' . $row['subtitle'] . '~</h3>' . $row['body'] . '<p>~' . $row['poster'] . '</p>';
    echo '_______';

    }
} else {
    echo "0 results";
}
$conn->close();

?>
