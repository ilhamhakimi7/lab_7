<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
</head>
<body>
    <h2>Register User</h2>
    <form action="register_process.php" method="post">
        <label>Matric Number:</label><br>
        <input type="text" name="matric" required><br><br>

        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <label>Role:</label><br>
        <select name="role" required>
            <option value="student">Student</option>
            <option value="lecturer">Lecturer</option>
        </select><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>
