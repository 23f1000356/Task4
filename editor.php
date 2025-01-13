<?php
session_start();
include('db_connection.php');


// Editor logic and content...
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor Dashboard</title>
    <!-- Add your CSS and other required code -->
</head>
<body>
<div id="sidebar">
    <a href="dashboard.php">Dashboard</a>
    <a href="edit_profile.php">Edit Profile</a>
    <a href="user_details.php">User Details</a>
    <a href="admin.php">Admin</a>
    <a href="editor.php">Editor</a>
</div>


    <!-- Main content -->
    <div class="container mt-4">
        <h1>Editor Dashboard</h1>
        <!-- Your editor page content goes here -->
    </div>

    <!-- Footer and other content -->
</body>
</html>
