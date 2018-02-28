	<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <a class="navbar-brand" href="<?php echo site_url('index.php/client');?>"><h2><i class="fas fa-map"></i> travelON</h2></a>
    <ul class="navbar-nav ml-auto">
      <?php if (isset($datasession['username'])):?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('index.php/admin');?>">
          <i class="fas fa-user"></i> <b><?php echo $datasession['fullname'];?></b>
        </a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
            <i class="fas fa-globe"></i> <b>English</b>
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item active" href="#">English</a>
            <a class="dropdown-item" href="#">Indonesia</a>
          </div>
        </li>
      <?php else:?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('index.php/admin');?>">
          <i class="fas fa-sign-in-alt"></i> <b>Login</b>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          <i class="fas fa-globe"></i> <b>English</b>
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item active" href="#">English</a>
          <a class="dropdown-item" href="#">Indonesia</a>
        </div>
      </li>
      <?php endif;?>
    </ul>
  </nav>
	<div class="bg-light" style="
		margin: 5% 33%;
		padding: 36px;
	">
		<center>
			<h1>Sign Up</h1>
			<?php
				if(isset($_POST['username']))
					echo "<p class='text-danger'>Your password and confirm password isn't same!</p>"
			?>
		</center>
		<form action="" method="post">
			<div class="form-group">
				<label>Username:</label>
				<input type="username" class="form-control" name="username">
			</div>
			<div class="form-group">
				<label>Fullname:</label>
				<input type="text" class="form-control" name="fullname">
			</div>
			<div class="form-group">
				<label>Password:</label>
				<input type="password" class="form-control" name="password">
			</div>
			<div class="form-group">
				<label>Confirm Password:</label>
				<input type="password" class="form-control" name="confirm_password">
			</div>
			<center style="margin: 64px 0px 0px 0px;">
				<a href="<?php echo site_url('index.php/login');?>" class="btn btn-secondary" style="margin: 0px 24px; width: 120px"><b><i class="fas fa-angle-left"></i> Back</b></a>
				<button type="submit" class="btn btn-primary" style="margin: 0px 24px; width: 120px"><b>Next <i class="fas fa-angle-right"></i></b></button>
			</center>
		</form>
	</div>