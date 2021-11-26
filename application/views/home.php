<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Home</title>
	<link rel="stylesheet" href="">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="card" style="margin-top:30px"> 
		<div class="col-md-12 offset-md-0">
			<div class="card-header bg-primary">
				<h1>DATA MAHASISWA TEKNIK</h1>
			</div>
			<div class="card-body">
			<table class="table">
				<thead>
					<tr>
					<th scope="col">No</th>
					<th scope="col">Id</th>
					<th scope="col">NIM</th>
					<th scope="col">Nama</th>
					<th scope="col">Jenis Kelamin</th>
					<th scope="col">Jurusan</th>
					<th scope="col">Angkatan</th>
					<th scope="col">Tanggal Upload</th>
					<th scope="col">Foto</th>
					<th scope="col">Aksi</th>
					</tr>
				</thead>
				<tbody>
				<?php
				$count = 0;
				foreach ($queryAllMhs as $row) {
					$count = $count + 1;
				?>
				<tr>
					<td><?php echo $count ?></td>
					<td><?php echo $row->id ?></td>
					<td><?php echo $row->nim ?></td>
					<td><?php echo $row->nama ?></td>
					<td><?php echo $row->jenis_kelamin ?></td>
					<td><?php echo $row->jurusan ?></td>
					<td><?php echo $row->angkatan ?></td>
					<td><?php echo $row->tanggal ?></td>
					<td><img src="<?=base_url('')?>assets/images/<?=$row->foto?>" width="110px" height="100px" alt="foto" ></td>
					<td><a href="<?php echo base_url('/home/halaman_edit') ?>/<?php echo $row->id ?>" class="btn btn-outline-warning">Edit</a> | <a href="<?php echo base_url('/home/fungsiDelete') ?>/<?php echo $row->id ?>" class="btn btn-outline-danger">Delete</a></td>
				</tr>
				<?php } ?>
				</tbody>
				</table>
			</div>
			<a href="<?php echo base_url('/home/halaman_tambah') ?>" class="btn btn-outline-success">Tambah Data</a>
			<a>|</a>
			<a href="<?php echo base_url('/Post') ?>" class="btn btn-outline-info">Upload Tugas</a>
		</div>
	</div>
</body>
</html>