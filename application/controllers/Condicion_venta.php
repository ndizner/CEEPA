<?php
 
class Condicion_venta extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Condicion_venta_model');
    } 

    /*
     * Listar condiciones_venta
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('condicion_venta/index?');
        $config['total_rows'] = $this->Condicion_venta_model->get_all_condiciones_venta_count();
        $this->pagination->initialize($config);

        $data['condiciones_venta'] = $this->Condicion_venta_model->get_all_condiciones_venta($params);
        
        $data['_view'] = 'condiciones_venta/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Agregar condicion_venta
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'descripcion' => $this->input->post('descripcion'),
            );
            
            $condicion_venta_id = $this->Condicion_venta_model->add_condicion_venta($params);
            redirect('condicion_venta/index');
        }
        else
        {            
            $data['_view'] = 'condiciones_venta/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editar condicion_venta
     */
    function edit($id_cond_venta)
    {   
        //Verificar si la condicion_venta existe antes de tratar de editarla.
        $data['condicion_venta'] = $this->Condicion_venta_model->get_condicion_venta($id_cond_venta);
        
        if(isset($data['condicion_venta']['id_cond_venta']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'descripcion' => $this->input->post('descripcion'),
                );

                $this->Condicion_venta_model->update_condicion_venta($id_cond_venta,$params);            
                redirect('condicion_venta/index');
            }
            else
            {
                $data['_view'] = 'condiciones_venta/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('La condicion_venta que esta tratando de editar no existe.');
    } 

    /*
     * Eliminar condicion_venta
     */
    function remove($id_cond_venta)
    {
        $condicion_venta = $this->Condicion_venta_model->get_condicion_venta($id_cond_venta);

        //Verificar si la condicion_venta existe antes de tratar de eliminarla.
        if(isset($condicion_venta['id_cond_venta']))
        {
            $this->Condicion_venta_model->delete_condicion_venta($id_cond_venta);
            redirect('condicion_venta/index');
        }
        else
            show_error('La condicion_venta que esta tratando de eliminar no existe.');
    }
    
}
