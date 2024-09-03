<?php 
include "db.php";

if(isset($_GET['id'])) {
    $id=$_GET['id'];
    $delete = mysqli_query($conn, "DELETE FROM `users` WHERE `id`='$id' ");
}

$select = "SELECT * FROM users WHERE branch = 'mech' LIMIT 1, 1844674407370955161";
$query = mysqli_query($conn,$select);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/panel.css">
    <title>User Management Panel</title>
</head>

<body>
    

    <div class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Users</a></li>
            <li><a href="">Settings</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>

    <div class="user-management-container">
        <h2>User Management Panel</h2>
        <table>
            <thead>
                <tr>
                    <!-- <th>Serial No.</th> -->
                    <th>Moodle ID</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Phone No.</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php ?>

            <tbody>
            <?php
            $num = mysqli_num_rows($query);
            if($num>0) {
                while ($result = mysqli_fetch_assoc($query)) {
                    echo "
                    <tr>
                    <td>".$result['id']."</td>
                    <td>".$result['name']."</td>
                    <td>".$result['uname']."</td>
                    <td>".$result['email']."</td>
                    <td>".$result['branch']."</td>
                    <td>".$result['phone']."</td>
                    <td>".$result['role']."</td>
                    <td>
                    <a href = 'panel.php?id=".$result['id']."'
                        class='delete-button'> Delete </a>
                     </td>

                </tr>
                ";
                }
            }
            
            ?>
                
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
</body>

</html>
