<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/profile.css">
    <title>User Profile</title>
</head>

<body>
    <div class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </div>
    <div class="profile-container">
        <h2>User Profile</h2>
<?php
// Include your database connection file (e.g., db.php)
include "db.php";

// Initialize variables with default values
$name = $username = $moodleId = $department = $email = "";

// Assuming you have a user ID, you can retrieve the user's details by ID
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Construct the SQL query to fetch user details
   
    $query = "SELECT * FROM users WHERE id=$id ";
    $query_run = mysqli_query($conn, $query);
    $check = mysqli_num_rows($query_run) > 0;

    if($check)
    {
      while($row=mysqli_fetch_assoc($query_run))
      {
          ?>
        
            
            <h3><?php echo $row ['name']?></h3>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php echo $username; ?>">

            <label for="id">Moodle ID:</label>
            <input type="text" id="id" name="id" value="<?php echo $moodleId; ?>">

            <label for="department">Department:</label>
            <input type="text" id="department" name="department" value="<?php echo $department; ?>">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $email; ?>">

            
       
   
    <?php
        }
      }
    }
      
        ?>
         </div>
</body>

</html>
