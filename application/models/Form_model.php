<?php
class Form_model extends CI_Model {


    public function __construct()
    {
        $this->load->database();
    }

    public function validate($email,$password)
    {
    $this->db->where('email',$email);
    $this->db->where('password',$password);
    $result = $this->db->get('usuarios',1);
    return $result;
    }

  public function auth_check($data)
    {
        $query = $this->db->get_where('usuarios', $data);
        if($query){   
         return $query->row();
        }
        return false;
    }

    public function all()
    {
        $query = $this->db->get('usuarios');
        return $query->result();
    }

    public function insert_user($data)
    {
 
        $insert = $this->db->insert('usuarios', $data);
        if ($insert) {
           return $this->db->insert_id();
        } else {
            return false;
        }
    }

}