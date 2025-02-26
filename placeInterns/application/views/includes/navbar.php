<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar w/ text</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav">
       <li class="nav-item active">
         <a class="nav-link" href="<?php echo URLROOT; ?>">Home</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="<?php echo URLROOT; ?>/pages/about">About</a>
       </li>
     </ul>
     <ul class="navbar-nav ml-auto">
     <?php if(isset($_SESSION['user_id'])) : ?>
       <li class="nav-item">
         <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
       </li>
     <?php else : ?>
       <li class="nav-item">
         <a class="nav-link" href="<?php echo URLROOT; ?>/users/register">Register</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="<?php echo URLROOT; ?>/users/login">Login</a>
       </li>
     <?php endif; ?>
     </ul>
  </div>
</nav>