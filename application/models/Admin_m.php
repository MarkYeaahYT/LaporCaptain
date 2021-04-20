<?php
class Admin_m extends CI_Model{
	
	public function changestatus_to_p()
	{
		$id = $this->input->post("id");
		$this->db->set("pengaduan_status", "proses");
		$this->db->where("pengaduan_id_pengaduan", $id);
		return $this->db->update("tb_pengaduan");		
	}

	public function changestatus_to_s()
	{
		$id = $this->input->post("id");
		$tanggapan = $this->input->post("tanggapan");

		$this->db->set("pengaduan_status", "selesai");
		$this->db->where("pengaduan_id_pengaduan", $id);
		$this->db->update("tb_pengaduan");

		$this->db->set("tanggapan_id_pengaduan", $id);		
		$this->db->set("tanggapan_tgl_tanggapan", date("Ymd"));
		$this->db->set("tanggapan_tanggapan", $tanggapan);
		$this->db->set("tanggapan_id_petugas", $_SESSION["id_petugas"]);
		return $this->db->insert("tb_tanggapan");

	}

	public function hapus()
	{
		# code...
		$id = $this->input->post("id");

		$this->db->where("pengaduan_id_pengaduan", $id);
		return $this->db->delete("tb_pengaduan");
	}

	public function getdata_petugas()
	{
		$this->db->select(array("petugas_id_petugas", "petugas_nama_petugas", "petugas_telp", "petugas_level"));
		$this->db->from("tb_petugas");
		return $this->db->get()->result();
	}

	public function getdata_masyarakat()
	{
		$this->db->select(array("masyarakat_nik", "masyarakat_nama", "masyarakat_username", "masyarakat_telp"));
		$this->db->from("tb_masyarakat");
		return $this->db->get()->result();
	}

}
?>