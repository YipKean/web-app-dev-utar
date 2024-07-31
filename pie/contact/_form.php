<!-- contact/_form.php -->
<form action="_index.php" method="POST" onsubmit="verifyInput(event)">
    <label for="salutation">Salutation:</label><br>
    <select name="salutation" id="salutation">
        <option value="Mr" <?= (isset($data['salutation']) && $data['salutation'] == 'Mr') ? 'selected' : '' ?>>Mr</option>
        <option value="Ms" <?= (isset($data['salutation']) && $data['salutation'] == 'Ms') ? 'selected' : '' ?>>Ms</option>
        <option value="Mrs" <?= (isset($data['salutation']) && $data['salutation'] == 'Mrs') ? 'selected' : '' ?>>Mrs</option>
        <option value="Mdm" <?= (isset($data['salutation']) && $data['salutation'] == 'Mdm') ? 'selected' : '' ?>>Mdm</option>
    </select>
    <br>
    <p id="salutation_error"><?= $errors['salutation'] ?? '' ?></p> 

    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" value="<?= htmlspecialchars($data['name'] ?? '') ?>"><br>
    <p id="name_error"><?= $errors['name'] ?? '' ?></p>

    <label for="email">Email Address:</label><br>
    <input type="email" id="email" name="email" value="<?= htmlspecialchars($data['email'] ?? '') ?>"><br>
    <p id="email_error"><?= $errors['email'] ?? '' ?></p>

    <label for="phone">Phone Number:</label><br>
    <input type="text" id="phone" name="phone" value="<?= htmlspecialchars($data['phone'] ?? '') ?>"><br>
    <p id="phone_error"><?= $errors['phone'] ?? '' ?></p>

    <label for="enquiry">Type Of Enquiry:</label><br>
    <input type="radio" id="general_enquiry" name="enquiry" value="General Enquiry" <?= (isset($data['enquiry']) && $data['enquiry'] == 'General Enquiry') ? 'checked' : '' ?>>
    <label for="general_enquiry">General Enquiry</label><br>
    <input type="radio" id="complaints" name="enquiry" value="Complaints" <?= (isset($data['enquiry']) && $data['enquiry'] == 'Complaints') ? 'checked' : '' ?>>
    <label for="complaints">Complaints</label><br>
    <input type="radio" id="suggestions" name="enquiry" value="Suggestions" <?= (isset($data['enquiry']) && $data['enquiry'] == 'Suggestions') ? 'checked' : '' ?>>
    <label for="suggestions">Suggestions</label><br>
    <p id="enquiry_error"><?= $errors['enquiry'] ?? '' ?></p>

    <label for="subject">Subject:</label><br>
    <input type="text" id="subject" name="subject" value="<?= htmlspecialchars($data['subject'] ?? '') ?>"><br>
    <p id="subject_error"><?= $errors['subject'] ?? '' ?></p>

    <br>
    <input type="submit" value="Submit">
</form>
