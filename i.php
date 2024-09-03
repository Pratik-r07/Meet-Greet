<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Chat</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="chat-container">
        <div class="chat">
            <div class="message-card received">
                <div class="user-profile">
                    <img src="user1.jpg" alt="User 1">
                    <span class="username">User 1</span>
                </div>
                <div class="message-content">
                    <p>Hello there!</p>
                </div>
            </div>
            <div class="message-card sent">
                <div class="user-profile">
                    <img src="user2.jpg" alt="User 2">
                    <span class="username">User 2</span>
                </div>
                <div class="message-content">
                    <p>Hi! How can I help you today?</p>
                </div>
            </div>
            <!-- Add more message cards here -->
        </div>
        <div class="input-container">
            <input type="text" id="message-input" placeholder="Type your message...">
            <button id="send-button">Send</button>
        </div>
    </div>
</body>
</html>
