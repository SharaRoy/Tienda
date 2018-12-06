<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class principal extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('session','form_validation'));
        $this->load->helper(array('url','form'));
        //Inicializamos la clase para la base de datos
        $this->load->database();

    }

  	public function index()
  	{
        echo "aqui";
        //Verificamos si ya se inicio la sesión
        switch ($this->session->userdata('login')) {
            case 'TRUE':
                $this->loadViewPanel();
            break;
            default:
                $this->load->view('login');
            break;
        }
  	}

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
}
