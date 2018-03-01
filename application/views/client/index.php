  <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <a class="navbar-brand" href="<?php echo site_url('index.php/client');?>"><h2><i class="fas fa-map"></i> travelON</h2></a>
    <ul class="navbar-nav ml-auto">
      <?php if (isset($datasession['username'])):?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('index.php/login');?>">
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
        <a class="nav-link" href="<?php echo site_url('index.php/index.php/login');?>">
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
  <div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="img-fluid" src="<?php echo base_url('sauce/image/');?>banner-1.jpg" alt="Los Angeles">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>We had such a great time in LA!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="img-fluid" src="<?php echo base_url('sauce/image/');?>banner-2.jpg" alt="Chicago">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>We had such a great time in LA!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="img-fluid" src="<?php echo base_url('sauce/image/');?>banner-3.jpg" alt="New York">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>We had such a great time in LA!</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
  <div class="container-fluid bg-primary" style="padding: 36px 72px 36px 72px;">
    <?php if (isset($datasession['username'])):?>
    <form class="form-inline text-light" action="<?php echo site_url('index.php/client/search')?>" method="get">
      <div class="form-group">
        <label>From:</label>
        <select class="form-control width-index" name="from">
          <?php
          for ($i = 0, $j = -1; $i < count($datarute); $i++, $j++) {
            if ($i > 0 && $datarute[$i]->rute_from != $datarute[$j]->rute_from) echo "<option value='".$datarute[$i]->rute_from."'>".$datarute[$i]->rute_from."</option>";
            elseif ($i == 0) echo "<option value='".$datarute[$i]->rute_from."'>".$datarute[$i]->rute_from."</option>";
          }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label>To:</label>
        <select class="form-control width-index" name="to">
          <?php
          for ($i = 0, $j = -1; $i < count($datarute); $i++, $j++) {
            if ($i > 0 && $datarute[$i]->rute_to != $datarute[$j]->rute_to) echo "<option value='".$datarute[$i]->rute_to."'>".$datarute[$i]->rute_to."</option>";
            elseif ($i == 0) echo "<option value='".$datarute[$i]->rute_to."'>".$datarute[$i]->rute_to."</option>";
          }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label>Departure:</label>
        <input id="input-date" class="form-control width-index date-now" type="text" name="departure">
      </div>
      <div class="form-group">
        <label>Passenger(s):</label>
        <input class="form-control" type="number" min="1" max="999" name="passengers" value="1" style="width: 98px;">
      </div>
      <button class="btn btn-light" type="submit" style="margin: 0px 24px;"><i class="fas fa-search"></i> <b>Search</b></button>
    </form>
    <?php else:?>
    <center>
      <div style="color: #fff;">
        <p>Please login first or sign up now!</p>
      </div>
      <a class="btn btn-light" href="<?php echo site_url('index.php/login')?>" style="margin: 0px 12px; width: 11%;"><i class="fas fa-sign-in-alt"></i> <b>Login</b></a>
      <a class="btn btn-light" href="<?php echo site_url('index.php/login/signup')?>" style="margin: 0px 12px; width: 11%;"><i class="fas fa-user-plus"></i> <b>Sign Up</b></a>
    </center>
    <?php endif;?>
  </div>
  <div class="container" style="margin-top: 72px;">
    <div class="row">
      <div class="col-md-4">
        <center>
          <h1><big><big><i class="fas fa-bolt"></i></big></big></h1>
          <h4>Fast</h4>
          <p><small>Add some description.</small></p>
        </center>
      </div>
      <div class="col-md-4">
        <center>
          <h1><big><big><i class="fas fa-info"></i></big></big></h1>
          <h4>Lots of Information</h4>
          <p><small>Add some description.</small></p>
        </center>
      </div>
      <div class="col-md-4">
        <center>
          <h1><big><big><i class="fas fa-clock"></i></big></big></h1>
          <h4>On Time</h4>
          <p><small>Add some description.</small></p>
        </center>
      </div>
    </div>
  </div>
  <div class="container-fluid bg-dark text-light" style="margin-top: 72px;">
    <div class="row">
      <div class="col-md-6" style="padding: 128px;">
        <h1>Fast</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.</p>
      </div>
      <div class="col-md-6" style="padding: 0px;">
        <img src="<?php echo base_url('sauce/image/');?>bg-showcase-1.jpg" width="100%">
      </div>
    </div>
    <div class="row">
      <div class="col-md-6" style="padding: 0px;">
        <img src="<?php echo base_url('sauce/image/');?>bg-showcase-2.jpg" width="100%">
      </div>
      <div class="col-md-6" style="padding: 128px;">
        <h1>Lots of Information</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6" style="padding: 128px;">
        <h1>On Time</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat.</p>
      </div>
      <div class="col-md-6" style="padding: 0px;">
        <img src="<?php echo base_url('sauce/image/');?>bg-showcase-3.jpg" width="100%">
      </div>
    </div>
  </div>
  <div class="container" style="margin-top: 72px;">
    <div class="row" style="margin-bottom: 36px;">
      <div class="col-md-12">
        <center><h1>What's people are saying...</h1></center>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <center>
          <img class="rounded-circle" src="<?php echo base_url('sauce/image/');?>people-1.jpg" height="192px" width="192px" style="margin-bottom: 24px; box-shadow: 1px 2px 5px rgba(0, 0, 0, .5);">
          <h4>Ahmad Nawawi</h4>
          <p>"Greats!"</p>
        </center>
      </div>
      <div class="col-md-4">
        <center>
          <img class="rounded-circle" src="<?php echo base_url('sauce/image/');?>people-1.jpg" height="192px" width="192px" style="margin-bottom: 24px; box-shadow: 1px 2px 5px rgba(0, 0, 0, .5);">
          <h4>Ahmad Nawawi</h4>
          <p>"Greats!"</p>
        </center>
      </div>
      <div class="col-md-4">
        <center>
          <img class="rounded-circle" src="<?php echo base_url('sauce/image/');?>people-1.jpg" height="192px" width="192px" style="margin-bottom: 24px; box-shadow: 1px 2px 5px rgba(0, 0, 0, .5);">
          <h4>Ahmad Nawawi</h4>
          <p>"Greats!"</p>
        </center>
      </div>
    </div>
  </div>