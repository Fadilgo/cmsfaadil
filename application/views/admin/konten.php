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
						<!-- Button trigger modal -->
						<button type="button" class="btn btn-danger mb-3" data-toggle="modal"
							data-target="#exampleModal">
							Tambah Konten
						</button>

						<!-- Modal -->
						<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
							aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Insert Konten</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<form action="<?= base_url('admin/konten/simpan'); ?>" method="post"
											enctype="multipart/form-data" >

											<div class="row mb-3 d-flex justify-content-center">
												<label class="col-sm-3 col-form-label">Judul</label>
												<div class="col-sm-10">
													<input type="text" class="form-control"  name="judul_konten">
												</div>
											</div>

											<div class="row mb-3 d-flex justify-content-center">
												<label class="col-sm-3 col-form-label">Kategori</label>
												<div class="col-sm-10">
													<select name="id_kategori" id="" class="form-control">
														<?php foreach ($kategori as $us){?>
														<option class="form-control" value="<?= $us['id_kategori'] ?>">
															<?= $us['nama_kategori'] ?>
														</option>
														<?php } ?>
													</select>

												</div>
											</div>

											<div class="row mb-3 d-flex justify-content-center">
												<label class="col-sm-3 col-form-label">ISI Konten</label>
												<div class="col-sm-10">
													<textarea  type="text" class="form-control"
														name="isi_konten"></textarea>
												</div>
											</div>

											<div class="row mb-3 d-flex justify-content-center">
												<label class="col-sm-3 col-form-label">Foto</label>
												<div class="col-sm-10">
													<input  type="file" accept="image/png, image/jpg, image/jpeg"
														name="foto">
												</div>
											</div>


											<div class="modal-footer">
												<button type="button" class="btn btn-secondary"
													data-dismiss="modal">Close</button>
												<button type="submit" class="btn btn-danger">ADD</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<p class="card-description"> Konten <code>Website</code>
						</p>
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr>
										<th> No. </th>
										<th>Judul</th>
										<th>kategori Konten</th>
										<th>Tanggal</th>
										<th>Kreator</th>
										<th>Foto</th>
										<th> Action </th>
									</tr>
								</thead>
								<?php $no=1;?>
								<tbody>
									<?php foreach ($konten as $us){?>
									<tr>
										<td class="py-1">
											<?= $no++ ;?>
										</td>
										<td><?= $us['judul_konten']; ?></td>
										<td><?= $us['nama_kategori']; ?></td>
										<td><?= $us['tanggal']; ?></td>
										<td><?= $us['username']; ?></td>
										<td>
											<a href="<?= base_url('template/upload/konten/'.$us['foto']) ?>"
												target="_blank">
												<span class="mdi mdi-image-search">Lihat Foto</span>
											</a>
										</td>
										<td> <a onClick="return confirm('yakin di hapus?')"
												href="<?= ('konten/hapus/'.$us['foto']) ?>"
												class="btn btn-danger btn-sm"><span
													class="mdi mdi-trash-can"></span></a>

											<button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
												data-target="#exampleModal<?= $no ?>">
												<span class="mdi mdi-square-edit-outline"></span>
											</button>

											<!-- Modal -->
											<div class="modal fade" id="exampleModal<?= $no ?>" tabindex="-1" role="dialog"
												aria-labelledby="exampleModalLabel" aria-hidden="true">
												<div class="modal-dialog" role="document">
													<div class="modal-content">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLabel">Update Data
															</h5>
															<button type="button" class="close" data-dismiss="modal"
																aria-label="Close">
																<span aria-hidden="true">&times;</span>
															</button>
														</div>
														<div class="modal-body">
															<form action="<?= base_url('admin/konten/update'); ?>"
																method="post" enctype="multipart/form-data">

																<input type="hidden" name="fotoo" class="form-control" value="<?= $us['foto'] ?>">
																<div class="row mb-3 d-flex justify-content-center">
																	<label class="col-sm-3 col-form-label">Judul</label>
																	<div class="col-sm-10">
																		<input type="text" class="form-control"
																			name="judul_konten" value="<?= $us['judul_konten'];?>">
																	</div>
																</div>

																<div class="row mb-3 d-flex justify-content-center">
																	<label
																		class="col-sm-3 col-form-label">Kategori</label>
																	<div class="col-sm-10">
																		<select name="id_kategori" id="id_kategori"
																			class="form-control">
																			<?php foreach ($kategori as $uu){?>
																			<option class="form-control"
																			<?php if($us['id_kategori']==$uu['id_kategori']){echo "selected";}?>
																				value="<?= $uu['id_kategori'] ?>">
																				<?= $uu['nama_kategori'] ?>
																			</option>
																			<?php } ?>
																		</select>

																	</div>
																</div>

																<div class="row mb-3 d-flex justify-content-center">
																	<label class="col-sm-3 col-form-label">ISI
																		Konten</label>
																	<div class="col-sm-10">
																		<textarea type="text" class="form-control"
																			name="isi_konten"><?= $us['isi_konten'];?></textarea>
																	</div>
																</div>

																<div class="row mb-3 d-flex justify-content-center">
																	<label class="col-sm-3 col-form-label">Foto</label>
																	<div class="col-sm-10">
																		<input type="file"
																			accept="image/png, image/jpg, image/jpeg"
																			name="foto">
																	</div>
																</div>


																<div class="modal-footer">
																	<button type="button" class="btn btn-secondary"
																		data-dismiss="modal">Close</button>
																	<button type="submit"
																		class="btn btn-danger">ADD</button>
																</div>
															</form>
														</div>
													</div>
												</div>
											</div>

										</td>
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
