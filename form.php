<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post an Event News</title>
    <link rel="stylesheet" href="css/form.css">
    <!-- <script src="assests/form.js"></script> -->
</head>
<body>
<?php 

?>
<!-- <?php
if(isset($_SESSION['status']) && $_SESSION != '')
{
    ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php 
    unset($_SESSION['status']);
}
?> -->
<form action="code.php" method="POST" enctype="multipart/form-data">
    <h2>Post an Event News</h2>

    <label >Image</label>
    <input type="file" name="image" required class="form-control">
    <br>
    <label for="1">Name of the event:</label>
    <input type="text" id="1"  name="name" required class="form-control">

    <br>

    <label for="2">Description:</label>
    <input type="text" id="2"  name="description" required class="form-control">

    <br>

    <label for="3">Date:</label>
    <input type="date" id="3" name="date" required class="form-control">

    <br>

    <label for="4">Time</label>
    <input type="time" id="4" name="time" required class="form-control">

    <br>

    <label for="5">Location:</label>
    <input type="text" id="5" name="location" required class="form-control">
     <br>
    
    <label for="dropdown" >Community:</label>
    <select id="dropdown" name = "community" required class="form-control" >
        <option value="ITSA">ITSA</option>
        <option value="CESA">CESA</option>
        <option value="MESA">MESA</option>
        <option value="CSA">CSA</option>
        
    </select>

    <br>

    <input type="submit" value="Submit" name="submit">
</form>

</body>
</html>
