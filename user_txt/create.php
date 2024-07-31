<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
</head>

<body>
    <!-- Form that takes value
        action= index.php, POST 
        save into txt file
        -->
    <h3>Create User</h3>
    <form method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>

        <label for="gender">Gender:</label><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br><br>

        <input type="submit">
    </form>

    <a href="/user/index.php"><button>Read all Users</button></a>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];

        $data = $username . "\t" . $email . "\t" . $gender . PHP_EOL;

        $file = fopen("user.txt", "a");

        fwrite($file, $data);

        fclose($file);

        echo "<h2>User created successfully</h2>";
    }
    ?>
</body>

</html>