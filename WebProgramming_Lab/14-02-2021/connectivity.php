
<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "info";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM `user`";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
    <tr>
    <th>IUser Id</th>
    <th>User Name</th>
    <th>Conatct</th>
    </tr>";
    
    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['userid'] . "</td>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['contact'] . "</td>";
    echo "</tr>";
    }
    echo "</table>";
}
?> 

</body>
</html>