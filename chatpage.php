<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cp.css">
    <script src="cp.js"></script>
    <title>Meet&Greet</title>
</head>
<body>
    <nav>

        <h2 class="logo">
            Meet&Greet
        </h2>

        <h1 class="font1">EXPLORE, CONNECT, LEARN</h1>
        <div class="person">
            
            
        </div>
        </nav>
     <!-- Navigation Bar
     <div class="navbar">
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="#">Contact</a>
    </div> -->
    <div class="page-container">
  <!-- Sidebar -->
        <div class="sidebar">
            <h2>Categories</h2>
            <ul>
                <li><a href="#">About Me</a></li>
                <li><a href="#">Get to Know-ITSA</a></li>
                <li><a href="#">Home</a></li>
                <!-- Add more categories as needed -->
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="discussion-header">
                <h1>Discuss Here ;)</h1>
            </div>
            <div class="discussion-posts">
               
             
                <div class="post" id="post5">
                    <span class="sender">User5:</span>
                    <p>I have a question about technology...</p>
                    <div class="post-actions">
                        <button class="reply-btn" onclick="toggleReplyInput('post5')">Reply</button>
                        <div class="reply-input">
                            <input type="text" placeholder="Type your reply...">
                            <button class="post-btn">Post Reply</button>
                        </div>
                    </div>
                </div>
                <!-- Add more posts as needed -->
            </div>
            <div id="error_status"></div>
            <div class="discussion-input">
                <input class="comment_textbox" placeholder="Ask a question...">
                <button class="post-btn">Post Question</button>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="assests/custom.js"></script>
</body>
</html>
