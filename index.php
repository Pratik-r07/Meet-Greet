<!DOCTYPE HTML>
<html>


    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css" media="all">
        
    </head>

    <body>


        <section id="header">

            <nav>

                <h2 class="logo">
                    Meet&Greet
                </h2>

                <ul class="nav-items">
                    <li><a href="logout.php">LOGOUT</a></li>
                    <li><a href="login.php">LOGIN/SIGN UP</a></li>
                    <li><a class="active" href="">HOME</a></li>
                    <li><a href="privacy.php">PRIVACY POLICY</a></li>
                    
                        
                </ul>
           
                <div class="person">
                
                    
                    <a href ="profile1.php"><?php session_start();
                    if(isset($_SESSION['authuser_name'])){echo $_SESSION['authuser_name'];}
                    session_abort(); ?></a>
                            
                    
                    
                </div>
                
            </nav>

   

            <main>
                <center>
                <h1 class="font1">EXPLORE, CONNECT, LEARN</h1>
           
                <p class="subheading"> </p>
            </center>
  
            </main>

        </section>
 
 
        <section class="collection">
        <?php

?> 
            <ul class="collection-list">
<?php
session_start();
if (!isset($_SESSION['user_role'])) {
    header("location: login.php"); // Redirect to login page if not logged in
    exit();
}
$user = $_SESSION['user_role']


