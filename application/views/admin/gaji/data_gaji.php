<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
  </div>

  <div class="card mb-3">
  <div class="card-header bg-primary text-white">
  Employee Salary Data Filter
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

	  <button type="submit" class="btn btn-primary mb-2 ml-auto"><i class="fas fa-eye"></i> Show Data</button>

	  <?php if(count($gaji) > 0 ) { ?>
	  	<a href="<?php echo base_url('admin/data_penggajian/cetak_gaji?bulan='.$bulan),'&tahun='.$tahun?>" class="btn btn-success mb-2 ml-3"><i class="fas fa-print"></i> Cetak Daftar Gaji</a>
	  <?php }else{ ?>
	  	<button type="button" class="btn btn-success mb-2 ml-3" data-toggle="modal" data-target="#exampleModal">
	  	<i class="fas fa-print"></i> Print Payroll</button>
	<?php } ?>

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
	Displaying Monthly Employee Salary Data: <span class="font-weight-bold"><?php echo $bulan ?></span> Year: <span class="font-weight-bold"><?php echo $tahun ?></span>
	</div>

	<?php

	$jml_data = count($gaji);
	if($jml_data > 0 ) { ?>

		<div class="container-fluid">
		  <div class="card shadow mb-4">
		   <div class="card-body">
		     <div class="table-responsive">
		       <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		         <thead class="thead-dark">
		           <tr>
				        <th class="text-center">No</th>
						<th class="text-center">NIN</th>
						<th class="text-center">Employee Name</th>
						<th class="text-center">Gender</th>
						<th class="text-center">Posotion</th>
						<th class="text-center">Basic Salary</th>
						<th class="text-center">Transportation Allowance</th>
						<th class="text-center">Table Money</th>
						<th class="text-center">Pay Cut</th>
						<th class="text-center">Total Salary</th>
		           </tr>
		         </thead>
		         <tbody>
		           <?php foreach($potongan as $p) : {
						$alpha = $p->jml_potongan;
					} ?>
					<?php $no=1; foreach($gaji as $g) : ?>
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
		            </tr>
		         	<?php endforeach ;?>
					<?php endforeach ;?>
		         </tbody>
		       </table>
		     </div>
		   </div>
		  </div>
		</div>
		<?php }else { ?>
	<span class="badge badge-danger"><i class="fas fa-info-circle"></i> The attendance data is empty, please input the attendance data for the month and year you choose</span>
<?php } ?>
	</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  Salary data is still empty, please enter attendance first in the month and year you choose.</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>