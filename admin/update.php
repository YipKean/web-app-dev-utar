<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>

    <style>
        .error {
            color:red;
        }
    </style>
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
</head>

<body>
    <?php

    $conn = new mysqli('localhost', 'root', '', 'uecs2094_pie'); // Update with your database details
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $id = $_GET['id'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['id'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $type = $_POST['type'];

        $stmt = $conn->prepare("UPDATE announcement SET subject = ?, message = ?, type = ? WHERE id = ?");
        $stmt->bind_param("sssi", $subject, $message, $type, $id);

        if ($stmt->execute()) {
            echo "Announcement updated successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        // Fetch existing data
        $result = $conn->query("SELECT * FROM announcement WHERE id=$id");
        $row = $result->fetch_assoc();
        $subject = $row['subject'];
        $message = $row['message'];
        $type = $row['type'];
    }

    ?>

    <div>
        <div>
            <h1>Update</h1>
        </div>
        <div>
            <form method="post" onsubmit="return validateForm();">
                <input type="hidden" name="id" value="<?= $id ?>">

                <label for="subject">Subject:</label><br>
                <input type="text" id="subject" name="subject" value="<?= $subject ?>"><br>
                <p class="error" id="subject_error"></p><br>

                <label for="message">Message:</label><br>
                <textarea id="message" name="message"> <?= $message ?></textarea><br>
                <p class="error" id="message_error"></p><br>

                <label for="type">Type:</label><br>
                <input type="radio" id="project_updates" name="type" value="P" <?= $type === 'P' ? 'checked' : '' ?>>
                <label for="project_updates">Project Updates</label><br>
                <input type="radio" id="traffic_announcement" name="type" value="T" <?= $type === 'T' ? 'checked' : '' ?>>
                <label for="traffic_announcement">Traffic Announcement</label><br>
                <p class="error" id="type_error"></p><br>

                <input type="submit" value="Update">
            </form>
        </div>
    </div>

</body>

</html>