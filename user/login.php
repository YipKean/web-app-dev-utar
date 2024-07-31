<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <?php session_start() ?>
    
    <h2>Login User</h2>
    <form method="POST">
        <label name="email">Email</label><br>
        <input type="email" id="email" name="email"> <br><br>

        <label name="password">Password</label><br>
        <input type="password" id="password" name="password"> <br><br>

        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $password = md5($_POST["password"]);

        $conn = new mysqli('localhost', 'root', '', 'uecs2094_pie');

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Login successful, set session variables
            $user = $result->fetch_assoc();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];

            header("Location: account.php");
            exit();
        } else {
            echo "<p style='color: red;'>Invalid email or password.</p>";
        }

        $stmt->close();
        $conn->close();
    }
    ?>
</body>

</html>