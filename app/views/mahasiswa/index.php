<div class="container mt-3">

	<div class="row">
		<div class="col-lg-6">
			<?php Flasher::flash();  ?>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6">

			<button type="button" class="btn btn-primary tombolTambahData" data-toggle="modal" data-target="#formModal">
				Tambah data mahasiswa
			</button>
			<br><br>

			<h3>Daftar Mahasiswa</h3>


			<table class="table table-borderless">
				<thead class="thead-danger">
					<tr>
						<th scope="col">No</th>
						<th scope="col">Nama</th>
						<th scope="col">NRP</th>
						<th scope="col">Email</th>
						<th scope="col">Jurusan</th>
						<th scope="col">Edit</th>
						<th scope="col">Hapus</th>

					</tr>
				</thead>
				<tbody>
					<?php $count = 1; ?>
					<?php foreach ($data['mhs'] as $mhs ) : ?>
						<tr>
							<td><?= $count; $count++; ?></td>
							<td><?= $mhs['nama']; ?></td>
							<td><?= $mhs['nrp']; ?></td>
							<td><?= $mhs['email']; ?></td>
							<td><?= $mhs['jurusan']; ?></td>
							<td>
								<a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>"" class="btn btn-success tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">ubah</a>
							</td>
							<td>
								<a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="btn btn-danger" onclick="return confirm('Data yang telah dihapus tidak bisa dikembalikan lagi !!                          Apakah anda yakin ingin menghapus data ini???');">hapus</a>
							</td>
						</tr>
					<?php endforeach; ?> 
				</tbody>
			</table>
		</div>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
					<input type="hidden" name="id" id="id">
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" id="nama" name="nama">
					</div>
					<div class="form-group">
						<label for="nrp">NRP</label>
						<input type="number" class="form-control" id="nrp" name="nrp">
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email">
					</div>
					<div class="form-group">
						<label for="jurusan">Jurusan</label>
						<select class="form-control" id="jurusan" name="jurusan">
							<option value="Teknik Informatika">Teknik informatika</option>
							<option value="Teknik Mesin">Teknik Mesin</option>
							<option value="Teknik Industri">Teknik Industri</option>
							<option value="Teknik Pangan">Teknik Pangan</option>
							<option value="Teknik Planologi">Teknik Planologi</option>
							<option value="Teknik Lingkungan">Teknik Lingkungan</option>
						</select>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Tambah Data</button>
				</form>
			</div>
		</div>
	</div>
</div>