<?php
class Generales{
    var $CI;
      public function __construct($params = array())
      {
        $this->CI =& get_instance();
        $this->CI->load->library('ion_auth');
        $this->CI->load->library('session');
        $this->CI->load->model('Ion_auth_model');
        $this->CI->load->library('email');

      }
    /*
    *
    *
    *
    *  Esta libreria carga variables que se usan en la vista principal.
    *
    * + Valida que el usuario este logueado, si no lo redirige al login
    * + Genera la variable SESION que contiene la informacion del usuario logueado en formato de ObjStd::
    * + Genera la variable PERFIL que contiene el tipo de perfil que posee el usuario.
    +
    */
      public function imports_generales($string = null){
        if (!$this->CI->ion_auth->logged_in()){
          $this->CI->session->set_flashdata('error','Debe estar logueado para realizar esta acción.');
        redirect('auth/login');
        }
        $this->user = $this->CI->ion_auth->user()->row();
        $this->data['sesion'] = $this->user;
        $this->data['perfil'] = $this->CI->Ion_auth_model->get_users_groups()->row();
        return $this->data;
    }
    }
