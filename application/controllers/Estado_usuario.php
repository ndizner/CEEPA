<?php
 
class Estado_usuario extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Estado_usuario_model');
    } 

    /*
     * Listar estados_usuario
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('estado_usuario/index?');
        $config['total_rows'] = $this->Estado_usuario_model->get_all_estados_usuario_count();
        $this->pagination->initialize($config);

        $data['estados_usuario'] = $this->Estado_usuario_model->get_all_estados_usuario($params);
        
        $data['_view'] = 'estados_usuario/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Agregar estado_usuario
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'descripcion' => $this->input->post('descripcion'),
            );
            
            $estado_usuario_id = $this->Estado_usuario_model->add_estado_usuario($params);
            redirect('estado_usuario/index');
        }
        else
        {            
            $data['_view'] = 'estados_usuario/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editar estado_usuario
     */
    function edit($id_estado_usuario)
    {   
        //Verificar si el estado_usuario existe antes de tratar de editarlo.
        $data['estado_usuario'] = $this->Estado_usuario_model->get_estado_usuario($id_estado_usuario);
        
        if(isset($data['estado_usuario']['id_estado_usuario']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'descripcion' => $this->input->post('descripcion'),
                );

                $this->Estado_usuario_model->update_estado_usuario($id_estado_usuario,$params);            
                redirect('estado_usuario/index');
            }
            else
            {
                $data['_view'] = 'estados_usuario/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('El estado_usuario que esta tratando de editar no existe.');
    } 

    /*
     * Eliminar estado_usuario
     */
    function remove($id_estado_usuario)
    {
        $estado_usuario = $this->Estado_usuario_model->get_estado_usuario($id_estado_usuario);

        //Verificar si el estado_usuario existe antes de tratar de eliminarlo.
        if(isset($estado_usuario['id_estado_usuario']))
        {
            $this->Estado_usuario_model->delete_estado_usuario($id_estado_usuario);
            redirect('estado_usuario/index');
        }
        else
            show_error('El estado_usuario que esta tratando de eliminar no existe.');
    }
    
}
