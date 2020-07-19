<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Autorizar extends CI_Controller {
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -  
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
        {
         parent::__construct();
                $this->load->model('form_model');
                $this->load->library(array('form_validation','session'));
        }
    public function index()
    {
        $this->load->view('autorizar/index');
    }
    

    public function login(){
        $email    = $this->input->post('email',TRUE);
        $password = md5($this->input->post('password',TRUE));
        $validate = $this->form_model->validate($email,$password);

        if($validate->num_rows() > 0){
            $data  = $validate->row_array();
            $nombre  = $data['nombre'];
            $apellidos = $data['apellidos'];
            $telefono = $data['telefono'];
            $cumpleanios = $data['cumpleanios'];
            $email = $data['email'];
            $rol = $data['rol'];

            $sesdata = array(
                'nombre'     => $nombre,
                'apellidos'  => $apellidos,
                'telefono'   => $telefono,
                'cumpleanios'=> $cumpleanios,
                'email'      => $email,
                'rol'        => $rol,
                'logged_in'  => TRUE
            );
            $this->session->set_userdata($sesdata);
            if($rol === 'Admin'){
                redirect('page');
            }elseif($rol === 'Usuario'){
                redirect('page/page_user');
            }
        }else{
            echo $this->session->set_flashdata('msg','Username or Password is Wrong');
            redirect('autorizar');
        }
    }

    public function post_register()
    {
        $this->form_validation->set_rules('nombre_usuario', 'Nombre Usuario', 'required');
        $this->form_validation->set_rules('apellidos', 'Apellidos', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('telefono', 'Telefono', 'required');
        $this->form_validation->set_rules('cumpleanios', 'Cumpleanios', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('rol','Rol','required');
		
        
        
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_message('required', 'Enter %s');
 
        if ($this->form_validation->run() === FALSE)
        {  
            $this->load->view('Autorizar/registro');
        }
        else
        {       
            $data = array(
               'nombre' => $this->input->post('nombre_usuario'),
               'apellidos' => $this->input->post('apellidos'),
               'email' => $this->input->post('email'),
               'telefono' => $this->input->post('telefono'),
               'cumpleanios' => $this->input->post('cumpleanios'),
               'password' => md5($this->input->post('password')),
               'rol' => $this->input->post('rol'),
               
 
             );
            
            $check = $this->form_model->insert_user($data);
 
            if($check != false){
 
                $user = array(
                 'id' => $check,
                 'email' => $this->input->post('email'),
                 'nombre' => $this->input->post('nombre_usuario'),
                 'apellidos' => $this->input->post('apellidos'),
                 'rol'        => $this->input->post('rol')
                );
             }
            
             $this->session->set_userdata($user);
             echo $this->session->set_flashdata('msg','Username Created');
             $this->load->view('autorizar/inicio');
            }
                    
    }
    
    public function logout(){
    $this->session->sess_destroy();
    redirect('autorizar');
    }
}
