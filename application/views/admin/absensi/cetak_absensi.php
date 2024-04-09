<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title?></title>
	<style type="text/css">
		body{
			font-family: Arial;
			color: black;
		}
	</style>
</head>
<body>
	<center>
		<h1>Golis Telecom Company</h1>
		<h2></h2>
	</center>

	<?php
	if((isset($_GET['bulan']) && $_GET['bulan']!='') && (isset($_GET['tahun']) && $_GET['tahun']!='')){
			$bulan = $_GET['bulan'];
			$tahun = $_GET['tahun'];
			$bulantahun = $bulan.$tahun;
		}else{
			$bulan = date('m');
			$tahun = date('Y');
			$bulantahun = $bulan.$tahun;
		}
	?>
	<table>
		<tr>
			<td>Month</td>
			<td>:</td>
			<td><?php echo $bulan?></td>
		</tr>
		<tr>
			<td>Year</td>
			<td>:</td>
			<td><?php echo $tahun?></td>
		</tr>
	</table>

	<table class="table table-bordered table-triped">
			<tr>
				<th class="text-center">No</th>
				<th class="text-center">NIN</th>
				<th class="text-center">Employee Name</th>
				<th class="text-center">Position</th>
				<th class="text-center">Present</th>
				<th class="text-center">Sick</th>
				<th class="text-center">Alpha</th>
			</tr>
			<?php $no=1; foreach($lap_kehadiran as $l) : ?>
			<tr>
				<td class="text-center"><?php echo $no++ ?></td>
				<td class="text-center"><?php echo $l->nik ?></td>
				<td class="text-center"><?php echo $l->nama_pegawai ?></td>
				<td class="text-center"><?php echo $l->nama_jabatan ?></td>
				<td class="text-center"><?php echo $l->hadir ?></td>
				<td class="text-center"><?php echo $l->sakit ?></td>
				<td class="text-center"><?php echo $l->alpha ?></td>
			</tr>
			<?php endforeach ;?>
		</table>

</body>
</html>

<script type="text/javascript">
	window.print();
</script>