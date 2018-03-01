<!--
  Author: W3layouts
  Author URL: http://w3layouts.com
  License: Creative Commons Attribution 3.0 Unported
  License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>
<head>
  <title>travelON</title>
  <!-- [CSS] -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url();?>sauce/bootstrap/css/bootstrap.min.css">
  <!-- Bootstrap Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>sauce/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>sauce/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>sauce/fontawesome/css/fontawesome-all.min.css">

  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="keywords" content="Flight Ticket Booking  Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
  <style type="text/css">
    label {
      font-weight: bold;
      margin: 0px 12px;
    }
    .form-inline .form-control {
      width: 168px;
    }
    .container {
      background-color: #fff;
      padding: 36px;
    }
    .table td, .table th {
      vertical-align: middle;
      text-align: center;
    }
  </style>
</head>
<body style="
  background-color: #bfbfbf;
">
  <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <a class="navbar-brand" href="<?php echo site_url('index.php/client');?>"><h2><i class="fa fa-map"></i> travelON</h2></a>
  <ul class="navbar-nav ml-auto">
    <?php if (isset($datasession['username'])):?>
      <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('index.php/admin');?>">
        <i class="fa fa-user"></i> <?php echo $datasession['fullname'];?>
      </a>
    </li>
    <?php else:?>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('index.php/admin');?>">
        <i class="fa fa-sign-in-alt"></i> Login
      </a>
    </li>
    <?php endif;?>
  </ul>
</nav>
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th colspan="2">Flight</th>
          <th>Depart</th>
          <th>Price</th>
          <th>Passenger(s)</th>
          <th>Total Price</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($dataget as $d) {
          echo "<tr>";
          echo "<td>".$d->description."</td>";
          echo "<td>".$d->code."</td>";
          echo "<td>".$d->depart_at."</td>";
          echo "<td>Rp".number_format(intval($d->price),0,",",".")."</td>";
          echo "<td>".$dataprice['passenger']."</td>";
          echo "<td>Rp".number_format(intval($dataprice['total_price']),0,",",".")."</td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
  <div class="container" style="padding-bottom: 72px;">
    <form action="">
      <div class="row">
        <div class="col-sm-5">
          <div class="form-group">
            <label>Name:</label>
            <input type="text" name="name" class="form-control">
          </div>
        </div>
        <div class="col-sm-5">
          <div class="form-group">
            <label>Phone:</label>
            <input type="text" name="name" class="form-control" placeholder="use international format, ex: +628...">
          </div>
        </div>
        <div class="col-sm-2">
          <div class="form-group">
            <label>Gender:</label>
            <select name="name" class="form-control">
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
            </select>
          </div>
        </div>
        
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="form-group">
            <label>Address:</label>
            <textarea class="form-control" rows="5"></textarea>
           </div>
        </div>
      </div>
    </form>
    <button class="btn btn-secondary float-left" onclick="window.history.back()"><i class="fa fa-angle-left"></i> <b>Back</b></button>
    <button class="btn btn-primary float-right"><b>Next</b> <i class="fa fa-angle-right"></i></button>
  </div>

  <!-- [JavaScript] -->
  <!-- jQuery -->
  <script type="text/javascript" src="<?php echo base_url();?>sauce/jquery/jquery.min.js"></script>
  <!-- Popper -->
  <script type="text/javascript" src="<?php echo base_url();?>sauce/popper/popper.min.js"></script>
  <!-- Bootstrap -->
  <script type="text/javascript" src="<?php echo base_url();?>sauce/bootstrap/js/bootstrap.min.js"></script>
  <!-- Bootstrap Date Picker -->
  <script type="text/javascript" src="<?php echo base_url();?>sauce/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  <script type="text/javascript">
    $('#input-date').datepicker({
      format: "yyyy/mm/dd",
      todayHighlight: true
    });
  </script>
</body>
</html>