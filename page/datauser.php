<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Data User</h1>
			</div><!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active">Data User</li>
				</ol>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.container-fluid -->
</div>
<!-- card -->
<!-- content -->
<div class="card">
	<div class="card-header">
		<h3 class="card-title">Data Dibawah ini adalah semua data user yang ada di aplikasi portofolio</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body table-responsive">		
		<button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModal" data-backdrop="static">
			<i class="fas fa-plus"></i>
			Tambah User
		</button>

		<table id="example1" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>Aksi</th>
					<th>ID</th>
					<th>Name</th>
					<th>Username</th>
					<th>Password</th>
					<th>Tipe</th>
					<th>Foto</th>
				</tr>
			</thead>
			<tbody>
				<!-- panggil isi tabel user di sini -->
				<?php
				include_once('../kelas/koneksi.php');
				$ssql = "Select * From tbankr Where deleted_at is null";
				$query = mysqli_query($conn, $ssql);

				while ($row = mysqli_fetch_assoc($query)) {
				?>
				<tr>
					<td style="width:17%; text-align:center;">
						<button 
						type="button" 
						class="btn btn-sm btn-success" 
						data-toggle="modal" 
						data-target="#exampleModal<?php echo $row['Id']; ?>" 
						data-backdrop="static"
						>
							<i class="fas fa-edit"></i>
						</button>
					
						<a title="Delete" class="btn btn-sm btn-danger" href="">
						<i class="fas fa-trash-alt"></i>
						</a>
					</td>
					<td>
						<?php echo $row['Id'] ?>
					</td>
					<td>
						<?php echo $row['name'] ?>
					</td>
					<td>
						<?php echo $row['username'] ?>
					</td>
					<td>
						<?php echo $row['password'] ?>
					</td>
					<td>
						<?php echo $row['tipeuser'] ?>
					</td>
					<td>
						<img src="../img/user/<?php echo $row['fotouser'] ?>" 
						alt="user" style="width:60px; height:60px;">
					</td>
				</tr>

					<!-- Modal Edit USER-->
					<div class="modal fade" id="exampleModal<?php echo $row['Id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel<?php echo $row['Id'] ?>">
								Edit User
								</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form action="../kelas/cruduser.php" 
								method="POST"
								class="needs-validation" novalidate 
								enctype="multipart/form-data">
									<div class="form-group row">
										<label for="name" class="col-sm-3 col-form-label">Id</label>
										<div class="col-sm-9">
											<input 
											type="text" 
											class="form-control" 
											name="Id" 
											value="<?php echo $row['Id'] ?>"
											readonly>
										</div>
									</div>
									<div class="form-group row">
										<label for="name" class="col-sm-3 col-form-label">Name</label>
										<div class="col-sm-9">
											<input 
											type="text" 
											class="form-control" 
											name="name" 
											value="<?php echo $row['name'] ?>" 
											placeholder="Ketikkan Nama Lengkap Anda" 
											required>
											<div class="invalid-feedback">
												Name wajib diisi!
											</div>
										</div>
									</div>
									<div class="form-group row">
										<label for="username" class="col-sm-3 col-form-label">Username</label>
										<div class="col-sm-9">
											<input 
											type="email" 
											class="form-control" 
											name="username" 
											value="<?php echo $row['username'] ?>"  
											placeholder="Ketikkan Email Anda" 
											required>
											<div class="invalid-feedback">
												Username wajib diisi!
											</div>
										</div>
									</div>									
									<fieldset class="form-group row">
										<legend class="col-form-label col-sm-3 float-sm-left pt-0" style="font-weight: bold;">
											Tipe
										</legend>
										<div class="col-sm-9">
										<div class="form-check">
											<input 
											class="form-check-input" 
											type="radio" 
											name="tipeuser" 
											value="Admin"
											<?php 
											if($row['tipeuser']=='admin') { 
											?>
												checked
											<?php }?>
											>
											<label class="form-check-label" for="tipeuser">
											Admin
											</label>
										</div>
										<div class="form-check">
											<input 
											class="form-check-input" 
											type="radio" 
											name="tipeuser" 
											value="User" 
											<?php 
											if($row['tipeuser']=='user') { 
											?>
												checked
											<?php }?>
											>
											<label class="form-check-label" for="tipeuser">
											User
											</label>
										</div>				
										</div>
									</fieldset>
									<div class="form-group row">
										<label for="fotouser" class="col-sm-3 col-form-label">Foto</label>
										<div class="col-sm-9">
											<img 
											style="width: 100px; height:100px; margin-bottom: 5px; border: solid thin black;"
											src="../img/user/<?php echo $row['fotouser'] ?>" 
											alt=""
											>
											<div class="custom-file">
												<input type="file" class="custom-file-input" 
												name="fotouser" accept="image/jpeg, image/jpg, image/png">
												<label class="custom-file-label" for="fotouser">Pilih Foto Profil User</label>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-sm-12 text-center">
										<button type="submit" class="btn btn-primary" 
										name="aksi" value="edit">
											Simpan
										</button>
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										</div>
									</div>
								</form>
							</div>
							
							</div>
						</div>
					</div>
					<!-- Modal End Edit User -->

				<?php
				}
				?>
			</tbody>
			<tfoot>
				<tr>
					<th>Aksi</th>
					<th>ID</th>
					<th>Name</th>
					<th>Username</th>
					<th>Password</th>
					<th>Tipe</th>
					<th>Foto</th>
				</tr>
			</tfoot>
		</table>
	</div>
	<!-- /.card-body -->
