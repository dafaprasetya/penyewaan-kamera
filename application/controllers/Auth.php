<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
		
    }
	public function index()
	{
		$this->load->model('muser');
		if ($this->session->userdata('is_login')) {
			redirect('home');
		}
        $data['judul'] = 'Login';
		$this->load->view('snippets/header', $data);
		$this->load->view('snippets/navbar', $data);
		$this->load->view('auth/login', $data);
		$this->load->view('snippets/footer', $data);
	}
	public function p_login() {
		$this->load->model('muser');
		if ($this->session->userdata('is_login')) {
			redirect('home');
		}
		$username = $this->input->post('email');
		$password = $this->input->post('password');
		if ($this->muser->login($username, $password)) {
			redirect('admin');
		}else{
			$this->session->set_flashdata('error', 'Email / Password Salah');
			redirect('auth');
		}
	}
	public function logout() {
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('role');
		$this->session->unset_userdata('is_login');
		redirect('auth');
	}

	public function register()
	{
		$this->load->model('muser');
		if ($this->session->userdata('is_login')) {
			redirect('home');
		}
		$data['judul'] = "Daftar";
		$this->load->view('snippets/header', $data);
		$this->load->view('snippets/navbar', $data);
		$this->load->view('auth/register', $data);
		$this->load->view('snippets/footer', $data);
	}
	public function p_register() {
		$this->load->model('muser');
		if ($this->session->userdata('is_login')) {
			redirect('home');
		}
		$this->form_validation->set_rules('username', 'username','trim|required|min_length[1]|max_length[255]|is_unique[user.username]');
		$this->form_validation->set_rules('email', 'email','trim|required|min_length[1]|max_length[255]|is_unique[user.email]');
		$this->form_validation->set_rules('password', 'password','trim|required|min_length[1]|max_length[255]');
		if ($this->form_validation->run())
	   	{
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$role = 'user';
			// $this->auth->register($username,$password,$email, $role);
			$this->muser->register($username,$password,$email,$role);
			// $this->load->model('muser')->register($username, $email,$password,$role);
			$this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
			redirect('auth');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('auth/register');
		}
	}
	
}
