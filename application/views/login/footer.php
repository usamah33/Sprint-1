  <footer class="footer bg-dark">
    <div class="container text-light">
      <div class="row">
        <div class="col-md-9">
          <b>
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link text-light" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">Term of Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#">Privacy Policy</a>
              </li>
            </ul>
          </b>
        </div>
        <div class="col-md-3">
          <b>
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link text-light" href="#"><h3><i class="fab fa-facebook-f"></i></h3></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#"><h3><i class="fab fa-twitter"></i></h3></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#"><h3><i class="fab fa-google-plus-g"></i></h3></a>
              </li>
            </ul>
          </b>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <center>
            <small>© travelON 2018. All Rights Reserved.</small>
          </center>
        </div>
      </div>
    </div>
  </footer>

  <!-- [JS External] -->
  <!-- jQuery -->
  <script type="text/javascript" src="<?php echo base_url();?>sauce/jquery/jquery.min.js"></script>
  <!-- Popper -->
  <script type="text/javascript" src="<?php echo base_url();?>sauce/popper/popper.min.js"></script>
  <!-- Bootstrap -->
  <script type="text/javascript" src="<?php echo base_url();?>sauce/bootstrap/js/bootstrap.min.js"></script>
  <!-- Bootstrap Date Picker -->
  <script type="text/javascript" src="<?php echo base_url();?>sauce/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

  <!-- [JS Internal] -->
  <script type="text/javascript">
    $('#input-date').datepicker({
      format: "yyyy/mm/dd",
      todayHighlight: true
    });
  </script>
</body>
</html>