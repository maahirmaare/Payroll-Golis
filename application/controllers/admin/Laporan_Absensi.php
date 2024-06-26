<?php

class Laporan_Absensi extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('hak_akses') != '1'){
			$this->session->set_flashdata('message','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>You are not logged in yet!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
				redirect('login');
		}
	}

	public function index() {	
		$data['title'] = "Employee Attendance Report";

		$this->load->view('template_admin/header',$data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/absensi/laporan_absensi');
		$this->load->view('template_admin/footer');
	}

	public function cetak_laporan_absensi(){

	$data['title'] = "Print Employee Attendance Report";
	if((isset($_GET['bulan']) && $_GET['bulan']!='') && (isset($_GET['tahun']) && $_GET['tahun']!='')){
			$bulan = $_GET['bulan'];
			$tahun = $_GET['tahun'];
			$bulantahun = $bulan.$tahun;
		}else{
			$bulan = date('m');
			$tahun = date('Y');
			$bulantahun = $bulan.$tahun;
		}
	$data['lap_kehadiran'] = $this->db->query("SELECT * FROM data_kehadiran WHERE bulan='$bulantahun' ORDER BY nama_pegawai ASC")->result();
	$this->load->view('template_admin/header',$data);
	$this->load->view('admin/absensi/cetak_absensi', $data);
	}
}

?>