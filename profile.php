<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="style.css"> <!-- Link to the CSS file -->
</head>
<body>
    <!-- Cover Section -->
    <div class="cover">
        <img src="profilecover2.jpg" alt="Profile Cover Image">
    </div>

    <!-- Profile Box -->
    <div class="profilebox">
        <h1 class="headingline">Profile Information</h1>
        <div class="info">
            <!-- Form for taking user input -->
            <form method="POST" action="">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>

                <label for="occupation">Occupation:</label>
                <input type="text" id="occupation" name="occupation" required><br><br>

                <label for="task">Task:</label>
                <input type="text" id="task" name="task" required><br><br>

                <label for="status">Status:</label>
                <select id="status" name="status" required>
                    <option value="Pending">Pending</option>
                    <option value="In Progress">In Progress</option>
                    <option value="Completed">Completed</option>
                </select><br><br>

                <input type="submit" value="Submit">
            </form>
        </div>

        <!-- Display Profile Information and Task Table -->
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Collect user input
                $name = htmlspecialchars($_POST['name']);
                $email = htmlspecialchars($_POST['email']);
                $occupation = htmlspecialchars($_POST['occupation']);
                $task = htmlspecialchars($_POST['task']);
                $status = htmlspecialchars($_POST['status']);
        ?>
        <div class="info">
            <h2>Profile Details</h2>
            <p>Name: <?php echo $name; ?></p>
            <p>Email: <?php echo $email; ?></p>
            <p>Occupation: <?php echo $occupation; ?></p>
        </div>

        <!-- Table Container -->
        <div class="table-container">
            <div class="table-wrapper">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Task</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><?php echo $task; ?></td>
                            <td><?php echo $status; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <?php
            }
        ?>
    </div>
</body>
</html>
