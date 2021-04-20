<?php
class Masyarakat extends CI_Controller{

	public function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model("masyarakat_m");
		$this->load->model("app_m");
	}

	public function index()
	{
		# code...
		if($this->session->has_userdata("nik")){
			// $data["datapengaduan"] = $this->app_m->getdatapengaduan();
            $this->load->view("masyarakat/dashboard");
            // echo "Yes";
        }else{
            echo "No Session, Login Dulu";
        }
	}

	public function login()
    {
        $this->load->view('masyarakat/login');
    }

    public function register()
    {
        $this->load->view('masyarakat/register');
    }

    public function login_process()
    {
        $this->masyarakat_m->login_process();
    }

    public function register_process()
    {
        $this->masyarakat_m->register_process();
    }

    public function dashboard()
    {
        if($this->session->has_userdata("nik")){
        	// $data["datapengaduan"] = $this->app_m->getdatapengaduan(0);
            $this->load->view("masyarakat/dashboard");
            // echo "Yes";
        }else{
            echo "No Session, Login Dulu";
        }
    }

    public function lapor()
    {
    	$this->masyarakat_m->lapor();
    }

    public function logout()
    {
    	unset($_SESSION["nik"]);
    	unset($_SESSION["nama"]);
    	redirect("/");
    }
}
?>