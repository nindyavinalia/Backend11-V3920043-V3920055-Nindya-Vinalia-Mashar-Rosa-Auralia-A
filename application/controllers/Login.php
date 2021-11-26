<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();

		$this->load->model('M_login');
	}

	public function index(){

		$this->load->view('v_login');

	}

	public function login_aksi(){
		$email = $this->input->post('email',true);
		$pass = md5($this->input->post('password', true));

		//rule validasi
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run() != FALSE){
			$where = array(
				'email' => $email,
				'password' => $pass
			);

			$cekLogin = $this->M_login->cek_login($where)->num_rows();

			if($cekLogin > 0){
				$sess_data = array(
					'email' => $email,
					'login' => 'OK'
				);

				$this->session->set_userdata($sess_data);

				redirect(base_url('home'));

			}else{
				redirect(base_url('login'));
			}

		}else{
			$this->load->view('v_login');
		}

	}

	public function logout(){

		$this->session->sess_destroy();
		redirect(base_url('login'));

	}
}
?>