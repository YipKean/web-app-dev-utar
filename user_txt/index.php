<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Users</title>
    <style>
        table {
            border-collapse: collapse;
            width: auto;
        }

        td, th{
            border: 1px solid black;
            padding : 1vh;
        }
    </style>
</head>

<body>
    <h2>Display users</h2>
    <!-- Read from txt file
        Store in variable
        access variable
        print to table
        button to create.php -->
    <?php

    $file = fopen("user.txt", "r");
    echo "<table>";
    echo "<tr>";
    echo "<th> username </th>";
    echo "<th> email </th>";
    echo "<th> gender </th>";

    while (($line = fgets($file)) !== false) {
        $data = explode("\t", trim($line));

        echo "<tr>";
        echo "<td>" . $data[0] . "</td>";
        echo "<td>" . $data[1] . "</td>";
        echo "<td>" . $data[2] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
    fclose($file);
    ?>
    <br>
    <a href="/user/create.php"><button>Create new user</button></a>
</body>

</html>