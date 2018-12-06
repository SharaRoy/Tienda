<?php
// defined('BASEPATH') OR exit('No direct script access allowed');
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session','form_validation'));
        $this->load->helper(array('url','form'));
        //Inicializamos la clase para la base de datos
        $this->load->database();

    }

  	public function index($datos = NULL)
    {
        if ($this->session->userdata('login')) {
            $this->loadViewPanel();
        }else {
            $this->load->view('login',$datos);
        }
  	}

    //Validamos el formulario de sesión
    public function validateForm()
    {
        //Verificamos si se envio el formulario
        if ($this->input->post("ingreso")) {
            //Validaciones del formulario
            $this->form_validation->set_rules('inputUsuario', 'Usuario', 'required');
            $this->form_validation->set_rules('inputPassword', 'Contraseña', 'required|trim');

            $this->form_validation->set_message('required','El campo %s es obligatorio');

            //Si pasa las validaciones enviamos la informacion al servidor
            if($this->form_validation->run()!=false){
                $usuario = $this->input->post("inputUsuario");
                $password = $this->input->post("inputPassword");
                $login = $this->validateLogin($usuario,$password);

                //Verificamos la respuesta de la validación
                if ($login == TRUE) {
                    redirect(base_url()."principal");
                    // $this->loadViewPanel();
                }else {
                    $datos["mensaje"] = "0";
                    //Cargamos la vista del login
                    $this->load->view('login',$datos);
                }
            }else{
                $datos["mensaje"] = "0";
                //Cargamos la vista del login
                $this->load->view('login',$datos);
            }
        }
    }

    //Realizamos la consulta para validar el usuario en la base de datos
    public function validateLogin($usuario = '',$password = '')
    {
        //Creamos la consulta para validar los datos
        $sql = "SELECT * FROM usuarios WHERE usuario = ? AND password = ?";
        $query = $this->db->query($sql, array($usuario,$password));

        //Recuperamos la respuesta de la consulta
        $row = $query->row();

        //Si el usuario fue correcto, guardamos los datos en la sesion
        if (isset($row)){
            //Guardamos los datos del usuario en la sesion
            $data = array(
                'userID' => $row->id,
                'nombreUsuario' => $row->usuario,
                'correo' => $row->correo,
                'login'=>'TRUE'
            );
            //Guardamos los valres de sesion
            $this->session->set_userdata($data);
            $respuesta = TRUE;
        }else {
            $respuesta = FALSE;
        }
        return $respuesta;
    }

    //Cargamos la vista del Panel
    public function loadViewPanel()
    {
        //Realizamos la consulta para ver los modulos instalados y su estatus
        $query = $this->db->query("SELECT * FROM db_modulos");

        //Creamos variable para contener resultado
        $modulos = array();

        //Cargamos los valores en la variable para mandarlos a la vista
        foreach ($query->result() as $row)
        {
                $modulos["modulo"][] = $row->modulo;
                $modulos["estatus"][] = $row->activo;
        }
        //Mandamos el nombre del usuario para mostrarlo
        $modulos["nombreUsuario"] = strtoupper($this->session->userdata('nombreUsuario'));
        $modulos["correoUsuario"] = $this->session->userdata('correo');

        //Cargamos las vistas para implementarlas
        $coleccion = array(
            "header" => $this->load->view("layout/header", '', TRUE),
            "menu" => $this->load->view("layout/panel", $modulos, TRUE),
            "header_navegation" => $this->load->view("layout/header_navegation",
                array("nombreUsuario"=>$modulos["nombreUsuario"],"correoUsuario"=>$modulos["correoUsuario"]),
                TRUE),
            "contenido" => $this->load->view("welcome_message", '', TRUE),
            "footer" => $this->load->view("layout/footer", '', TRUE),
            "titulo" => "Tienda"
        );

        //Cargamos la estructura principal para cargar el Panel
        $this->load->view("layout/main",$coleccion);
    }

    //Borramos los datos de sesión para el acceso a las vistas
    public function signOff()
    {
        $this->session->sess_destroy();
        $this->load->view('login');
    }

}
