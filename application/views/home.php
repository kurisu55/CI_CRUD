<?php 
/**
	*@author Kristovel Adi Sucipto
	*@date 25/02/2021
	*@time 7.30 PM
	*/
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Data Mahasiswa</title>
	<style>
		table, th, td {
			border: 1px solid black;
  			border-collapse: collapse;
			padding: 8px 20px;
			text-align: center;
		}
		table {
			font-family: sans-serif;
			color: #232323;
			border-collapse:collapse;
		}
	</style>
	</head>
	
	<body>
		<h1>DATA MAHASISWA</h1>
		&nbsp
		<table>
			<tr>
				<td>No</td>
				<td>NPM</td>
				<td>Nama Mahasiswa</td>
				<td>Kelas</td>
				<td>Jurusan</td>
				<td>Asal Kota</td>
				<td>Action</td>
			</tr>
			<?php 
				$count =0;
				foreach ($data_mhs as $row){
					$count = $count + 1;
			?>
			<tr>
				<td><?php echo $count ?></td>
				<td><?php echo $row->npm ?></td>
				<td><?php echo $row->nama ?></td>
				<td><?php echo $row->kelas ?></td>
				<td><?php echo $row->jurusan ?></td>
				<td><?php echo $row->kota ?></td>
				<td><a href="<?php echo base_url('Welcome/formEdit/'). $row->npm?>">Edit</a> <a href="<?php echo base_url('Welcome/Action_Delete/'). $row->npm?>">
				Delete</a></td>
			</tr>
			<tr>
				
			</tr>
			<?php }?>
		</table>
		<br><br>
		<button onclick="document.location.href='<?php echo base_url('Welcome/formInput')?>' ">Tambah Data</button>
	</body>
</html>