<!DOCTYPE html>
<html lang="en">

<head>
	<?php require_once('template/head.php')?>
</head>

<body>
	<div class="container-scroller">
		<!-- partial:partials/_sidebar.html -->
		<?php require_once('template/nav.php')?>
		<!-- partial -->
		<!-- partial -->

		<!-- content-wrapper ends -->
		<!-- partial -->
		<div class="row">
			<div class="col-lg-12" id="hilang">
				<?= $this->session->flashdata('alert',true);?>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<!-- Modal -->
						<div class="row d-flex justify-content-between">
							<p class="card-description"> Pesan & <code>Kritik</code>
							</p>
							<p><a class="btn btn-danger btn-sm" onClick="return confirm('Yakin Menghapus Semua Saran Dan Kritik yang Membangun?')" href="<?= base_url('admin/saran/deleteall') ?>">
									<span class="mdi mdi-delete"></span> Delete All</a></p>
						</div>
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th> No. </th>
										<th> nama </th>
										<th> email</th>
										<th> Saran dan Kritik</th>
										<th> Action </th>
									</tr>
								</thead>
								<?php $no=1;?>
								<tbody>
									<?php foreach ($saran as $us){?>
									<tr>
										<td class="py-1">
											<?= $no++ ;?>
										</td>
										<td>
											<?= $us['nama'];?>
										</td>
										<td><?= $us['email'];?></td>
										<td>
										<button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
												data-target="#exampleModal<?= $us['id_saran'] ?>">
												<span class="mdi mdi-magnify">Lihat Saran</span>
											</button>
										</td>
										<td> <a onClick="return confirm('yakin di hapus?')"
												href="<?= ('saran/hapus/'.$us['id_saran']) ?>"
												class="btn btn-danger btn-sm"><span
													class="mdi mdi-trash-can"></span></a>
										</td>


																					<!-- Modal -->
																					<div class="modal fade" id="exampleModal<?= $us['id_saran'] ?>" tabindex="-1" role="dialog"
												aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLabel">Isi Saran
															</h5>
															<button type="button" class="close" data-dismiss="modal"
																aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<form action="<?= base_url('admin/konten/update'); ?>"
																method="post" enctype="multipart/form-data">

																<div class="row mb-3 d-flex justify-content-center">
																	<label class="col-sm-3 col-form-label">Kritik&Saran</label>
																	<div class="col-sm-10">
																		<input style="color:black;" type="text" class="form-control"
																			name="judul_konten" disabled value="<?= $us['isi_saran'];?>">
																	</div>
																</div>


																<div class="modal-footer">
																	<button type="button" class="btn btn-secondary"
																		data-dismiss="modal">Close</button>
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>


									</tr>
									<?php }; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- main-panel ends -->
	</div>
	<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->
	<!-- plugins:js -->
	<?php require_once('template/js.php');?>
</body>

</html>
