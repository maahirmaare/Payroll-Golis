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
		<hr style="width: 50%; border-width: 5px; color: black">
	</center>
	

	<?php foreach($potongan as $p) {
	$potongan=$p->jml_potongan;
	} ?>
		

	<?php foreach($print_slip as $ps) : ?>

	<?php $potongan_gaji=$ps->alpha * $potongan; ?>

	<table style="width: 100%">
		<tr>
			<td width="20%">Employee Name</td>
			<td width="2%">:</td>
			<td><?php echo $ps->nama_pegawai?></td>
		</tr>
		<tr>
			<td>NIN</td>
			<td>:</td>
			<td><?php echo $ps->nik?></td>
		</tr>
		<tr>
			<td>Position</td>
			<td>:</td>
			<td><?php echo $ps->nama_jabatan?></td>
		</tr>
		<tr>
			<td>Month</td>
			<td>:</td>
			<td><?php echo substr($ps->bulan, 0,2) ?></td>
		</tr>
		<tr>
			<td>Year</td>
			<td>:</td>
			<td><?php echo substr($ps->bulan, 2,4) ?></td>
		</tr>
	</table>

	<table class="table table-striped table-bordered mt-3">
		<tr>
			<th class="text-center" width="5%">No</th>
			<th class="text-center" >Information</th>
			<th class="text-center" >Amount</th>
		</tr>
		<tr>
			<td>1</td>
			<td>Basic salary</td>
			<td>Sh.so. <?php echo number_format($ps->gaji_pokok,0,',','.') ?></td>
		</tr>

		<tr>
			<td>2</td>
			<td>Transportation Allowance</td>
			<td>Sh.so. <?php echo number_format($ps->tj_transport,0,',','.') ?></td>
		</tr>

		<tr>
			<td>3</td>
			<td>Table Money</td>
			<td>Sh.so. <?php echo number_format($ps->uang_makan,0,',','.') ?></td>
		</tr>

		<tr>
			<td>4</td>
			<td>Pay Cut</td>
			<td>Sh.so. <?php echo number_format($potongan_gaji,0,',','.') ?></td>
		</tr>

		<tr>
			<th colspan="2" style="text-align: right;">Total Salary : </th>
			<th>Sh.so. <?php echo number_format($ps->gaji_pokok+$ps->tj_transport+$ps->uang_makan-$potongan_gaji,0,',','.') ?></th>
		</tr>
	</table>

	<table width="100%">
		<tr>
			<td></td>
			<td>
				<p>Employee</p>
				<br>
				<br>
				<p class="font-weight-bold"><?php echo $ps->nama_pegawai?></p>
			</td>

			<td width="200px">
				<p>Golis, <?php echo date("d M Y")?> <br> Finance,</p>
				<br>
				<br>
				<p>___________________</p>
			</td>
		</tr>
	</table>

	<?php endforeach ;?>

</body>
</html>

<script type="text/javascript">
	window.print();
</script>