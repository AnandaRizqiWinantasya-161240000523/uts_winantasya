<!DOCTYPE html>
<html>
<head>
	<title>UTS</title>
</head>
<body>
	<center>
		<h3>
			<a href="<?php echo base_url('C_mahasiswa/tambahmhs');?>">Tambah </a>
		</h3>
	</center>
	<center>
		<table border="1">
			<thead>
				<tr>
					<th>No.</th>
					<th>NIM</th>
					<th>Nama Mhs</th>
					<th>Jenis Kelamin</th>
					<th>No. Hp</th>
					<th>Alamat</th>
					<th>Action</th>
				</tr>
				<?php $no = 1; foreach ($mahasiswa as $itemmhs) {?>
			</thead>
				<tr>
					<th><?php echo $no++; ?></th>
					<th><?php echo $itemmhs['nim']; ?></th>
					<th><?php echo $itemmhs['nama']; ?></th>
					<th><?php echo $itemmhs['jk']; ?></th>
					<th><?php echo $itemmhs['no_hp']; ?></th>
					<th><?php echo $itemmhs['alamat']; ?></th>
					<td align ="center">
						<a href="<?php echo base_url('C_mahasiswa/editmhs/').$itemmhs['id']; ?>">Edit</a>
						<a href="<?php echo base_url('Mahasiswa/hapusmhs/').$itemmhs['id']; ?>" onclick="return confirm('Apakah Anda Yakin, Mau Menghapus data?') ">Hapus</a>
					</td>
				</tr>
			<?php } ?>
		</table>
	</center>
</body>
</html>