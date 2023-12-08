<!DOCTYPE html>
<html lang="en">

<head>
	<?php require_once('template/head.php')?>
</head>

<body>
	<div class="container-scroller">
		<!-- partial:partials/_sidebar.html -->
		<?php require_once('template/nav.php')?>
		<!-- content-wrapper ends -->
		<!-- partial -->
		<div class="row">
		<div class="col-lg-12" id="hilang">
                <?= $this->session->flashdata('alert',true);?>
            </div>
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<form action="<?= base_url('admin/password/update'); ?>" method="post">
							<input type="hidden" class="form-control" name="id_user">

							<div class="row mb-5 d-flex justify-content-center">
								<label for="password0" class="col-sm-2 col-form-label">Password Lama</label>
								<div class="col-sm-10">
									<input type="text" id="password0" required class="form-control" name="password0" value="<?= $this->session->userdata('password') ?>">
								</div>
							</div>

							<div class="row mb-5 d-flex justify-content-center">
								<label  for="password1" class="col-sm-2 col-form-label">Password Baru</label>
								<div class="col-sm-10">
									<input type="text" id="password1" required class="form-control" name="password1" value="<?= $this->session->userdata('password') ?>">
								</div>
							</div>

							<div class="row mb-5 d-flex justify-content-center">
								<label  for="password2" class="col-sm-2 col-form-label">Ulangi Password </label>
								<div class="col-sm-10">
									<input type="text" id="password2" required class="form-control" name="password2" value="<?= $this->session->userdata('password') ?>">
								</div>
							</div>



							<div  align="right">
								<button type="submit" class="btn btn-danger">Simpan</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- container-scroller -->
	<!-- plugins:js -->
	<?php require_once('template/js.php');?>
</body>

</html>
