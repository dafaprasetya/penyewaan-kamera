<?php 
    class Authe extends CI_Model 
    {
        
        public function __construct()
        {
            parent::__construct();
        }
    
        function register($username,$password,$email, $role)
        {
            $data_user = array(
                'username'=>$username,
                'role'=>$username,
                'email'=>$email,
                'password'=>password_hash($password,PASSWORD_DEFAULT),
            );
            $this->db->insert('user',$data_user);
        }
    }
?>