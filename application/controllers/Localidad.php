<?php
 
class Localidad extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Localidad_model');
    } 

    /*
     * Listar localidades
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('localidad/index?');
        $config['total_rows'] = $this->Localidad_model->get_all_localidades_count();
        $this->pagination->initialize($config);

        $data['localidades'] = $this->Localidad_model->get_all_localidades($params);
        
        $data['_view'] = 'localidades/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Agregar localidad
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'descripcion' => $this->input->post('descripcion'),
            );
            
            $localidad_id = $this->Localidad_model->add_localidad($params);
            redirect('localidad/index');
        }
        else
        {            
            $data['_view'] = 'localidades/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editar localidad
     */
    function edit($id_localidad)
    {   
        // Verificar si la localidad existe antes de tratar de editarla.
        $data['localidad'] = $this->Localidad_model->get_localidad($id_localidad);
        
        if(isset($data['localidad']['id_localidad']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'descripcion' => $this->input->post('descripcion'),
                );

                $this->Localidad_model->update_localidad($id_localidad,$params);            
                redirect('localidad/index');
            }
            else
            {
                $data['_view'] = 'localidades/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('La localidad que esta tratando de editar no existe.');
    } 

    /*
     * Eliminar localidad
     */
    function remove($id_localidad)
    {
        $localidad = $this->Localidad_model->get_localidad($id_localidad);

        // Verificar si la localidad existe antes de tratar de eliminarla.
        if(isset($localidad['id_localidad']))
        {
            $this->Localidad_model->delete_localidad($id_localidad);
            redirect('localidad/index');
        }
        else
            show_error('La localidad que esta tratando de eliminar no existe.');
    }
    
}
