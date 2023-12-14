<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
		$this->load->model('modelcam');
		if ($this->session->userdata('role') == 'admin') {
			return TRUE;
		}
		else {
			redirect('auth');
		}
    }
	public function index()
	{
        // $data['judul'] = "ADMIN";
		$kameraall = $this->db->get('kamera');
		$disewa = $this->db->get_where('kamera', array('status'=>'disewakan'));
		$tidakdisewa = $this->db->get_where('kamera', array('status'=>'tidak disewakan'));
		$data = array(
			'judul' => 'ADMIN',
			'kamera' => $kameraall,
			'disewa' => $disewa,
			'tidakdisewa' => $tidakdisewa,
		);
		
		$this->load->view('admin/index', $data);
	}
	public function disewakan()
	{
        // $data['judul'] = "ADMIN";
		$kameraall = $this->db->get_where('kamera', array('status'=>'disewakan'));
		$disewa = $this->db->get_where('kamera', array('status'=>'disewakan'));
		$tidakdisewa = $this->db->get_where('kamera', array('status'=>'tidak disewakan'));
		$data = array(
			'judul' => 'ADMIN',
			'kamera' => $kameraall,
			'disewa' => $disewa,
			'tidakdisewa' => $tidakdisewa,
		);
		
		$this->load->view('admin/disewakan', $data);
	}
	public function tidakdisewakan()
	{
        // $data['judul'] = "ADMIN";
		$kameraall = $this->db->get_where('kamera', array('status'=>'tidak disewakan'));
		$disewa = $this->db->get_where('kamera', array('status'=>'disewakan'));
		$tidakdisewa = $this->db->get_where('kamera', array('status'=>'tidak disewakan'));
		$data = array(
			'judul' => 'ADMIN',
			'kamera' => $kameraall,
			'disewa' => $disewa,
			'tidakdisewa' => $tidakdisewa,
		);
		
		$this->load->view('admin/tidakdisewakan', $data);
	}
	function invoice() {
		// $data['judul'] = "ADMIN";
		$kameraall = $this->db->get('invoice');
		$disewa = $this->db->get_where('kamera', array('status'=>'disewakan'));
		$tidakdisewa = $this->db->get_where('kamera', array('status'=>'tidak disewakan'));
		$data = array(
			'judul' => 'ADMIN',
			'kamera' => $kameraall,
			'disewa' => $disewa,
			'tidakdisewa' => $tidakdisewa,
		);
		
		$this->load->view('admin/invoice', $data);
	}
	function detailinvoice($id) {
		// $data['judul'] = "ADMIN";
		$ingpois = $this->db->get_where('invoice', array('id'=>$id));
		$data = array(
			'judul' => 'ADMIN',
			'invoice' => $ingpois->row(),
		);
		
		$this->load->view('admin/detailinvoice', $data);
	}
	public function tambahkamera() {
		// $data['judul'] = "ADMIN";
		$kameraall = $this->db->get('kamera');
		$disewa = $this->db->get_where('kamera', array('status'=>'disewakan'));
		$tidakdisewa = $this->db->get_where('kamera', array('status'=>'tidak disewakan'));
		$data = array(
			'judul' => 'ADMIN',
			'kamera' => $kameraall,
			'disewa' => $disewa,
			'tidakdisewa' => $tidakdisewa,
		);
		$this->load->view('admin/tambahcam', $data);
	}
	public function p_tambahkamera() {
		$this->form_validation->set_rules('nama', 'nama','required');
		$this->form_validation->set_rules('model', 'model','required');
		$this->form_validation->set_rules('keterangan', 'keterangan','required');
		$this->form_validation->set_rules('waktu1', 'waktu1','required');
		$this->form_validation->set_rules('harga1', 'harga1','required');
		$this->form_validation->set_rules('waktu2', 'waktu2','required');
		$this->form_validation->set_rules('harga2', 'harga2','required');
		// $this->form_validation->set_rules('gambar', 'gambar','required');
		if ($this->form_validation->run()) {
			$nama = $this->input->post('nama');
			$model = $this->input->post('model');
			$keterangan = $this->input->post('keterangan');
			$waktu1 = $this->input->post('waktu1');
			$harga1 = $this->input->post('harga1');
			$waktu2 = $this->input->post('waktu2');
			$harga2 = $this->input->post('harga2');
			// $gambar = 'uploads/'.$this->input->post('gambar')['file_name'];
			$status = 'tidak disewakan';
			$config['upload_path'] = APPPATH.'../uploads/';
			$config['allowed_types'] = 'jpg|png';
			$config['file_name'] = $this->input->post('nama').rand(0,100);
			$this->load->library('upload', $config);
			$this->upload->do_upload('gambar');
			$upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
			$gambar = 'uploads/'.$upload_data['file_name'];
			$this->modelcam->tambahkamera($nama, $model, $keterangan,$status,$gambar, $waktu1, $harga1, $waktu2, $harga2);
			$this->session->set_flashdata('berhasil', 'Berhasil menambahkan kamera');
			redirect('admin');
		}else {
			$this->session->set_flashdata('error', 'Periksa kembali kelengkapan produk');
			redirect('admin/tambahkamera');
		}
	}
	public function editkamera($id) {
		$kameraall = $this->db->get('kamera');
		$disewa = $this->db->get_where('kamera', array('status'=>'disewakan'));
		$tidakdisewa = $this->db->get_where('kamera', array('status'=>'tidak disewakan'));
		$kameradetail = $this->db->get_where('kamera', array('id'=>$id));
		if ($this->input->server('REQUEST_METHOD') === 'POST') {
			$this->form_validation->set_rules('waktu','waktu','required');
			$this->form_validation->set_rules('harga','harga','required');
			$this->form_validation->set_rules('namap','namap','required');
			$this->form_validation->set_rules('nomor','nomor','required');
			if ($this->form_validation->run()) {
				$id = $kameraall->row()->id;
				$waktu = $this->input->post('waktu');
				$harga = $this->input->post('harga');
				$namap = $this->input->post('namap');
				$nomor = $this->input->post('nomor');
				$status = 'disewakan';
				$this->modelcam->tambahsewa($id, $waktu, $harga, $status, $namap, $nomor);
				redirect('admin');
			}
			if ($this->input->post('hapussewa')) {
				$this->modelcam->hapussewa($id);
				redirect('admin');
			}
		}
		$data = array(
			'judul' => 'ADMIN',
			'kamera' => $kameraall,
			'disewa' => $disewa,
			'tidakdisewa' => $tidakdisewa,
			'detail' => $kameradetail->row(),
		);
		$this->load->view('admin/editkamera',$data);
	}
	// public function p_editkamera() {
	// 	$this->form_validation->set_rules('waktu','waktu','required');
	// 	$this->form_validation->set_rules('harga','harga','required');
	// 	if ($this->form_validation->run()) {
	// 		$waktu = $this->input->post('waktu');
	// 		$harga = $this->input->post('harga');
	// 		$status = 'disewakan';
			
	// 	}
	// }
}
