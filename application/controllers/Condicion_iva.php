<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Condicion_iva extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Condicion_iva_model');
    } 

    /*
     * Listing of condicion_iva
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('condicion_iva/index?');
        $config['total_rows'] = $this->Condicion_iva_model->get_all_condicion_iva_count();
        $this->pagination->initialize($config);

        $data['condicion_iva'] = $this->Condicion_iva_model->get_all_condicion_iva($params);
        
        $data['_view'] = 'condicion_iva/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new condicion_iva
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('descripcion','Descripcion','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'descripcion' => $this->input->post('descripcion'),
            );
            
            $condicion_iva_id = $this->Condicion_iva_model->add_condicion_iva($params);
            redirect('condicion_iva/index');
        }
        else
        {            
            $data['_view'] = 'condicion_iva/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a condicion_iva
     */
    function edit($id_cond_iva)
    {   
        // check if the condicion_iva exists before trying to edit it
        $data['condicion_iva'] = $this->Condicion_iva_model->get_condicion_iva($id_cond_iva);
        
        if(isset($data['condicion_iva']['id_cond_iva']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('descripcion','Descripcion','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'descripcion' => $this->input->post('descripcion'),
                );

                $this->Condicion_iva_model->update_condicion_iva($id_cond_iva,$params);            
                redirect('condicion_iva/index');
            }
            else
            {
                $data['_view'] = 'condicion_iva/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The condicion_iva you are trying to edit does not exist.');
    } 

    /*
     * Deleting condicion_iva
     */
    function remove($id_cond_iva)
    {
        $condicion_iva = $this->Condicion_iva_model->get_condicion_iva($id_cond_iva);

        // check if the condicion_iva exists before trying to delete it
        if(isset($condicion_iva['id_cond_iva']))
        {
            $this->Condicion_iva_model->delete_condicion_iva($id_cond_iva);
            redirect('condicion_iva/index');
        }
        else
            show_error('The condicion_iva you are trying to delete does not exist.');
    }
    
}
