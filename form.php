<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Example</title>
</head>
<body>
    <h1>User Registration</h1>
    <form action="register.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>
