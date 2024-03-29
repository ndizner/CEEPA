<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tipo_usuario extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tipo_usuario_model');
    } 

    /*
     * Listing of tipo_usuario
     */
    function index()
    {
        $data['tipo_usuario'] = $this->Tipo_usuario_model->get_all_tipo_usuario();
        
        $data['_view'] = 'tipo_usuario/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new tipo_usuario
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'tipo_usuario_estado' => $this->input->post('tipo_usuario_estado'),
				'descripcion' => $this->input->post('descripcion'),
            );
            
            $tipo_usuario_id = $this->Tipo_usuario_model->add_tipo_usuario($params);
            redirect('tipo_usuario/index');
        }
        else
        {            
            $data['_view'] = 'tipo_usuario/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a tipo_usuario
     */
    function edit($id_tipo_usuario)
    {   
        // check if the tipo_usuario exists before trying to edit it
        $data['tipo_usuario'] = $this->Tipo_usuario_model->get_tipo_usuario($id_tipo_usuario);
        
        if(isset($data['tipo_usuario']['id_tipo_usuario']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'tipo_usuario_estado' => $this->input->post('tipo_usuario_estado'),
					'descripcion' => $this->input->post('descripcion'),
                );

                $this->Tipo_usuario_model->update_tipo_usuario($id_tipo_usuario,$params);            
                redirect('tipo_usuario/index');
            }
            else
            {
                $data['_view'] = 'tipo_usuario/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The tipo_usuario you are trying to edit does not exist.');
    } 

    /*
     * Deleting tipo_usuario
     */
    function remove($id_tipo_usuario)
    {
        $tipo_usuario = $this->Tipo_usuario_model->get_tipo_usuario($id_tipo_usuario);

        // check if the tipo_usuario exists before trying to delete it
        if(isset($tipo_usuario['id_tipo_usuario']))
        {
            $this->Tipo_usuario_model->delete_tipo_usuario($id_tipo_usuario);
            redirect('tipo_usuario/index');
        }
        else
            show_error('The tipo_usuario you are trying to delete does not exist.');
    }
    
}
