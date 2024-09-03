<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cesa.css">
    <title>Join Our Community</title>
</head>
<body>
    <section id="navbar">
        <nav>
            <h2 class="logo">Meet&Greet</h2>
            <ul class="nav-items">
                <li><a href="index.phpS">HOME</a></li>
                <!-- <li><a href="#">ABOUT</a></li> -->
                <li><a href="login.php">SIGN UP</a></li>
                <li><a href="privacy.php">PRIVACY POLICY</a></li>
            </ul>
            <div class="person">
                <center>
                    <span class="r">R</span>
                </center>
            </div>
        </nav>
    </section>

    <!-- Main Content Section -->
   
    <section id="header">
        <main>
            <center>
                <h1 class="font1">EXPLORE, CONNECT, LEARN</h1>
                <p class="subheading"></p>
            </center>
        </main>
    </section>

    <!-- Collection Section -->
    <section class="collection">
        <ul class="collection-list">
            <li><a href="">CESA</a></li>
            <li><a href="mesa.php">MESA</a></li>
            <li><a href="itsa.php">ITSA</a></li>
            <li><a href="csa.php">CSA</a></li>
        </ul>
        <br><br>
    </section>
    <div class="container">
    <section class="background-image">
        <!-- Add your background image here -->
    

    <section class="join-community">
        <div class="container">
            <h2>What is CESA?</h2>
            <p>"CESA, a student-driven initiative within the Civil Engineering department, is 
                committed to enhancing the academic and professional experience of students. By students, 
                for students,CESA strives to create a supportive community that fosters learning, 
                collaboration, and overall well-being."</p>
                <?php
               session_start();
               if (!isset($_SESSION['branch'])) {
                   header("location: login.php"); // Redirect to login page if not logged in
                   exit();
               };
               $branch = $_SESSION['branch'] ;
                
                if ($branch === 'civil') :?>
            <a href="cesachat.php" class="join-button">Join Now</a>
            <?php endif; ?>

            <?php
               if (!isset($_SESSION['user_role'])) {
                   header("location: login.php"); // Redirect to login page if not logged in
                   exit();
               };
               $admin = $_SESSION['user_role'] ;
                
                if ($admin === 'admin') :?>
            <a href="panelc.php" class="join-button">Manage Users</a>
            <?php endif; ?>
           
        </div>
    </section>
</section>
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
