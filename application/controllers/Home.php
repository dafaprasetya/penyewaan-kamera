<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$kamera = $this->db->get_where('kamera', array('status'=>'tidak disewakan'));
		$data = array(
			'judul' => 'Penyewaan kamera',
			'kamera' => $kamera,
		);
		$this->load->view('home/index', $data);
	}
	public function kamera($id){
		$query = $this->db->get_where('kamera', array('id'=>$id));
		$data = array(
			'detailcam'=>$query->row(),
		);
		$this->load->view('home/kamera', $data);
	}
}
