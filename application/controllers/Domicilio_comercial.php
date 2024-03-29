<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Domicilio_comercial extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Domicilio_comercial_model');
    } 

    /*
     * Listing of domicilio_comercial
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('domicilio_comercial/index?');
        $config['total_rows'] = $this->Domicilio_comercial_model->get_all_domicilio_comercial_count();
        $this->pagination->initialize($config);

        $data['domicilio_comercial'] = $this->Domicilio_comercial_model->get_all_domicilio_comercial($params);
        
        $data['_view'] = 'domicilio_comercial/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new domicilio_comercial
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('dom_comer_estado','Dom Comer Estado','required');
		$this->form_validation->set_rules('id_localidad','Id Localidad','required');
		$this->form_validation->set_rules('id_provincia','Id Provincia','required');
		$this->form_validation->set_rules('calle','Calle','required');
		$this->form_validation->set_rules('numero','Numero','integer|required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'dom_comer_estado' => $this->input->post('dom_comer_estado'),
				'id_localidad' => $this->input->post('id_localidad'),
				'id_provincia' => $this->input->post('id_provincia'),
				'calle' => $this->input->post('calle'),
				'numero' => $this->input->post('numero'),
            );
            
            $domicilio_comercial_id = $this->Domicilio_comercial_model->add_domicilio_comercial($params);
            redirect('domicilio_comercial/index');
        }
        else
        {
			$this->load->model('Localidades_model');
			$data['all_localidades'] = $this->Localidades_model->get_all_localidades();

			$this->load->model('Provincias_model');
			$data['all_provincias'] = $this->Provincias_model->get_all_provincias();
            
            $data['_view'] = 'domicilio_comercial/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a domicilio_comercial
     */
    function edit($id_domicilio_comer)
    {   
        // check if the domicilio_comercial exists before trying to edit it
        $data['domicilio_comercial'] = $this->Domicilio_comercial_model->get_domicilio_comercial($id_domicilio_comer);
        
        if(isset($data['domicilio_comercial']['id_domicilio_comer']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('dom_comer_estado','Dom Comer Estado','required');
			$this->form_validation->set_rules('id_localidad','Id Localidad','required');
			$this->form_validation->set_rules('id_provincia','Id Provincia','required');
			$this->form_validation->set_rules('calle','Calle','required');
			$this->form_validation->set_rules('numero','Numero','integer|required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'dom_comer_estado' => $this->input->post('dom_comer_estado'),
					'id_localidad' => $this->input->post('id_localidad'),
					'id_provincia' => $this->input->post('id_provincia'),
					'calle' => $this->input->post('calle'),
					'numero' => $this->input->post('numero'),
                );

                $this->Domicilio_comercial_model->update_domicilio_comercial($id_domicilio_comer,$params);            
                redirect('domicilio_comercial/index');
            }
            else
            {
				$this->load->model('Localidades_model');
				$data['all_localidades'] = $this->Localidades_model->get_all_localidades();

				$this->load->model('Provincias_model');
				$data['all_provincias'] = $this->Provincias_model->get_all_provincias();

                $data['_view'] = 'domicilio_comercial/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The domicilio_comercial you are trying to edit does not exist.');
    } 

    /*
     * Deleting domicilio_comercial
     */
    function remove($id_domicilio_comer)
    {
        $domicilio_comercial = $this->Domicilio_comercial_model->get_domicilio_comercial($id_domicilio_comer);

        // check if the domicilio_comercial exists before trying to delete it
        if(isset($domicilio_comercial['id_domicilio_comer']))
        {
            $this->Domicilio_comercial_model->delete_domicilio_comercial($id_domicilio_comer);
            redirect('domicilio_comercial/index');
        }
        else
            show_error('The domicilio_comercial you are trying to delete does not exist.');
    }
    
}
