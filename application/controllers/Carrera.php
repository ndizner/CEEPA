<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Carrera extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Carrera_model');
    } 

    /*
     * Listing of carreras
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('carrera/index?');
        $config['total_rows'] = $this->Carrera_model->get_all_carreras_count();
        $this->pagination->initialize($config);

        $data['carreras'] = $this->Carrera_model->get_all_carreras($params);
        
        $data['_view'] = 'carreras/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new carrera
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'descripcion' => $this->input->post('descripcion'),
            );
            
            $carrera_id = $this->Carrera_model->add_carrera($params);
            redirect('carrera/index');
        }
        else
        {            
            $data['_view'] = 'carreras/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a carrera
     */
    function edit($id_carrera)
    {   
        // check if the carrera exists before trying to edit it
        $data['carrera'] = $this->Carrera_model->get_carrera($id_carrera);
        
        if(isset($data['carrera']['id_carrera']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'descripcion' => $this->input->post('descripcion'),
                );

                $this->Carrera_model->update_carrera($id_carrera,$params);            
                redirect('carrera/index');
            }
            else
            {
                $data['_view'] = 'carreras/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The carrera you are trying to edit does not exist.');
    } 

    /*
     * Deleting carrera
     */
    function remove($id_carrera)
    {
        $carrera = $this->Carrera_model->get_carrera($id_carrera);

        // check if the carrera exists before trying to delete it
        if(isset($carrera['id_carrera']))
        {
            $this->Carrera_model->delete_carrera($id_carrera);
            redirect('carrera/index');
        }
        else
            show_error('The carrera you are trying to delete does not exist.');
    }
    
}
