<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create announcement</title>

    <script>
        function validateForm() {
            let subject = document.getElementById('subject').value;
            let message = document.getElementById('message').value;
            let type = document.querySelector('input[name="type"]:checked');

            let isValid = true;

            if (subject.trim() === '') {
                document.getElementById('subject_error').textContent = 'Subject is required.';
                isValid = false;
            } else {
                document.getElementById('subject_error').textContent = '';
            }

            if (message.trim() === '') {
                document.getElementById('message_error').textContent = 'Message is required.';
                isValid = false;
            } else {
                document.getElementById('message_error').textContent = '';
            }

            if (!type) {
                document.getElementById('type_error').textContent = 'Type is required.';
                isValid = false;
            } else {
                document.getElementById('type_error').textContent = '';
            }

            return isValid;
        }
    </script>

    <?php
    //establish connection
    $conn = new mysqli('localhost', 'root', '', 'uecs2094_pie');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $subject = $message = $type = "";
    $subject_error = $message_error = $type_error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //easier approach
        $subject = $conn->real_escape_string($_POST['subject']);
        $message = $conn->real_escape_string($_POST['message']);
        $type = $conn->real_escape_string($_POST['type']);
        $posted = date('Y-m-d H:i:s');

        $sql = "INSERT INTO announcement (subject, message, type, posted) 
                VALUES ('$subject', '$message', '$type', '$posted')";

        if ($conn->query($sql) === TRUE) {
            header("Location: index.php");
            echo "New announcement created successfully.";
        } else {
            echo "Error: " . $conn->error;
        }

        //good practice
        // $stmt = $conn->prepare("INSERT INTO announcement (subject, message, type, posted) VALUES (?, ?, ?, ?)");
        // $stmt->bind_param("ssss", $subject, $message, $type, $posted);
    
        // if ($stmt->execute()) {
        //     echo "New announcement created successfully.";
        // } else {
        //     echo "Error: " . $stmt->error;
        // }
    
        //easier, for exam

    }
    ?>

    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <h2>Create</h2>
    <form method="post" onsubmit="return validateForm();">
        <label for="subject">Subject:</label><br>
        <input type="text" id="subject" name="subject"><br>
        <p class="error" id="subject_error"></p><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message"></textarea><br>
        <p class="error" id="message_error"></p><br>

        <label for="type">Type:</label><br>
        <input type="radio" id="project_updates" name="type" value="P">
        <label for="project_updates">Project Updates</label><br>
        <input type="radio" id="traffic_announcement" name="type" value="T">
        <label for="traffic_announcement">Traffic Announcement</label><br>
        <p class="error" id="type_error"></p><br>

        <input type="submit" value="Create">
    </form>


</body>

</html>