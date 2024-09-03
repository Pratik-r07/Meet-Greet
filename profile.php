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
      <!-- <li><a href="#">Settings</a></li> -->
      <li><a href="#">Logout</a></li>
    </ul>
  </div>

  <div class="profile-container">
    <h2>User Profile</h2>

      <form>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" >

      <label for="username">Username:</label>
      <input type="text" id="username" name="username" placeholder="shinderohan_it_se">

      <label for="id">Moodle ID:</label>
      <input type="text" id="id" name="id" placeholder="21104156">

      <label for="department">Department:</label>
      <input type="text" id="department" name="department" placeholder="Information Technology">

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="shinde.rohan@example.com">

      <button type="submit">Save Changes</button>
      </form>
   

     
    
  </div>
</body>

</html>
