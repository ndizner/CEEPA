<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Localidades extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Localidades_model');
    } 

    /*
     * Listing of localidades
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('localidad/index?');
        $config['total_rows'] = $this->Localidades_model->get_all_localidades_count();
        $this->pagination->initialize($config);

        $data['localidades'] = $this->Localidades_model->get_all_localidades($params);
        
        $data['_view'] = 'localidad/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new localidad
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('id_provincia','Id Provincia','required');
		$this->form_validation->set_rules('descripcion','Descripcion','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'id_provincia' => $this->input->post('id_provincia'),
				'descripcion' => $this->input->post('descripcion'),
            );
            
            $localidad_id = $this->Localidades_model->add_localidad($params);
            redirect('localidades/index');
        }
        else
        {
			$this->load->model('Provincias_model');
			$data['all_provincias'] = $this->Provincias_model->get_all_provincias();
            
            $data['_view'] = 'localidad/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a localidad
     */
    function edit($id_localidad)
    {   
        // check if the localidad exists before trying to edit it
        $data['localidad'] = $this->Localidades_model->get_localidad($id_localidad);
        
        if(isset($data['localidad']['id_localidad']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('id_provincia','Id Provincia','required');
			$this->form_validation->set_rules('descripcion','Descripcion','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'id_provincia' => $this->input->post('id_provincia'),
					'descripcion' => $this->input->post('descripcion'),
                );

                $this->Localidades_model->update_localidad($id_localidad,$params);            
                redirect('localidades/index');
            }
            else
            {
				$this->load->model('Provincias_model');
				$data['all_provincias'] = $this->Provincias_model->get_all_provincias();

                $data['_view'] = 'localidad/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The localidad you are trying to edit does not exist.');
    } 

    /*
     * Deleting localidad
     */
    function remove($id_localidad)
    {
        $localidad = $this->Localidades_model->get_localidad($id_localidad);

        // check if the localidad exists before trying to delete it
        if(isset($localidad['id_localidad']))
        {
            $this->Localidades_model->delete_localidad($id_localidad);
            redirect('localidades/index');
        }
        else
            show_error('The localidad you are trying to delete does not exist.');
    }
    
}
