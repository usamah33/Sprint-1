  <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <a class="navbar-brand" href="<?php echo site_url('index.php/client');?>"><h2><i class="fa fa-map"></i> travelON</h2></a>
    <ul class="navbar-nav ml-auto">
      <?php if (isset($datasession['username'])):?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('index.php/admin');?>">
          <i class="fa fa-user"></i> <b><?php echo $datasession['fullname'];?></b>
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
          <i class="fa fa-sign-in-alt"></i> <b>Login</b>
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
  <div class="container bg-light">
    <form class="form-inline" action="<?php echo site_url('index.php/client/search');?>" method="get">
      <div class="form-group">
        <label>From:</label>
        <select class="form-control" name="from">
          <?php
          for ($i = 0, $j = -1; $i < count($datarute); $i++, $j++) {
            if ($i > 0 && $datarute[$i]->rute_from != $datarute[$j]->rute_from) {
              echo "<option value='".$datarute[$i]->rute_from."' ";
              if ($datarute[$i]->rute_from == $datainput['from']) echo "selected";
              echo ">".$datarute[$i]->rute_from."</option>";
            }
            elseif ($i == 0) echo "<option value='".$datarute[$i]->rute_from."'>".$datarute[$i]->rute_from."</option>";
          }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label>To:</label>
        <select class="form-control" name="to">
          <?php
          for ($i = 0, $j = -1; $i < count($datarute); $i++, $j++) {
            if ($i > 0 && $datarute[$i]->rute_to != $datarute[$j]->rute_to) {
              echo "<option value='".$datarute[$i]->rute_to."'";
              if ($datarute[$i]->rute_to == $datainput['to']) echo "selected";
              echo ">".$datarute[$i]->rute_to."</option>";
            }
            elseif ($i == 0) echo "<option value='".$datarute[$i]->rute_to."'>".$datarute[$i]->rute_to."</option>";
          }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label>Departure:</label>
        <input id="input-date" class="form-control" type="text" name="departure" placeholder="YYYY/MM/DD" value="<?php echo $datainput['departure']?>">
       </div>
       <div class="form-group">
         <label>Passenger(s):</label>
         <input class="form-control" type="number" min="1" max="999" name="passengers" value="<?php echo $datainput['passengers'];?>" style="width: 70px;">
      </div>
      <button type="submit" class="btn btn-primary" style="
        margin: 0px 24px; 
      "><i class="fa fa-search"></i> <b>Search</b></button>
    </form>
  </div>
  <div class="container bg-light">
    <?php if (isset($dataget[0]->ruteid)):?>
    <table class="table" 
      <?php
      if (count($dataget) < 2) echo "style='margin-bottom: 19.5%;'";
      if (count($dataget) < 3) echo "style='margin-bottom: 7.8%;'";
      ?>
    >
      <thead>
        <tr>
          <th colspan="2">Flight</th>
          <th>Depart</th>
          <th colspan="2">Price</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($dataget as $d):?>
           <tr>
            <td>
              <img src="<?php echo base_url('sauce/image/').'plane-logo-'.$d->transport_typeid.'.png';?>" height="100px">
            </td>
            <td>
              <?php echo $d->code;?>
            </td>
            <td >
              <script type="text/javascript">
                get = new Date("<?php echo $d->depart_at;?>");
                nameday = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
                namemonth = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December", ];
                day = nameday[get.getDay()];
                date = get.getDate();
                month = namemonth[get.getMonth()];
                year = get.getFullYear();
                hours = get.getHours();
                minutes = get.getMinutes();
                document.write(day + ", " + date + " " + month + " " + year + " at " + hours + ":" + minutes);
              </script>
            </td>
            <td>
              <b>Rp <?php echo number_format(intval($d->price), 0, ",", ".");?></b>
            </td>
            <td>
              <a class="btn btn-success" href="<?php echo site_url('index.php/client/book/').$d->ruteid."/".$datainput['passengers']."/1";?>"><b>Book Now</b> <i class="fas fa-angle-double-right"></i></a>
            </td>
           </tr>
        <?php endforeach;?>
      </tbody>
    </table>
    <?php else:?>
      <div style="margin: 10% 0% 18.4% 0%;">
        <center>
          <h1>Sorry</h1>
          <p>There is no flight at that day, please search another day!</p>
        </center>
      </div>
    <?php endif;?>
  </div>