function toggleReplyInput(postId) {
    const post = document.getElementById(postId);
    const replyInput = post.querySelector('.reply-input');
    
    // Toggle the 'show' class to control visibility
    replyInput.classList.toggle('show');

    // Close other reply inputs
    const allReplyInputs = document.querySelectorAll('.reply-input');
    allReplyInputs.forEach((input) => {
        if (input !== replyInput) {
            input.classList.remove('show');
        }
    });
}
