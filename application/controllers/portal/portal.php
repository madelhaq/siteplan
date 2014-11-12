<?php
class portal extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('url','file','captcha'));
		$this->load->library('session');
		$this->load->model('m_portal');
		
	}
	public function index(){
		$this->load->view('portal/header');
		$this->load->view('portal/homepage');
		$this->load->view('portal/footer');
	}
	public function pendaftaranPengusul(){
		$this->load->view('portal/header');
		$this->load->view('portal/pendaftaran');
		$this->load->view('portal/footer');
	}
	
	public function savePendaftaran(){
		
		$no_ktp = $this->input->post("no_ktp");
		$nama_ktp = $this->input->post("nama_ktp");
		$alamat = $this->input->post("alamat");
		$email= $this->input->post("email");
		$password = $this->input->post("password");
		
		$this->m_portal->insert_daftar($no_ktp, $nama_ktp, $alamat, $email, $password);
		echo '<script type="text/javascript">
			alert("Data Berhasil Tersimpan");	
			</script>' ;
		$this->load->view('portal/header');
		$this->load->view('portal/homepage');
		$this->load->view('portal/footer');
	}
	
	public function loginPengusul(){
		
		$log_email = $this->input->post('log_email');
		$log_pass = $this->input->post('log_pass');
		
		$log_valid = $this->m_portal->loginValidasi($log_email,$log_pass);
		
		if($log_valid != -1){
			$data['no_ktp'] = $log_valid;
			$data['user'] = $this->m_portal->getPengusulbyId($log_valid)->result();
			
			$data['is_logged_in'] = true;
			
			$this->session->set_userdata($data);
			redirect('pengusul/pengusul/');
			
		}else{
			echo '<script type="text/javascript">
			alert("Username atau Password Yang Anda Masukkan Salah..!!!");	
			</script>' ;
			$this->load->view('portal/header');
			$this->load->view('portal/homepage');
			$this->load->view('portal/footer');
		}
	
	}
	
	public function logout(){
		$this->session->sess_destroy();
		$this->load->view('portal/header');
		$this->load->view('portal/homepage');
		$this->load->view('portal/footer');
	}
	
	public function panduan(){
		$this->load->view('portal/header');
		$this->load->view('portal/panduan');
		$this->load->view('portal/footer');
	}
}