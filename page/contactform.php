<?php
echo '
<div class="container">
  <div class="row pt-5" id="contact">
    <div class="col text-center">
      <h1>Contact Us</h1>
      <hr class="w-50 mx-auto">
    </div>
  </div>
  
  <div class="row">
    <div class="col-12 col-md-6 mx-auto">
      <form action="./php/complain.php" method="POST">
        <div class="mb-3">
          <label for="cname" class="form-label"><i class="fas fa-user fa-fw"></i> Your Name</label>
          <input type="text" class="form-control" name="cname" id="cname" placeholder="Enter your name..." required>
        </div>
        <div class="mb-3">
          <label for="cmail" class="form-label"><i class="fas fa-paper-plane fa-fw"></i> E-Mail</label>
          <input type="email" class="form-control" name="cmail" id="cmail" placeholder="abc123@xyz.com" required>
        </div>
        <div class="mb-3">
          <label for="message" class="form-label"><i class="fas fa-comment-alt fa-fw"></i> Query Details</label>
          <textarea class="form-control" id="message" name="message" rows="5" placeholder="Enter your message..."   required></textarea>
        </div>
        <div class="mt-4">
          <button type="submit" class="btn btn-primary w-100">Send</button>
        </div>
      </form>
    </div>
  </div>
</div>
';
?>