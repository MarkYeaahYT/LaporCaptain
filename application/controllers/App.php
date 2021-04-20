<?php
class App extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("app_m");
    }

    public function index()
    {
        if(isset($_SESSION["nik"])){
            redirect("masyarakat/dashboard");
        }else{
            $this->load->view('landing/landing');

        }
    }

    public function getdatapengaduan()
    {
        # status 0
        echo json_encode($this->app_m->getdatapengaduan(0));
    }

    public function getdatapengaduan_p()
    {
        # status 0
        echo json_encode($this->app_m->getdatapengaduan("proses"));
    }

    public function getdatapengaduan_s()
    {
        # status 0
        echo json_encode($this->app_m->getdatapengaduan_s());
    }

    public function getdatapengaduan_all()
    {
        # status 0
        echo json_encode($this->app_m->getdatapengaduan_all());
    }

    public function loginsecret()
    {
        $this->load->view("admin/login");
    }

    public function loginsecret_proses()
    {
        $this->app_m->loginsecret_proses();
    }

    public function registersecret()
    {
        if(isset($_SESSION["role"]) && $_SESSION["role"] == "admin"){
            $this->load->view("admin/register");
        }else{
            echo "login sebagai admin sebelum register petugas";
        }
    }

    public function registersecret_proses()
    {
        $this->app_m->registersecret_proses();
        
    }


    public function debug()
    {
        // print_r($this->app_m->getdatapengaduan());
        // echo date("Y-m-d h:i:s");
        // echo date("Ymd");
        // echo $_SESSION["nik"];
        // echo $_SESSION["nama"];
        // unset($_SESSION["nik"]);
        // unset($_SESSION["nama"]);
        // echo basename($_SERVER["SCRIPT_NAME"]);
        // echo "<br>";
        // echo $_SERVER["SCRIPT_NAME"];
        // echo "<br>";
        // str_replace(search, replace, subject)
        // echo str_replace(basename($_SERVER["SCRIPT_NAME"]), "", $_SERVER["SCRIPT_NAME"]);
        
        $data = $this->db->get("tb_pengaduan");
        
        // $this->db->select(array(
        //     "pengaduan_tgl_pengaduan",
        //     "masyarakat_nama",
        //     "tanggapan_tanggapan"
        // ));
        // $this->db->select("*");
        // $this->db->from("tb_pengaduan");
        // $this->db->join("tb_masyarakat", "tb_pengaduan.pengaduan_nik = tb_masyarakat.masyarakat_nik");
        // $this->db->join("tb_tanggapan", "tb_pengaduan.pengaduan_id_pengaduan = tb_tanggapan.tanggapan_id_pengaduan");
        // $data = $this->db->get();
        // print_r($data->result());
        $result = array();
        foreach ($data->result() as $row) {
            if($row->pengaduan_status == "selesai"){
                $this->db->select("*");
                $this->db->from("tb_pengaduan");
                $this->db->join("tb_masyarakat", "tb_pengaduan.pengaduan_nik = tb_masyarakat.masyarakat_nik");
                $this->db->join("tb_tanggapan", "tb_pengaduan.pengaduan_id_pengaduan = tb_tanggapan.tanggapan_id_pengaduan");
                $data_t = $this->db->get();
                foreach ($data_t->result() as $row) {
                    $temp = array(
                        "judul" => $row->pengaduan_judul,
                        "tgl_lapor" => $row->pengaduan_tgl_pengaduan,
                        "pelapor" => $row->masyarakat_nama,
                        "status" => $row->pengaduan_status,
                        "foto" => $row->pengaduan_foto,
                        "isi" => $row->tanggapan_tanggapan
                    );
                    // $result += $temp;
                    array_push($result, $temp);
                }
                
            }else{
                $this->db->select("*");
                $this->db->from("tb_pengaduan");
                $this->db->join("tb_masyarakat", "tb_pengaduan.pengaduan_nik = tb_masyarakat.masyarakat_nik");
                $data_t = $this->db->get();
                foreach ($data_t->result() as $row) {
                    $temp = array(
                        "judul" => $row->pengaduan_judul,
                        "tgl_lapor" => $row->pengaduan_tgl_pengaduan,
                        "pelapor" => $row->masyarakat_nama,
                        "status" => $row->pengaduan_status,
                        "foto" => $row->pengaduan_foto,
                        "isi" => null
                    );
                    // $result += $temp;
                    array_push($result, $temp);
                }
            }
        }

        echo json_encode($result);

    }

}

?>