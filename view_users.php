<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "Lab_7";

// Connect to DB
$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT matric, name, role FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Users</title>
</head>
<body>
    <h2>Registered Users</h2>
    <table border="1" cellpadding="8">
        <tr>
            <th>Matric</th>
            <th>Name</th>
            <th>Role</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['matric']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['role']; ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
