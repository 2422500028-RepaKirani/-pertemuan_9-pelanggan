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
						<li class="breadcrumb-item"><a href="<?= base_url('admin/Kota2422500028') ?>">kota</a></li>
						<li class="breadcrumb-item active">Tambah kota</li>
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
							<h3 class="card-title font-weight-bold" style="font-size: 1.5rem;"><i class="fas fa-plus-circle mr-2 text-primary"></i>Tambah kota</h3>

							<p class="card-text">
								<form method="post">
									<div class="mb-3">
										<label for="nama_kota" class="form-label">Nama kota</label>
										<input type="text" class="form-control" name="nama_kota028" id="nama_kota028" aria-describedby="Nama kota">
									</div>
									<div class="mb-3">
										<label for="jenis_kota" class="form-label">Jenis kota</label>
										<input type="text" class="form-control" name="jenis_kota028" id="jenis_kota028" aria-describedby="Jenis kota">
									</div>
                  <div class="mb-3">
										<label for="provinsi" class="form-label">Provinsi</label>
										<input type="text" class="form-control" name="provinsi028" id="provinsi028" aria-describedby="Provinsi">
									</div>
                  <div class="mb-3">
										<label for="status" class="form-label">Status</label>
										<input type="text" class="form-control" name="status028" id="status028" aria-describedby="Status">
									</div>
									<button type="submit" class="btn btn-primary">Tambah</button>
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