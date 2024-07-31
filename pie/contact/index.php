<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('input[type=radio][name="enquiry"]').forEach(radio => {

                // Event listener for mousedown event
                radio.addEventListener('mousedown', function (event) {
                    if (this.checked) {
                        this.dataset.wasChecked = "true"; // Remember the checked state
                    } else {
                        delete this.dataset.wasChecked; // Clear the remembered state
                    }
                });

                // Event listener for click event
                radio.addEventListener('click', function (event) {
                    if (this.dataset.wasChecked) {
                        this.checked = false; // Uncheck the radio button
                        delete this.dataset.wasChecked; // Clear the remembered state
                    } else {
                        this.checked = true; // Keep the radio button checked
                    }
                });
            });
        });

        function verifyInput(event) {
            event.preventDefault(); // Prevent form submission

            let enquiryRadios = document.querySelectorAll('input[name="enquiry"]');
            let salutation = document.getElementById('salutation');
            let name = document.getElementById('name');
            let email = document.getElementById('email');
            let phone = document.getElementById('phone');
            let subject = document.getElementById('subject');

            let isEmpty = false;

            // Clear previous error messages
            document.getElementById('name_error').textContent = '';
            document.getElementById('email_error').textContent = '';
            document.getElementById('phone_error').textContent = '';
            document.getElementById('subject_error').textContent = '';
            document.getElementById('enquiry_error').textContent = '';

            // Verify fields are not blank
            if (name.value.trim().length === 0) {
                document.getElementById('name_error').textContent = 'Name cannot be empty!';
                isEmpty = true;
            }

            if (email.value.trim().length === 0) {
                document.getElementById('email_error').textContent = 'Email cannot be empty!';
                isEmpty = true;
            }

            if (phone.value.trim().length === 0) {
                document.getElementById('phone_error').textContent = 'Phone cannot be empty!';
                isEmpty = true;
            }

            if (subject.value.trim().length === 0) {
                document.getElementById('subject_error').textContent = 'Subject cannot be empty!';
                isEmpty = true;
            }

            let isEnquiryChecked = false;
            for (let radio of enquiryRadios) {
                if (radio.checked) {
                    isEnquiryChecked = true;
                    break;
                }
            }

            if (!isEnquiryChecked) {
                document.getElementById('enquiry_error').textContent = 'Please select an enquiry type!';
                isEmpty = true;
            }

            if (!isEmpty) {
                event.target.submit(); // Submit the form if no errors
            }
        }
    </script>

    <style>
        .container {
            display: flex;
            flex-direction: column;
            border: 2px solid black;
            height: 100%;
        }

        .form {
            display: flex;
            flex-direction: column;
            border: 2px solid pink;
            width: 100%;
            align-items: center;
            justify-content: center;
        }

        input[type=submit] {
            width: 100%;
        }

        form p{
            color: red;
        }
    </style>
</head>

<body>
    <div class="container">
        <div>
            <?php include ('../../includes/header.php') ?>
            <?php include ('../../includes/navigation.php') ?>
        </div>
        <div class="form">
            <h2>Contact Us</h2>
            <form action="post-message.php" method="POST" onsubmit="verifyInput(event)">
                <label for="salutation">Salutation:</label><br>
                <select name="salutation" id="salutation">
                    <option value="Mr">Mr</option>
                    <option value="Ms">Ms</option>
                    <option value="Mrs">Mrs</option>
                    <option value="Mdm">Mdm</option>
                </select> <br>
                <p id="salutation_error"></p>

                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name"><br>
                <p id="name_error"></p>

                <label for="email">Email Address:</label><br>
                <input type="email" id="email" name="email"><br>
                <p id="email_error"></p>

                <label for="phone">Phone Number:</label><br>
                <input type="text" id="phone" name="phone">
                <p id="phone_error"></p>
               
                

                <label for="enquiry">Type Of Enquiry:</label><br>
                <input type="radio" id="general_enquiry" name="enquiry" value="General Enquiry">
                <label for="general_enquiry">General Enquiry</label><br>
                <input type="radio" id="complaints" name="enquiry" value="Complaints">
                <label for="complaints">Complaints</label><br>
                <input type="radio" id="suggestions" name="enquiry" value="Suggestions">
                <label for="suggestions">Suggestions</label><p id="enquiry_error"></p>
                

                <label for="subject">Subject:</label><br>
                <input type="text" id="subject" name="subject"><br>
                <p id="subject_error"></p>

                
                <input type="submit" value="Submit">

            </form>
        </div>
    </div>
    <?php include ('../../includes/footer.php') ?>
</body>

</html>