</div>
<!-- /.card -->
<!-- start ADD USER-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  	<form action="../kelas/cruduser.php" 
		method="POST"
		class="needs-validation" novalidate 
		enctype="multipart/form-data">

			<div class="form-group row">
				<label for="name" class="col-sm-2 col-form-label">Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="name" value="" 
					placeholder="Ketikkan Nama Lengkap Anda" required>
					<div class="invalid-feedback">
						Name wajib diisi!
					</div>
				</div>
			</div>
			<div class="form-group row">
				<label for="username" class="col-sm-2 col-form-label">Username</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" name="username" value=""  
					placeholder="Ketikkan Email Anda" required>
					<div class="invalid-feedback">
						Username wajib diisi!
					</div>
				</div>
			</div>
			<div class="form-group row">
				<label for="password" class="col-sm-2 col-form-label">Password</label>
				<div class="col-sm-10">
				<input type="password" class="form-control" name="password" value=""  
				placeholder="Ketikkan Password Anda" required>
				<div class="invalid-feedback">
					Password wajib diisi!
				</div>
				</div>
			</div>
			<fieldset class="form-group row">
				<legend class="col-form-label col-sm-2 float-sm-left pt-0" style="font-weight: bold;">
					Tipe
				</legend>
				<div class="col-sm-10">
				<div class="form-check">
					<input class="form-check-input" type="radio" name="tipeuser" value="Admin">
					<label class="form-check-label" for="tipeuser">
					Admin
					</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="tipeuser" value="User" checked>
					<label class="form-check-label" for="tipeuser">
					User
					</label>
				</div>				
				</div>
			</fieldset>
			<div class="form-group row">
				<label for="fotouser" class="col-sm-2 col-form-label">Foto</label>
				<div class="col-sm-10">
				<div class="custom-file">
					<input type="file" class="custom-file-input" 
					name="fotouser" accept="image/jpeg, image/jpg, image/png">
					<label class="custom-file-label" for="fotouser">Pilih Foto Profil User</label>
				</div>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-12 text-center">
				<button type="submit" class="btn btn-primary" 
				name="aksi" value="add">
					Simpan
				</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</form>
      </div>
      
    </div>
  </div>
</div>
<!-- End Tambah User -->

<script>
	// Example starter JavaScript for disabling form submissions if there are invalid fields
	(function() {
	'use strict';
	window.addEventListener('load', function() {
		// Fetch all the forms we want to apply custom Bootstrap validation styles to
		var forms = document.getElementsByClassName('needs-validation');
		// Loop over them and prevent submission
		var validation = Array.prototype.filter.call(forms, function(form) {
		form.addEventListener('submit', function(event) {
			if (form.checkValidity() === false) {
			event.preventDefault();
			event.stopPropagation();
			}
			form.classList.add('was-validated');
		}, false);
		});
	}, false);
	})();

	
</script>