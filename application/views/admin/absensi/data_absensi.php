<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
  </div>

  <div class="card mb-3">
  <div class="card-header bg-primary text-white">
  Employee Attendance Data Filter
  </div>
  <div class="card-body">
    <form class="form-inline">
	  <div class="form-group mb-2">
	    <label for="staticEmail2">Month</label>
	    <select class="form-control ml-3" name="bulan">
		    <option value=""> Select Month </option>
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
	  
	  <button type="submit" class="btn btn-primary mb-2 ml-auto"><i class="fas fa-eye"></i> Show Data</button>
	  <a href="<?php echo base_url('admin/data_absensi/input_absensi') ?>" class="btn btn-success mb-2 ml-3"><i class="fas fa-plus"></i> Input Presence</a>
	</form>
  </div>
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

	<?php

	$jml_data = count($absensi);
	if($jml_data > 0 ) { ?>

		<div class="container-fluid">
		  <div class="card shadow mb-4">
		   <div class="card-body">
		     <div class="table-responsive">
		       <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		         <thead class="thead-dark">
		           <tr>
		              	<td class="text-center">No</td>
						<td class="text-center">NIN</td>
						<td class="text-center">Employee Name</td>
						<td class="text-center">Gender</td>
						<td class="text-center">Position</td>
						<td class="text-center">Present</td>
						<td class="text-center">Sick</td>
						<td class="text-center">Alpha</td>
		           </tr>
		         </thead>
		         <tbody>
		           <?php $no=1; foreach($absensi as $a) :?>
					<tr>
						<td class="text-center"><?php echo $no++?></td>
						<td class="text-center"><?php echo $a->nik?></td>
						<td class="text-center"><?php echo $a->nama_pegawai?></td>
						<td class="text-center"><?php echo $a->jenis_kelamin?></td>
						<td class="text-center"><?php echo $a->nama_jabatan?></td>
						<td class="text-center"><?php echo $a->hadir?></td>
						<td class="text-center"><?php echo $a->sakit?></td>
						<td class="text-center"><?php echo $a->alpha?></td>
					</tr>
		            </tr>
		          <?php endforeach; ?>
		         </tbody>
		       </table>
		     </div>
		   </div>
		  </div>
		</div>

	<?php }else { ?>
		<span class="badge badge-danger"><i class="fas fa-info-circle"></i> Data is still empty, please enter attendance data for the month and year you choose</span>
	<?php } ?>
</div>