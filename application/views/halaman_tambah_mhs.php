<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="card" style="margin-top:30px"> 
	<div class="col-md-6 offset-md-3">
        <div class="card-header">
           <h3>TAMBAH DATA MAHASISWA TEKNIK</h3>
        </div>
        <div class="card-body">
        <table class="table">
		<?php echo form_open_multipart('home/fungsiTambah'); ?>
		<tr>
			<td>ID</td>
			<td>:</td>
			<td><input type="text" name="id"></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki<br>
    			<input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td>:</td>
			<td><select type="text" name="jurusan">
				<option value="Teknik Informatika">Teknik Informatika</option>
				<option value="Teknik Elektro">Teknik Elektro</option>
				<option value="Teknik Mesin">Teknik Mesin</option>
				<option value="Akutansi">Akutansi</option>
				<option value="THP">THP</option>
			</select>
		</tr>
		<tr>
			<td>Angkatan</td>
			<td>:</td>
			<td><input type="checkbox" name="angkatan" value="2019"> 2019<br>
    			<input type="checkbox" name="angkatan" value="2020"> 2020<br>
    			<input type="checkbox" name="angkatan" value="2021"> 2021<br>
		</tr>
		<tr>
			<td>Tanggal</td>
			<td>:</td>
			<td><input type="date" name="tanggal"></td>
		</tr>
		<tr>
			<td>Foto</td>
			<td>:</td>
			<td><input type="file" name="foto"></td>
		</tr>
		<tr>
			<td colspan="2"><button type="submit" class="btn btn-success">Tambah Data</button> |
			<a href="<?php echo base_url('/home') ?>" class="btn btn-danger">Batal</a></td>
		</tr>
		</table>
	<?php echo form_close(); ?>
		</div>
	</div>
</div>
</body>
</html>