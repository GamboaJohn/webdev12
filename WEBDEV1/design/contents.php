<?php
if(isset($_SESSION['email'])){
  header("location: index.php");
}
?>

<section>
  <div class="container-fluid vh-100">
    <div class="row h-100">
      <!-- Left Side: Image, Logo, and Text -->
      <div class="col-md-7 d-flex flex-column justify-content-center align-items-start text-white"
           style="background: linear-gradient(to right, rgba(255,165,0,0.7), rgba(0,0,0,0.7)), 
                  url('images/images4.png') no-repeat left center / cover;">
        <div class="px-5">
          <h1 class="display-4">SECLS.</h1>
          <p class="lead">That should be me holding your hand
                          That should be me making you laugh
                          That should be me, this is so sad
                          That should be me, that should be me
                          That should be me feeling your kiss
                          That should be me buying you gifts
                          This is so wrong, I can't go on
                          'Til you believe that that should be me, that should be me.</p>
        </div>
      </div>

      <!-- Right Side: Login Form -->
      <div class="col-md-5 d-flex flex-column justify-content-center align-items-center"
           style="background-color: #e0e0e0;"> <!-- Changed background color -->
        <div class="text-center mb-4">
          <img src="images/logo.png" alt="Logo" class="mb-4" style="max-width: 150px;">
        </div>
        <div class="w-75">
          <h3 class="text-center mb-4" style="color: #333;">SIGN IN</h3>
          <!-- form -->
          <form action="config/data.php" method="POST">
            <div class="mb-3">
              <input type="email" id ="email" name = "email" class="form-control" placeholder="Username" style="background-color: #f5f5f5; border-color: #ccc; color: #333;" />
            </div>
            <div class="mb-3">
              <input type="password" id ="password" name = "password" id="password" class="form-control" placeholder="Password" style="background-color: #f5f5f5; border-color: #ccc; color: #333;" />
            </div>
            <div class="mb-3 d-flex justify-content-between align-items-center">
              <div>
                <input type="checkbox" id="showPassword" />
                <label for="showPassword" class="ms-2" style="color: #333;">Show password</label>
              </div>
            </div>
            <button type="submit" class="btn btn-success w-100 mb-3">LOGIN</button>
          </form>
          <!-- end form -->
        </div>
      </div>
    </div>
  </div>
</section>

<!-- JavaScript for Show Password Functionality -->
<script>
  document.getElementById('showPassword').addEventListener('change', function() {
    const passwordField = document.getElementById('password');
    passwordField.type = this.checked ? 'text' : 'password';
  });
</script>
