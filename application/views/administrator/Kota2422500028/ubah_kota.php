<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
	    <div class="container-fluid">
	        <div class="row mb-2 align-items-center">
	            <div class="col-sm-6">
	                <h1 class="m-0 text-dark font-weight-bold">
	                    <i class="fas fa-tags mr-2 text-primary"></i> Kota
	                </h1>
	            </div><!-- /.col -->
	            <div class="col-sm-6">
	                <ol class="breadcrumb float-sm-right bg-transparent p-0 m-0">
	                    <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
						<li class="breadcrumb-item"><a href="<?= base_url('admin/Kota2422500028') ?>">Kota</a></li>
						<li class="breadcrumb-item active">Ubah Kota</li>
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
							<h3 class="card-title font-weight-bold" style="font-size: 1.5rem;"><i class="fas fa-edit mr-2 text-primary"></i>Ubah kota</h3>

							<p class="card-text">
								<form method="post">
									<div class="mb-3">
										<label for="nama_kota028" class="form-label">Nama kota</label>
										<input type="text" class="form-control" name="nama_kota028" id="nama_kota028" value="<?= $kota['nama_kota028'] ?>" aria-describedby="Nama kota">
									</div>
									<div class="mb-3">
										<label for="jenis_kota028" class="form-label">Jenis Kota</label>
										<input type="text" class="form-control" name="jenis_kota028" id="jenis_kota028" value="<?= $kota['jenis_kota028'] ?>" aria-describedby="Jenis kota">
									</div>
                  <div class="mb-3">
										<label for="provinsi0288" class="form-label">Provinsi</label>
										<input type="text" class="form-control" name="provinsi0288" id="provinsi0288" value="<?= $kota['provinsi028'] ?>" aria-describedby="Provinsi">
									</div>
                  <div class="mb-3">
										<label for="status0288" class="form-label">Status</label>
										<input type="text" class="form-control" name="status0288" id="status0288" value="<?= $kota['status028'] ?>" aria-describedby="Status">
									</div>
									<button type="submit" class="btn btn-primary">Ubah</button>
									<a href="<?= base_url('admin/Kota2422500028') ?>" class="btn btn-danger">Kembali</a>
								</form>
							</p>
						</div>
					</div>

				</div>
				<!-- /.col-md-6 -->

			</div>
			<!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->