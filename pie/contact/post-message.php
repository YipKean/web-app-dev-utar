<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $salutation = htmlspecialchars(trim($_POST['salutation']));
            $name = htmlspecialchars(trim($_POST['name']));
            $email = htmlspecialchars(trim($_POST['email']));
            $phone = htmlspecialchars(trim($_POST['phone']));
            $enquiry = htmlspecialchars(trim($_POST['enquiry']));
            $subject = htmlspecialchars(trim($_POST['subject']));

            echo "<h3>Form Submission Result:</h3>";
            echo "<h3>Salutation: $salutation</h3>";
            echo "<h3>Name: $name</h3>";
            echo "<h3>Email: $email</h3>";
            echo "<h3>Phone: $phone</h3>";
            echo "<h3>Enquiry Type: $enquiry</h3>";
            echo "<h3>Subject: $subject</h3>";

        } else {
            // If the form was not submitted, redirect to the contact form page
            echo "<h1> NO! </h1>";
        }

        
    ?>
</body>
</html>
