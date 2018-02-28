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
		margin: 10% 33%;
		padding: 36px;
	">
		<center>
			<h1>Thanks!</h1>
			<p>Your account has registered, please login to continue!</p>
      <a class="btn btn-primary" href="<?php echo site_url('index.php/login')?>" style="margin: 24px 0px 0px 0px;"><i class="fas fa-sign-in-alt"></i> <b>Login</b></a>
		</center>
	</div>