<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Example</title>
    <script>
        function sendData() {
            // Create a new XMLHttpRequest object
            var xhr = new XMLHttpRequest();

            // Configure it: POST-request to the URL /process.php
            xhr.open('POST', 'process.php', true);

            // Set up the request
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

            // Create a state change callback
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Update the page content with the response
                    document.getElementById('result').innerHTML = xhr.responseText;
                }
            };

            // Collect form data
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;

            // Send the request with the form data
            xhr.send('email=' + encodeURIComponent(email) + '&password=' + encodeURIComponent(password));
        }
    </script>
</head>
<body>
    <h2>Login User</h2>
    <form onsubmit="event.preventDefault(); sendData();">
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" required> <br><br>

        <label for="password">Password</label><br>
        <input type="password" id="password" name="password" required> <br><br>

        <input type="submit" value="Login">
    </form>

    <div id="result"></div>
</body>
</html>
