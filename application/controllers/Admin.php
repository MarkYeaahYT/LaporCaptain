<?php
class Admin extends CI_Controller{

	public function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model("admin_m");
	}

	public function index()
	{
		if(isset($_SESSION["role"])){
			if($_SESSION["role"] == "admin"){
				$this->load->view("admin/dashboard");
			}else{
				echo "admin Nope";

			}
		}else{
			echo "admin Nope";
		}
	}

	public function dataproses()
	{
		if(isset($_SESSION["role"])){
			if($_SESSION["role"] == "admin"){
				$this->load->view("admin/dataproses");
			}else{
				echo "admin Nope";

			}
		}else{
			echo "admin Nope";
		}
	}

	public function dataselesai()
	{
		if(isset($_SESSION["role"])){
			if($_SESSION["role"] == "admin"){
				$this->load->view("admin/dataselesai");
			}else{
				echo "admin Nope";

			}
		}else{
			echo "admin Nope";
		}
	}

	public function logout()
	{
		# code...
		unset($_SESSION["role"]);
		unset($_SESSION["nama_petugas"]);
		unset($_SESSION["id_petugas"]);

		redirect("/app/loginsecret");
	}

	public function changestatus_to_p()
	{
		echo json_encode($this->admin_m->changestatus_to_p());
	}

	public function changestatus_to_s()
	{
		echo json_encode($this->admin_m->changestatus_to_s());
	}

	public function generate_laporan()
	{
		// if(isset($_SESSION["role"]) && $_SESSION["role"] == "admin"){
			// Load library
			$this->load->library('dompdf_gen');
			
			$this->load->view("admin/laporan");
			$laporan = $this->output->get_output();
			// Convert to PDF
			$this->dompdf->load_html($laporan);
			$this->dompdf->set_paper('A4', 'lanscape');
			$this->dompdf->render();
			$this->dompdf->stream("welcome.pdf");
		// }else{
			// echo "login sebagai admin dulu!";
		// }
		
	}

	public function hapus()
	{
		# code...
		echo json_encode($this->admin_m->hapus());
	}

	public function datapetugas()
	{
		# code...
		if(isset($_SESSION["role"])){
			if($_SESSION["role"] == "admin"){
				$this->load->view("admin/datapetugas");
			}else{
				$this->load->view("errors/index");

			}
		}else{
			$this->load->view("errors/index");

		}
	}

	public function getdata_petugas()
	{
		echo json_encode($this->admin_m->getdata_petugas());
	}

	public function datamasyarakat()
	{
		# code...
		if(isset($_SESSION["role"])){
			if($_SESSION["role"] == "admin"){
				$this->load->view("admin/datamasyarakat");
			}else{
				$this->load->view("errors/index");

			}
		}else{
			$this->load->view("errors/index");

		}
	}

	public function getdata_masyarakat()
	{
		echo json_encode($this->admin_m->getdata_masyarakat());
	}

	public function laporan()
	{
		$this->load->view("admin/generatelaporan");
	}

	public function data_laporan()
	{
		$from = $this->input->post("from", true);
		$end = $this->input->post("end", true);
		$this->db->select(array("pengaduan_tgl_pengaduan", "pengaduan_nik","pengaduan_isi_laporan", "pengaduan_foto", "tanggapan_tgl_tanggapan", "tanggapan_tanggapan", "petugas_nama_petugas"));
		$this->db->from("tb_pengaduan");
		$this->db->join("tb_tanggapan", "tb_tanggapan.tanggapan_id_pengaduan = tb_pengaduan.pengaduan_id_pengaduan");
		$this->db->join("tb_petugas", "tb_tanggapan.tanggapan_id_petugas = tb_petugas.petugas_id_petugas");
		$this->db->where("pengaduan_tgl_pengaduan >=", $from);
		$this->db->where("pengaduan_tgl_pengaduan <=", $end);
		echo json_encode($this->db->get()->result());
	}
	

}
?>