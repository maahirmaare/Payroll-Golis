<!-- Begin Page Content -->
<div class="container-fluid">
	<div class="card mx-auto" style="width: 35%">
		<div class="card-header bg-primary text-white text-center">
		Employee Salary Report Filter</div>

		<form method="POST" action="<?php echo base_url('admin/laporan_gaji/cetak_laporan_gaji')?>">
		<div class="card-body">
			<div class="form-group row">
				<label for="inputPassword" class="col-sm-3 col-form-label">Month</label>
				<div class="col-sm-9">
					<select class="form-control" name="bulan">
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
			</div>

			<div class="form-group row">
				<label for="inputPassword" class="col-sm-3 col-form-label">Year</label>
				<div class="col-sm-9">
					<select class="form-control" name="tahun">
					    <option value=""> Select Year </option>
					    <?php $tahun = date('Y');
					    for($i=2020;$i<$tahun+5;$i++) { ?>
					    <option value="<?php echo $i ?>"><?php echo $i ?></option>
					<?php }?>
					</select>
				</div>
			</div>
			<button style="width: 100%" type="submit" class="btn btn-primary"><i class="fas fa-print"></i>Print Salary Report</button>
	</div>
	</form>
</div>
<!-- /.container-fluid -->