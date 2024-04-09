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
		<h2>Employee Payroll</h2>
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
				<th class="text-center">Gender</th>
				<th class="text-center">Position</th>
				<th class="text-center">Basic salary</th>
				<th class="text-center">Transportation</th>
				<th class="text-center">Meal Allowance</th>
				<th class="text-center">Pay Cut</th>
				<th class="text-center">Total Salary</th>
			</tr>
			<?php foreach($potongan as $p) : {
				$alpha = $p->jml_potongan;
			} ?>
			<?php $no=1; foreach($cetak_gaji as $g) : ?>
			<?php $potongan = $g->alpha * $alpha ?>
			<tr>
				<td class="text-center"><?php echo $no++ ?></td>
				<td class="text-center"><?php echo $g->nik ?></td>
				<td class="text-center"><?php echo $g->nama_pegawai ?></td>
				<td class="text-center"><?php echo $g->jenis_kelamin ?></td>
				<td class="text-center"><?php echo $g->nama_jabatan ?></td>
				<td class="text-center">Sh.so. <?php echo number_format($g->gaji_pokok,0,',','.') ?></td>
				<td class="text-center">Sh.so. <?php echo number_format($g->tj_transport,0,',','.') ?></td>
				<td class="text-center">Sh.so. <?php echo number_format($g->uang_makan,0,',','.') ?></td>
				<td class="text-center">Sh.so. <?php echo number_format($potongan,0, ',','.') ?></td>
				<td class="text-center">Sh.so. <?php echo number_format($g->gaji_pokok + $g->tj_transport + $g->uang_makan - $potongan,0,',','.') ?></td>
			</tr>
			<?php endforeach ;?>
			<?php endforeach ;?>
		</table>

		<table width="100%">
			<tr>
				<td></td>
				<td width="200px">
					<p>Golis, <?php echo date("d M Y") ?> <br> Finance</p>
					<br>
					<br>
					<p>_____________________</p>
				</td>
			</tr>
		</table>
</body>
</html>

<script type="text/javascript">
	window.print();
</script>