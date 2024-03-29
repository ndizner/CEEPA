<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Provincia extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Provincias_model');
    } 

    /*
     * Listing of provincias
     */
    function index()
    {
        $data['provincias'] = $this->Provincias_model->get_all_provincias();
        
        $data['_view'] = 'provincia/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new provincia
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('descripcion','Descripcion','required|alpha');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'descripcion' => $this->input->post('descripcion'),
            );
            
            $provincia_id = $this->Provincias_model->add_provincia($params);
            redirect('provincia/index');
        }
        else
        {            
            $data['_view'] = 'provincia/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a provincia
     */
    function edit($id_provincia)
    {   
        // check if the provincia exists before trying to edit it
        $data['provincia'] = $this->Provincias_model->get_provincia($id_provincia);
        
        if(isset($data['provincia']['id_provincia']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('descripcion','Descripcion','required|alpha');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'descripcion' => $this->input->post('descripcion'),
                );

                $this->Provincias_model->update_provincia($id_provincia,$params);            
                redirect('provincia/index');
            }
            else
            {
                $data['_view'] = 'provincia/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The provincia you are trying to edit does not exist.');
    } 

    /*
     * Deleting provincia
     */
    function remove($id_provincia)
    {
        $provincia = $this->Provincias_model->get_provincia($id_provincia);

        // check if the provincia exists before trying to delete it
        if(isset($provincia['id_provincia']))
        {
            $this->Provincias_model->delete_provincia($id_provincia);
            redirect('provincia/index');
        }
        else
            show_error('The provincia you are trying to delete does not exist.');
    }
    
}
