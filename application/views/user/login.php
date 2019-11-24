<?php


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php echo $this->session->flashdata('msg'); ?>
			<form action="<?php echo base_url('user/User/login') ?>" method="post">
				<label>Username</label>
				<input type="text" name="username" class="form-control">
				<label>Password</label>
				<input type="password" name="password" class="form-control">
				<button name="login" class="btn btn-danger">Login</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>