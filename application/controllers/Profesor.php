<?php
 
class Profesor extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Profesor_model');
    } 

    /*
     * Listar profesores
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('profesor/index?');
        $config['total_rows'] = $this->Profesor_model->get_all_profesores_count();
        $this->pagination->initialize($config);

        $data['profesores'] = $this->Profesor_model->get_all_profesores($params);
        
        $data['_view'] = 'profesores/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Agregar profesor
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'id_curso' => $this->input->post('id_curso'),
				'id_carrera' => $this->input->post('id_carrera'),
				'id_estado_usuario' => $this->input->post('id_estado_usuario'),
				'id_datos_personales' => $this->input->post('id_datos_personales'),
				'id_tipo_usuario' => $this->input->post('id_tipo_usuario'),
            );
            
            $profesor_id = $this->Profesor_model->add_profesor($params);
            redirect('profesor/index');
        }
        else
        {
			$this->load->model('Curso_model');
			$data['all_cursos'] = $this->Curso_model->get_all_cursos();

			$this->load->model('Carrera_model');
			$data['all_carreras'] = $this->Carrera_model->get_all_carreras();

			$this->load->model('Estado_usuario_model');
			$data['all_estados_usuario'] = $this->Estado_usuario_model->get_all_estados_usuario();

			$this->load->model('Datos_personales_model');
			$data['all_datos_personales'] = $this->Datos_personales_model->get_all_datos_personales();

			$this->load->model('Tipo_usuario_model');
			$data['all_tipo_usuarios'] = $this->Tipo_usuario_model->get_all_tipo_usuarios();
            
            $data['_view'] = 'profesores/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editar profesor
     */
    function edit($id_profesores)
    {   
        //Verificar si el profesor existe antes de tratar de editarlo.
        $data['profesor'] = $this->Profesor_model->get_profesor($id_profesores);
        
        if(isset($data['profesor']['id_profesores']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'id_curso' => $this->input->post('id_curso'),
					'id_carrera' => $this->input->post('id_carrera'),
					'id_estado_usuario' => $this->input->post('id_estado_usuario'),
					'id_datos_personales' => $this->input->post('id_datos_personales'),
					'id_tipo_usuario' => $this->input->post('id_tipo_usuario'),
                );

                $this->Profesor_model->update_profesor($id_profesores,$params);            
                redirect('profesor/index');
            }
            else
            {
				$this->load->model('Curso_model');
				$data['all_cursos'] = $this->Curso_model->get_all_cursos();

				$this->load->model('Carrera_model');
				$data['all_carreras'] = $this->Carrera_model->get_all_carreras();

				$this->load->model('Estado_usuario_model');
				$data['all_estados_usuario'] = $this->Estado_usuario_model->get_all_estados_usuario();

				$this->load->model('Datos_personales_model');
				$data['all_datos_personales'] = $this->Datos_personales_model->get_all_datos_personales();

				$this->load->model('Tipo_usuario_model');
				$data['all_tipo_usuarios'] = $this->Tipo_usuario_model->get_all_tipo_usuarios();

                $data['_view'] = 'profesores/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('El profesor que esta tratando de editar no existe.');
    } 

    /*
     * Eliminar profesor
     */
    function remove($id_profesores)
    {
        $profesor = $this->Profesor_model->get_profesor($id_profesores);

        //Verificar si el profesor existe antes de tratar de eliminarlo.
        if(isset($profesor['id_profesores']))
        {
            $this->Profesor_model->delete_profesor($id_profesores);
            redirect('profesor/index');
        }
        else
            show_error('El profesor que esta tratando de editar no existe.');
    }
    
}
