<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css')?>">
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <?php if ($this->session->userdata('status') !="login") {
          # code...
        ?>
        <li class="active"><a href="<?php echo base_url('user/User/beranda') ?>">Beranda<span class="sr-only">(current)</span></a></li>
      <?php  }else{

        ?>
 <li class="active"><a href="<?php echo base_url('user/User/home') ?>">Beranda<span class="sr-only">(current)</span></a></li>
      <?php }?>
        <li><a href="<?php echo base_url('user/User/profil_perusahaan') ?>">Profil</a></li>
         <li><a href="<?php echo base_url('user/User/input_biodata') ?>">Isi Biodata</a></li>
       
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
      
        <?php if ($this->session->userdata('status')=='login') {
          # code...
         ?>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $this->session->userdata('username'); ?><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url('user/User/profil') ?>">Profil</a></li>
           
            <li><a href="<?php echo base_url('user/User/log_out') ?>">Log Out</a></li>
           
           
          </ul>
        </li>
        <?Php }else{
          echo '<li><a href="'.base_url('user/User/login').'">Login</a></li>';

        }?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</body>
</html>
<script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js')?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url('assets/bower_components/jquery-ui/jquery-ui.min.js')?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')?>"></script>