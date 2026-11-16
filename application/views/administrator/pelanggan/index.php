<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
	    <div class="container-fluid">
	        <div class="row mb-2 align-items-center">
	            <div class="col-sm-6">
	                <h1 class="m-0 text-dark font-weight-bold">
	                    <i class="fas fa-tags mr-2 text-primary"></i> pelanggan
	                </h1>
	            </div><!-- /.col -->
	            <div class="col-sm-6">
	                <ol class="breadcrumb float-sm-right bg-transparent p-0 m-0">
	                    <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>"> Home</a></li>
	                    <li class="breadcrumb-item active">pelanggan</li>
	                </ol>
	            </div><!-- /.col -->
	        </div><!-- /.row -->
	    </div><!-- /.container-fluid -->
	</div><!-- /.content-header -->

	<!-- Main content -->
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title" style="font-size: 1.5rem;"><b>Data pelanggan</b></h5>
							<div class="clearfix"></div>
							<br>
							
							<!-- Tombol Tambah -->
							<a href="<?= base_url('admin/pelanggan/tambah') ?>" class="btn btn-labeled btn-primary mb-3">
								<span class="btn-label"><i class="fas fa-plus-circle"></i></span> Tambah pelanggan
							</a>

							<!-- Flashdata Message -->
							<?php if ($this->session->flashdata('message')) : ?>
								<?= $this->session->flashdata('message') ?>
							<?php endif ?>

							<!-- Tabel Data -->
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th style="width: 45px;" class="text-center">No.</th>
										<th>Nama</th>
										<th>Email</th>
										<th>Telepon</th>
										<th>Alamat</th>
										<th>Tanggal Daftar</th>
										<th class="text-center">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									$no = 1;
									foreach ($list_pelanggan as $pelanggan) : 
									?>
										<tr data-widget="expandable-table" aria-expanded="false">
											<td class="text-center"><?= $no ?></td>
											<td><?= $pelanggan['nama'] ?></td>
											<td><?= $pelanggan['email'] ?></td>
                      <td><?= $pelanggan['telepon'] ?></td>
                      <td><?= $pelanggan['alamat'] ?></td>
                      <td><?= $pelanggan['tanggal_daftar'] ?></td>
											<td class="text-center">
                          <a href="<?= base_url('admin/pelanggan/ubah/') ?><?= $pelanggan['id_pelanggan'] ?>">
                                <span class="badge bg-success"><i class="fas fa-edit"></i> Ubah</span>
                          </a>
                          &nbsp;&nbsp;
                          <a href="<?= base_url('admin/pelanggan/hapus/') ?><?= $pelanggan['id_pelanggan'] ?>" onclick="return confirm('Yakin ingin menghapus data ini?')">
                                <span class="badge bg-danger"><i class="fas fa-trash"></i> Hapus</span>
                          </a>
											</td>
										</tr>
									<?php 
										$no++; 
									endforeach 
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div><!-- /.col-md-6 -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
</div>