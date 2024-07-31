<!-- contact/index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>

<?php
$data = [];
$errors = [];
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = $_POST;

    // Perform validation
    if (empty($data['salutation'])) {
        $errors['salutation'] = 'Salutation is required.';
    }
    if (empty($data['name'])) {
        $errors['name'] = 'Name is required.';
    }
    if (empty($data['email'])) {
        $errors['email'] = 'Email is required.';
    } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Invalid email format.';
    }
    if (empty($data['phone'])) {
        $errors['phone'] = 'Phone number is required.';
    }
    if (empty($data['enquiry'])) {
        $errors['enquiry'] = 'Please select an enquiry type.';
    }
    if (empty($data['subject'])) {
        $errors['subject'] = 'Subject is required.';
    }

    // If no errors, process the form (e.g., send an email)
    if (empty($errors)) {
        $to = 'example@example.com'; // Change to your email
        $subject = 'Contact Us Form Submission';
        $message = "Salutation: {$data['salutation']}\nName: {$data['name']}\nEmail: {$data['email']}\nPhone: {$data['phone']}\nEnquiry: {$data['enquiry']}\nSubject: {$data['subject']}";
        $headers = "From: no-reply@example.com";

        if (mail($to, $subject, $message, $headers)) {
            $success = 'Thank you for contacting us. We will get back to you soon.';
            $data = []; // Clear form data
        } else {
            $errors['form'] = 'There was a problem sending your message. Please try again.';
        }
    }
}
?>

<div class="container">
    <div>
        <?php include ('../../includes/header.php') ?>
        <?php include ('../../includes/navigation.php') ?>
    </div>
    <div class="form">
        <h2>Contact Us</h2>
        <?php if (!empty($success)): ?>
            <p><?= $success ?></p>
        <?php endif; ?>

        <?php if (!empty($errors['form'])): ?>
            <p class="error"><?= $errors['form'] ?></p>
        <?php endif; ?>

        <?php include '_form.php'; ?>
    </div>
</div>
<?php include ('../../includes/footer.php') ?>
</body>
</html>
