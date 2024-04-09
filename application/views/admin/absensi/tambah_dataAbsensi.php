<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
  </div>

  <div class="card mb-3">
  <div class="card-header bg-primary text-white">
  Employee Attendance Input
  </div>
  <div class="card-body">
    <form class="form-inline">
	  <div class="form-group mb-2">
	    <label for="staticEmail2">Month</label>
	    <select class="form-control ml-3" name="bulan">
		    <option value=""> Select Year </option>
		    <option value="01">January</option>
		    <option value="02">February</option>
		    <option value="03">March</option>
		    <option value="04">April</option>
		    <option value="05">May</option>
		    <option value="06">Jun</option>
		    <option value="07">July</option>
		    <option value="08">August</option>
		    <option value="09">September</option>
		    <option value="10">October</option>
		    <option value="11">November</option>
		    <option value="12">December</option>
	    </select>
	  </div>
	  <div class="form-group mb-2 ml-5">
	    <label for="staticEmail2">Year</label>
	    <select class="form-control ml-3" name="tahun">
		    <option value=""> Select Year </option>
		    <?php $tahun = date('Y');
		    for($i=2020;$i<$tahun+5;$i++) { ?>
		    <option value="<?php echo $i ?>"><?php echo $i ?></option>
		<?php }?>
		</select>
	    </select>
	  </div>
	  
	  <button type="submit" class="btn btn-primary mb-2 ml-auto"><i class="fas fa-eye"></i> Generate Form</button>
	</form>
  </div>
</div>
	
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

	<div class="alert alert-info">
	Displaying Monthly Employee Attendance Data: <span class="font-weight-bold"><?php echo $bulan ?></span> Year: <span class="font-weight-bold"><?php echo $tahun ?></span>
	</div>
	<form method="POST">
	<button class="btn btn-success mb-3" type="submit" name="submit" value="submit">Save</button>
	<table class="table table-bordered table-striped">
		<tr>
			<td class="text-center">No</td>
			<td class="text-center">NIN</td>
			<td class="text-center">Employee Name</td>
			<td class="text-center">Gender</td>
			<td class="text-center">Position</td>
			<td class="text-center" width="8%">Present</td>
			<td class="text-center" width="8%">Sick</td>
			<td class="text-center" width="8%">Alpha</td>
		</tr>
		<?php $no=1; foreach($input_absensi as $a) :?>
			<tr>
				<input type="hidden" name="bulan[]" class="form-control" value="<?php echo $bulantahun?>">
				<input type="hidden" name="nik[]" class="form-control" value="<?php echo $a->nik?>">
				<input type="hidden" name="nama_pegawai[]" class="form-control" value="<?php echo $a->nama_pegawai?>">
				<input type="hidden" name="jenis_kelamin[]" class="form-control" value="<?php echo $a->jenis_kelamin?>">
				<input type="hidden" name="nama_jabatan[]" class="form-control" value="<?php echo $a->nama_jabatan?>">


				<td><?php echo $no++?></td>
				<td><?php echo $a->nik?></td>
				<td><?php echo $a->nama_pegawai?></td>
				<td><?php echo $a->jenis_kelamin?></td>
				<td><?php echo $a->nama_jabatan?></td>
				<td><input type="number" name="hadir[]" class="form-control" value="0"></td>
				<td><input type="number" name="sakit[]" class="form-control" value="0"></td>
				<td><input type="number" name="alpha[]" class="form-control" value="0"></td>
		<?php endforeach; ?>
	</table><br></br><br></br>
	</form>

</div>
<!-- /.container-fluid -->