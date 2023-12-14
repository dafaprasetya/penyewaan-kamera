<?php 
    class Muser extends CI_Model 
    {
        
        const SESSION_KEY = 'user_id';
        public function __construct()
        {
            parent::__construct();
        }
    
        function register($username,$password,$email, $role)
        {
            $data_user = array(
                'username'=>$username,
                'password'=>password_hash($password,PASSWORD_DEFAULT),
                'role'=>$role,
                'email'=>$email,
            );
            $this->db->insert('user',$data_user);
        }
        public function login($email, $password) {
            $query = $this->db->get_where('user', array('email'=>$email));
            if ($query->num_rows() > 0) {
                $data_user = $query->row();
                if (password_verify($password, $data_user->password)) {
                    $this->session->set_userdata('email', $email);
                    $this->session->set_userdata('username', $data_user->username);
                    $this->session->set_userdata('role', $data_user->role);
                    $this->session->set_userdata('is_login', TRUE);
                    return TRUE;
                }else {
                    return FALSE;
                }
            }else{
                return FALSE;
            }
        }
        public function cek_login()
        {
            if (empty($this->session->userdata('is_login'))) {
                redirect('auth');
            }
        }
        public function logout()
        {
            $this->session->unset_userdata(self::SESSION_KEY);
            return !$this->session->has_userdata(self::SESSION_KEY);
        }
    }
?>