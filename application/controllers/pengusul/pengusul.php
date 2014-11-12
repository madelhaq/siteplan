<?php
class pengusul extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('url','file');
		$this->load->library('session');
		$this->load->model('m_portal');
		$this->load->model('m_pengusul');
	}
	
	public function index(){
		$data['user'] = $this->session->userdata('user');
		$this->load->view('pengusul/headerPengusul',$data);
		$this->load->view('pengusul/homePengusul',$data);
		$this->load->view('portal/footer');
	}
	
	public function upload(){
		$data['user'] = $this->session->userdata('user');
		$this->load->view('pengusul/headerPengusul',$data);
		$this->load->view('pengusul/uploadFile');
		$this->load->view('portal/footer');
	}
	
	//fungsi untuk melakukan upload file
	public function upload_File(){
		
		$data['ktp'] = $this->session->userdata('no_ktp');
		$data['id_level'] = 1;
		$nama_file = $data['ktp'];
		
		$config['upload_path']='./file/';
		$config['allowed_types']= 'gif|jpg|png|docx|doc|pdf';
		$config['max_size'] = 1024*4;
		//$config['encrypt_name'] = TRUE;

		$this->load->library('upload',$config);
		$this->upload->initialize($config);
		
		$i = 1;
		foreach($_FILES as $field => $berkas){
			
			$this->upload->do_upload($field);
			$uploaded = $this->upload->data();
			
			
			if($i == 1){
				$data['fKtp']= $uploaded['raw_name'].$uploaded['file_ext'];
			}else if($i == 2){
				$data['fApbh'] = $uploaded['raw_name'].$uploaded['file_ext'];
			}else if($i == 3){
				$data['fPbb'] = $uploaded['raw_name'].$uploaded['file_ext'];
			}else if($i == 4){
				$data['fRbh'] = $uploaded['raw_name'].$uploaded['file_ext'];
			}else if($i == 5){
				$data['fBkt'] = $uploaded['raw_name'].$uploaded['file_ext'];
			}else if($i == 6){
				$data['fPpt'] = $uploaded['raw_name'].$uploaded['file_ext'];
			}else if($i == 7){
				$data['fSk'] = $uploaded['raw_name'].$uploaded['file_ext'];
			}else if($i == 8){
				$data['fSpt'] = $uploaded['raw_name'].$uploaded['file_ext'];
			}else if($i == 9){
				$data['fGsp'] = $uploaded['raw_name'].$uploaded['file_ext'];
			}else if($i == 10){
				$data['fGrb'] = $uploaded['raw_name'].$uploaded['file_ext'];
			}else if($i == 11){
				$data['fHu'] = $uploaded['raw_name'].$uploaded['file_ext'];
			}else if($i == 12){
				$data['fSktabg'] = $uploaded['raw_name'].$uploaded['file_ext'];
			}
			$i = $i + 1;
		}
		$data['tanggal_masuk'] = date('Y-m-d');
		$this->m_pengusul->insert_file($data);
		
		echo '<script type="text/javascript">
			alert("Data Berhasil Tersimpan");	
			</script>' ;
			
		redirect('pengusul/');
	}
	
	public function layanan(){
		$data['user'] = $this->session->userdata('user');
		$this->load->view('pengusul/headerPengusul',$data);
		$this->load->view('pengusul/layanan');
		$this->load->view('portal/footer');
	}
	
	public function pesan(){
		$data['user'] = $this->session->userdata('user');
		$this->load->view('pengusul/headerPengusul',$data);
		$this->load->view('pengusul/pesan');
		$this->load->view('portal/footer');
	}
}