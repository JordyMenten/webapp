<?php
echo gethostname();
echo "<br>";
$password = getenv('PASSWORD');
$servername = getenv('SERVERNAME');
$username = "apache";
$dbname = "employees";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT emp_no, first_name, last_name FROM employees WHERE emp_no <= 10050";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "Employee number: " . $row["emp_no"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

<html>
<img src="https://pe-image-bucket.s3.amazonaws.com/test-pattern-152459_960_720.png?fbclid=IwAR1udSaMlCJc5bBu48zESNI_dxc8o3LrARUZMSEx5i9K_uglrNfxLSNWyqE">
</html>
