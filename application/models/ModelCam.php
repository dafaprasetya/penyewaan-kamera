<?php 
    class ModelCam extends CI_Model 
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function tambahkamera($nama, $model, $keterangan, $status, $gambar, $waktu1, $harga1, $waktu2, $harga2) {
            ///
            $data_kamera = array(
                'nama' => $nama,
                'model' => $model,
                'keterangan' => $keterangan,
                'status' => $status,
                'gambar' => $gambar,
                'waktu1' => $waktu1,
                'harga1' => $harga1,
                'waktu2' => $waktu2,
                'harga2' => $harga2,
            );
            $this->db->insert('kamera', $data_kamera);
        }
        public function tambahsewa($id, $waktu, $harga, $status, $namap, $nomor) {
            $this->db->get_where('kamera', array('id'=>$id));
            $data = array(
                'waktu' => $waktu,
                'harga' => $harga,
            );
            // $this->db->update('kamera', $data);
            $this->db->set('waktusewa',$waktu);
            $this->db->set('hargasewa',$harga);
            $this->db->set('status','disewakan');
            $this->db->set('namapenyewa',$namap);
            $this->db->update('kamera');
            $this->load->model('invoice');
    		$datacam = $this->db->get_where('kamera', array('id'=>$id))->row();
            $this->invoice->tambahinvoice($namap, $datacam->nama,$datacam->model,$waktu, $harga, $nomor);
            
        }
        public function hapussewa($id) {
            $this->db->where('id', $id);
            // $this->db->update('kamera', $data);
            $this->db->set('waktusewa','-');
            $this->db->set('hargasewa','-');
            $this->db->set('namapenyewa','-');
            $this->db->set('status','tidak disewakan');
            $this->db->update('kamera');
        }
        
    }
?>