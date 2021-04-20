<?php
class Petugas extends CI_Controller{

	public function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model("admin_m");

	}

	public function index()
	{
		if(isset($_SESSION["role"])){
			if($_SESSION["role"] == "petugas"){
				$this->load->view("petugas/dashboard");
			}else{
				echo "Nope";

			}
		}else{
			echo "Nope";
		}
	}

	public function dataproses()
	{
		if(isset($_SESSION["role"])){
			if($_SESSION["role"] == "petugas"){
				$this->load->view("petugas/dataproses");
			}else{
				echo "petugas Nope";

			}
		}else{
			echo "petugas Nope";
		}
	}

	public function dataselesai()
	{
		if(isset($_SESSION["role"])){
			if($_SESSION["role"] == "petugas"){
				$this->load->view("petugas/dataselesai");
			}else{
				echo "petugas Nope";

			}
		}else{
			echo "petugas Nope";
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
}
?>