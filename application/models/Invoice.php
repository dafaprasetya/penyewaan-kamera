<?php 
    class Invoice extends CI_Model 
    {
        public function __construct()
        {
            parent::__construct();
        }
        public function tambahinvoice($nama_penyewa,$nama_kamera, $model_kamera, $waktu, $harga, $nomor) {
            ///
            $data_invoice = array(
                'nama_penyewa' => $nama_penyewa,
                'nama_kamera' => $nama_kamera,
                'model_kamera' => $model_kamera,
                'waktu' => $waktu,
                'harga' => $harga,
                'nomor_penyewa' => $nomor,
                'tanggal' => date('y-m-d'),
                'invoiceid' => str_replace(' ','',strtoupper(substr($nama_penyewa,0,2).substr($nama_kamera,rand(1,3),rand(0,2)).substr($model_kamera,rand(2,3),rand(1,2)).rand(1000,2000).substr($waktu,0,3))),
            );
            $this->db->insert('invoice', $data_invoice);
        }
        
    }
?>