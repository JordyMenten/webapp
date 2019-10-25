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
<img src="https://pe-image-bucket.s3.amazonaws.com/4A0719E600000578-0-image-a-19_1520584334410-696x462.jpg?fbclid=IwAR3aC7EssaHEdjcM0PVJ87Avyb_SNPMhUwEAN2VfemcUuoDzQarsZ_unnek">
</html>
