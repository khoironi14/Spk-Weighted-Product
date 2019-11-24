
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css')?>">
</head>
<body>
<div class="container">
	<div class="col-md-6">
		<?php echo $this->session->flashdata('msg'); ?>
		<center><h3>Login Admin</h3></center>
		<form action="<?php echo base_url('Admin/login') ?>" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form-control">
			<label>Password</label>
			<input type="password" name="password" class="form-control">
			<button class="btn btn-primary" name="login">Login</button>
		</form>
	</div>
</div>
</body>
</html>
<script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')?>"></script>