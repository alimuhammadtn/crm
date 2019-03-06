<?php if (!defined('BASEPATH'))    exit('No direct script access allowed');

class Admin_model extends CI_Model {
	

	public function login($username,$password) {

		$this->db->where('username',$username);

		$this->db->where('password',$password);

		$query = $this->db->get('users');

		if($query->num_rows() == 1)
		{
			foreach ($query->result() as $row ){

			$data = array('username'=>$row->username,'logged_in'=>TRUE,'role'=>$row->role);

			}

			$this->session->set_userdata($data);

			return TRUE;

		}
		else
		{
			return FALSE;
		}
		
	  	
	}


	public function isLoggedIn() {
       
        $is_logged_in = $this->session->userdata('logged_in');

        if (!isset($is_logged_in) || $is_logged_in !== TRUE) {
            redirect('/login');
            exit;
        }
    }


}

?>