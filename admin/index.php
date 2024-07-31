<!-- admin/index.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Announcements</title>
    <style>
        .error {
            color: red;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 10px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
    <script>
        function deleteAnnouncement(id) {
            if (confirm("Are you sure you want to delete this announcement?")) {
                const xhr = new XMLHttpRequest();
                xhr.open("POST", "delete.php", true);
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        alert("Announcement deleted successfully.");
                        location.reload(); // Reload the page to refresh the list
                    }
                };
                xhr.send("id=" + id);
            }
        }
    </script>
</head>

<body>
    <?php
    $conn = new mysqli('localhost', 'root', '', 'uecs2094_pie'); // Update with your database details
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
        $id = $_POST['id'];

        $stmt = $conn->prepare("DELETE FROM announcement WHERE id = ?");
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            echo "Announcement deleted successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }

    $result = $conn->query("SELECT * FROM announcement");
    ?>

    <div>
        <div style="margin-bottom: 1%">
            <h1>Admin - Announcements</h1>
            <h2>Read</h2>

            <a href="create.php"><button>Create New Announcement</button></a> <br>
        </div>
        <div>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Type</th>
                    <th>Posted</th>
                    <th>Actions</th>
                </tr>

                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= htmlspecialchars($row['subject']) ?></td>
                        <td><?= htmlspecialchars($row['message']) ?></td>
                        <td><?= htmlspecialchars($row['type']) ?></td>
                        <td><?= htmlspecialchars($row['posted']) ?></td>
                        <td>
                            <a href="update.php?id=<?= $row['id'] ?>"><button type="button">Update</button></a>
                            <!-- another method is warp the button with form method = post action = delete.php -->
                            <button type="button" onclick="deleteAnnouncement(<?= $row['id'] ?>)">Delete</button>
                        </td>
                    </tr>
                <?php endwhile; ?>

            </table>
        </div>
    </div>
    <?php $conn->close(); ?>
</body>

</html>