<?php
class Masyarakat_m extends CI_Model{
	
	public function login_process()
	{
		# code...
		$username = $this->input->post("username");
        $password = $this->input->post("password");

        $query = $this->db->query("CALL login_masyarakat('$username', md5('$password'))");
        // print_r($query->result());
        if($query->num_rows() >= 1){
            // echo $query->result()[0]->masyarakat_nik;
            $datases = array(
                'nik' => $query->result()[0]->masyarakat_nik, 
                'nama' => $query->result()[0]->masyarakat_nama, 
            );
            $this->session->set_userdata($datases);
            redirect("/masyarakat/dashboard");
        }else{
            echo "Login Gagal";
        }
	}

	public function register_process()
	{
		# code...
		$nik = $this->input->post("nik");
        $nama = $this->input->post("nama");
        $username = $this->input->post("username");
        $password = $this->input->post("password");

        $query = $this->db->query("CALL register_masyarakat('$nik', '$nama', '$username', md5('$password'))");
        if($query){
            redirect("/masyarakat/login");
        }else{
            echo "Register gagal";
        }
	}

	public function lapor()
	{
		# code...
		# code...
    	$config['upload_path'] = "./uploads";
    	$config['allowed_types'] = "jpg|png|jpeg";
    	$config['max_sizes'] = 0;

    	$this->load->library("upload", $config);

    	$tanggal = $this->input->post("tanggal");
    	$judul = $this->input->post("judul");
    	$isi = $this->input->post("isi");

    	if(!$this->upload->do_upload('file')){
    		$data = array("error", $this->upload->display_errors());
    		// print_r($data);
    		// echo $tanggal;
    		// echo $judul;
    		// echo $isi;
    		$this->db->set("pengaduan_tgl_pengaduan", $tanggal);
    		$this->db->set("pengaduan_nik", $_SESSION["nik"]);
    		$this->db->set("pengaduan_judul", $judul);
    		$this->db->set("pengaduan_isi_laporan", $isi);
    		$this->db->insert("tb_pengaduan");
    		redirect("/masyarakat");

    	}else{
    		$data = $this->upload->data();
    		// echo $tanggal;
    		// echo $judul;
    		// echo $isi;
    		// echo $data["file_name"];
    		$this->db->set("pengaduan_tgl_pengaduan", $tanggal);
    		$this->db->set("pengaduan_nik", $_SESSION["nik"]);
    		$this->db->set("pengaduan_judul", $judul);
    		$this->db->set("pengaduan_isi_laporan", $isi);
    		$this->db->set("pengaduan_foto", $data["file_name"]);
    		$this->db->insert("tb_pengaduan");
    		redirect("/masyarakat");
    		

    	}
	}
}
?>