?>
                <li><a href="cesa.php">CESA</a></li>
                <li><a href="mesa.php">MESA</a></li>
                <li><a href="itsa.php">ITSA</a></li>
                <li><a href="csa.php">CSA</a></li>
                <!--<li><a href="">Typography</a></li>-->
                <!-- <li><a href="">Web Desing</a></li> -->
                <?php if ($user === 'admin'): ?>
                    <a href="form.php">
                <button class="hover-button">New Post</button></a>
                <?php endif; ?>

            </ul>
        </section>
            
      <br><br>
      <h1>Latest News And Events Of Clubs</h1>
      <div class="news-grid">
      <?php 
      require 'db.php';

      $query = "SELECT * FROM events WHERE community='ITSA' ";
      $query_run = mysqli_query($conn, $query);
      $check = mysqli_num_rows($query_run) > 0;
      if(isset($_GET['id'])) {
        $id=$_GET['id'];
        $delete = mysqli_query($conn, "DELETE FROM `events` WHERE `id`='$id' ");
    }


      if($check)
      {
        while($row=mysqli_fetch_assoc($query_run))
        {
            ?>
                                <div class="news-card">
                         <img class="image" src="uploads/<?php echo $row ['image'];?>"> 
                        <h2 class = "title"><?php echo $row ['name']?></h2>
                        <h3 class = "date"><?php echo $row ['date']?></h3>
                        <h3 class = "Location"><?php echo $row ['location']?></h3>
                        <p class="desc"><?php echo $row ['description']?></p>
                        <?php if ($user === 'admin'): ?>
                     <a href = 'index.php?id=<?php echo $row['id'] ?>'
                        class='delete-button'> Delete </a>  
                        <?php endif; ?>
                        <a class = "" href="#">Details</a>
                  
                    </div>

            <?php
        }
      }

      else 
      {
       ?>
       <div class= "news-card">
        <h1>No Upcoming events for ITSA</h2>
      </div>

       <?php
      }
      ?>
       <?php 
      require 'db.php';

      $query = "SELECT * FROM events WHERE community='CESA' ";
      $query_run = mysqli_query($conn, $query);
      $check = mysqli_num_rows($query_run) > 0;
      if(isset($_GET['id'])) {
        $id=$_GET['id'];
        $delete = mysqli_query($conn, "DELETE FROM `events` WHERE `id`='$id' ");
    }


      if($check)
      {
        while($row=mysqli_fetch_assoc($query_run))
        {
            ?>
                                <div class="news-card">
                         <img class="image" src="uploads/<?php echo $row ['image'];?>"> 
                        <h2 class = "title"><?php echo $row ['name']?></h2>
                        <h3 class = "date"><?php echo $row ['date']?></h3>
                        <h3 class = "Location"><?php echo $row ['location']?></h3>
                        <p class="desc"><?php echo $row ['description']?></p>
                        <?php if ($user === 'admin'): ?>
                     <a href = 'index.php?id=<?php echo $row['id'] ?>'
                        class='delete-button'> Delete </a>  
                        <?php endif; ?>
                        <a class = "" href="#">Details</a>
                  
                    </div>

            <?php
        }
      }

      else 
      {
       ?>
       <div class= "news-card">
        <h1>No Upcoming events for CESA</h2>
      </div>

       <?php
      }
      ?>
       <?php 
      require 'db.php';

      $query = "SELECT * FROM events WHERE community='MESA' ";
      $query_run = mysqli_query($conn, $query);
      $check = mysqli_num_rows($query_run) > 0;
      if(isset($_GET['id'])) {
        $id=$_GET['id'];
        $delete = mysqli_query($conn, "DELETE FROM `events` WHERE `id`='$id' ");
    }

      if($check)
      {
        while($row=mysqli_fetch_assoc($query_run))
        {
            ?>
                                <div class="news-card">
                         <img class="image" src="uploads/<?php echo $row ['image'];?>"> 
                        <h2 class = "title"><?php echo $row ['name']?></h2>
                        <h3 class = "date"><?php echo $row ['date']?></h3>
                        <h3 class = "Location"><?php echo $row ['location']?></h3>
                        <p class="desc"><?php echo $row ['description']?></p>
                        <?php if ($user === 'admin'): 
                                       
                        ?>
                        <a href = 'index.php?id=<?php echo $row['id'] ?>'
                        class='delete-button'> Delete </a>  
                        <?php endif; ?>
                        <a class = "" href="#">Details</a>
                    </div>

            <?php
        }
      }

      else 
      {
        ?>
        <div class= "news-card">
         <h1>No Upcoming events for MESA</h2>
       </div>
 
        <?php
      }
      ?>
             <?php 
      require 'db.php';

      $query = "SELECT * FROM events WHERE community='CSA'";
      $query_run = mysqli_query($conn, $query);
      $check = mysqli_num_rows($query_run) > 0;
      if(isset($_GET['id'])) {
        $id=$_GET['id'];
        $delete = mysqli_query($conn, "DELETE FROM `events` WHERE `id`='$id' ");
    }

      if($check)
      {
        while($row=mysqli_fetch_assoc($query_run))
        {
            ?>
                                <div class="news-card">
                         <img class="image" src="uploads/<?php echo $row ['image'];?>"> 
                        <h2 class = "title"><?php echo $row ['name']?></h2>
                        <h3 class = "date"><?php echo $row ['date']?></h3>
                        <h3 class = "Location"><?php echo $row ['location']?></h3>
                        <p class="desc"><?php echo $row ['description']?></p>
                        <?php if ($user === 'admin'): 
                                       
                        ?>
                        <a href = 'index.php?id=<?php echo $row['id'] ?>'
                        class='delete-button'> Delete </a>  
                        <?php endif; ?>
                        <a class = "" href="#">Details</a>
                    </div>

            <?php
        }
      }

      else 
      {
        ?>
        <div class= "news-card">
         <h1>No Upcoming events for MESA</h2>
       </div>
 
        <?php
      }
      ?>
           
                
                  
                </div>
                

        

        <section class="footer">
            <article class="dribble-logo-container">

                <h2 class="logo logo-pink">
                Meet&Greet
                </h2>

                <p class="footer-subheading"> <br> leading community for creatives to share,<br> grow, and get hired.</p>

               </article>
        </section>    

        <footer>
            <p class="footer-subheading last">© 2023 Meet&Greet. </p>

            
            
        </footer>

    </body>


</html>