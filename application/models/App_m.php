<?php
class App_m extends CI_Model{
	
	public function getdatapengaduan($status)
	{
		# code...
		$query = $this->db->query("SELECT tp.pengaduan_id_pengaduan, tp.pengaduan_tgl_pengaduan, tp.pengaduan_judul, tp.pengaduan_isi_laporan, tp.pengaduan_foto, tp.pengaduan_status, tm.masyarakat_nama FROM tb_pengaduan tp join tb_masyarakat tm on tp.pengaduan_nik = tm.masyarakat_nik WHERE tp.pengaduan_status = '$status' ORDER BY tp.pengaduan_id_pengaduan DESC");
		return $query->result();
	}

	public function getdatapengaduan_all()
	{
		# code...

        // $data = $this->db->get("tb_pengaduan");
        
        // $result = array();
        // foreach ($data->result() as $row) {
        //     if($row->pengaduan_status == "selesai"){
        //         $this->db->select("*");
        //         $this->db->from("tb_pengaduan");
        //         $this->db->join("tb_masyarakat", "tb_pengaduan.pengaduan_nik = tb_masyarakat.masyarakat_nik");
        //         $this->db->join("tb_tanggapan", "tb_pengaduan.pengaduan_id_pengaduan = tb_tanggapan.tanggapan_id_pengaduan");
        //         $data_t = $this->db->get();
        //         foreach ($data_t->result() as $row) {
        //             $temp = array(
        //                 "judul" => $row->pengaduan_judul,
        //                 "tgl_lapor" => $row->pengaduan_tgl_pengaduan,
        //                 "pelapor" => $row->masyarakat_nama,
        //                 "status" => $row->pengaduan_status,
        //                 "foto" => $row->pengaduan_foto,
        //                 "isi" => $row->pengaduan_isi_laporan,
        //                 "tanggapan" => $row->tanggapan_tanggapan
                        
        //             );
        //             // $result += $temp;
        //             array_push($result, $temp);
        //         }
                
        //     }else{
        //         $this->db->select("*");
        //         $this->db->from("tb_pengaduan");
        //         $this->db->join("tb_masyarakat", "tb_pengaduan.pengaduan_nik = tb_masyarakat.masyarakat_nik");
        //         $data_t = $this->db->get();
        //         foreach ($data_t->result() as $row) {
        //             $temp = array(
        //                 "judul" => $row->pengaduan_judul,
        //                 "tgl_lapor" => $row->pengaduan_tgl_pengaduan,
        //                 "pelapor" => $row->masyarakat_nama,
        //                 "status" => $row->pengaduan_status,
        //                 "foto" => $row->pengaduan_foto,
        //                 "isi" => $row->pengaduan_isi_laporan,
        //                 "tanggapan" => $row->tanggapan_tanggapan
        //             );
        //             // $result += $temp;
        //             array_push($result, $temp);
        //         }
        //     }
        // }

        // return $result;


		$query = $this->db->query("SELECT tp.pengaduan_id_pengaduan, tp.pengaduan_tgl_pengaduan, tp.pengaduan_judul, tp.pengaduan_isi_laporan, tp.pengaduan_foto, tp.pengaduan_status, tm.masyarakat_nama FROM tb_pengaduan tp join tb_masyarakat tm on tp.pengaduan_nik = tm.masyarakat_nik ORDER BY tp.pengaduan_id_pengaduan DESC");
		return $query->result();
	}

	public function getdatapengaduan_s()
	{
		# code...
		$query = $this->db->query("SELECT tp.pengaduan_id_pengaduan, tp.pengaduan_tgl_pengaduan, tp.pengaduan_judul, tp.pengaduan_isi_laporan, tp.pengaduan_foto, tp.pengaduan_status, tm.masyarakat_nama, tt.tanggapan_tanggapan, tt.tanggapan_tgl_tanggapan,tpt.petugas_nama_petugas FROM tb_pengaduan tp join tb_masyarakat tm on tp.pengaduan_nik = tm.masyarakat_nik join tb_tanggapan tt on tp.pengaduan_id_pengaduan = tt.tanggapan_id_pengaduan join tb_petugas tpt on tt.tanggapan_id_petugas = tpt.petugas_id_petugas WHERE tp.pengaduan_status = 'selesai' ORDER BY tp.pengaduan_id_pengaduan DESC");
		return $query->result();
	}

	public function loginsecret_proses()
    {
        $username = $this->input->post("username");
        $password = $this->input->post("password");

        $this->db->where("petugas_username", $username);
        $this->db->where("petugas_password", md5($password));
        $query = $this->db->get("tb_petugas");
        $res = $query->result();
        if($query->num_rows() > 0){
        	if($res[0]->petugas_level == "admin"){
        		$data = array(
        			'role' =>  "admin",
        			'nama_petugas' =>  $res[0]->petugas_nama_petugas,
        			'id_petugas' => $res[0]->petugas_id_petugas
        		);
        		$this->session->set_userdata($data);
        		redirect("/admin");
        	}else if($res[0]->petugas_level == "petugas"){
        		$data = array(
        			'role' => "petugas",
        			'nama_petugas' => $res[0]->petugas_nama_petugas,
        			'id_petugas' => $res[0]->petugas_id_petugas
	        	);
    	    	$this->session->set_userdata($data);
        		redirect("/petugas");
        	}
        }else{
        	echo "username atau password salah";
        }

    }

    public function registersecret_proses()
    {
        $nama = $this->input->post("nama");
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $telp = $this->input->post("telp");
        $level = $this->input->post("level");

        $this->db->set("petugas_nama_petugas", $nama);
        $this->db->set("petugas_username", $username);
        $this->db->set("petugas_password", md5($password));
        $this->db->set("petugas_telp", $telp);
        $this->db->set("petugas_level", $level);

        $this->db->insert("tb_petugas");
        redirect("/app/loginsecret");
    }
}
?>