<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Alumno extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Alumno_model');
    } 

    /*
     * Listing of alumnos
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('alumno/index?');
        $config['total_rows'] = $this->Alumno_model->get_all_alumnos_count();
        $this->pagination->initialize($config);

        $data['alumnos'] = $this->Alumno_model->get_all_alumnos($params);
        
        $data['_view'] = 'alumno/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new alumno
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('email','Email','valid_email');
		$this->form_validation->set_rules('dni','Dni','max_length[8]');
		$this->form_validation->set_rules('nombre','Nombre','required|alpha');
		$this->form_validation->set_rules('apellido','Apellido','required');
		$this->form_validation->set_rules('edad','Edad','required|integer');
		$this->form_validation->set_rules('estudios','Estudios','required');
		$this->form_validation->set_rules('telefono','Telefono','required');
		$this->form_validation->set_rules('id_carrera','Id Carrera','required');
		$this->form_validation->set_rules('id_curso','Id Curso','required');
		$this->form_validation->set_rules('id_localidad','Id Localidad','required');
		$this->form_validation->set_rules('alumno_estado','Alumno Estado','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'alumno_estado' => $this->input->post('alumno_estado'),
				'id_carrera' => $this->input->post('id_carrera'),
				'id_curso' => $this->input->post('id_curso'),
				'id_localidad' => $this->input->post('id_localidad'),
				'nombre' => $this->input->post('nombre'),
				'apellido' => $this->input->post('apellido'),
				'edad' => $this->input->post('edad'),
				'dni' => $this->input->post('dni'),
				'domicilio' => $this->input->post('domicilio'),
				'estudios' => $this->input->post('estudios'),
				'email' => $this->input->post('email'),
				'telefono' => $this->input->post('telefono'),
            );
            
            $alumno_id = $this->Alumno_model->add_alumno($params);
            redirect('alumno/index');
        }
        else
        {
			$this->load->model('Carrera_model');
			$data['all_carreras'] = $this->Carrera_model->get_all_carreras();

			$this->load->model('Curso_model');
			$data['all_cursos'] = $this->Curso_model->get_all_cursos();

			$this->load->model('Localidades_model');
			$data['all_localidades'] = $this->Localidades_model->get_all_localidades();
            
            $data['_view'] = 'alumno/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a alumno
     */
    function edit($id_alumnos)
    {   
        // check if the alumno exists before trying to edit it
        $data['alumno'] = $this->Alumno_model->get_alumno($id_alumnos);
        
        if(isset($data['alumno']['id_alumnos']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('email','Email','valid_email');
			$this->form_validation->set_rules('dni','Dni','max_length[8]');
			$this->form_validation->set_rules('nombre','Nombre','required|alpha');
			$this->form_validation->set_rules('apellido','Apellido','required');
			$this->form_validation->set_rules('edad','Edad','required|integer');
			$this->form_validation->set_rules('estudios','Estudios','required');
			$this->form_validation->set_rules('telefono','Telefono','required');
			$this->form_validation->set_rules('id_carrera','Id Carrera','required');
			$this->form_validation->set_rules('id_curso','Id Curso','required');
			$this->form_validation->set_rules('id_localidad','Id Localidad','required');
			$this->form_validation->set_rules('alumno_estado','Alumno Estado','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'alumno_estado' => $this->input->post('alumno_estado'),
					'id_carrera' => $this->input->post('id_carrera'),
					'id_curso' => $this->input->post('id_curso'),
					'id_localidad' => $this->input->post('id_localidad'),
					'nombre' => $this->input->post('nombre'),
					'apellido' => $this->input->post('apellido'),
					'edad' => $this->input->post('edad'),
					'dni' => $this->input->post('dni'),
					'domicilio' => $this->input->post('domicilio'),
					'estudios' => $this->input->post('estudios'),
					'email' => $this->input->post('email'),
					'telefono' => $this->input->post('telefono'),
                );

                $this->Alumno_model->update_alumno($id_alumnos,$params);            
                redirect('alumno/index');
            }
            else
            {
				$this->load->model('Carrera_model');
				$data['all_carreras'] = $this->Carrera_model->get_all_carreras();

				$this->load->model('Curso_model');
				$data['all_cursos'] = $this->Curso_model->get_all_cursos();

				$this->load->model('Localidades_model');
				$data['all_localidades'] = $this->Localidades_model->get_all_localidades();

                $data['_view'] = 'alumno/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The alumno you are trying to edit does not exist.');
    } 

    /*
     * Deleting alumno
     */
    function remove($id_alumnos)
    {
        $alumno = $this->Alumno_model->get_alumno($id_alumnos);

        // check if the alumno exists before trying to delete it
        if(isset($alumno['id_alumnos']))
        {
            $this->Alumno_model->delete_alumno($id_alumnos);
            redirect('alumno/index');
        }
        else
            show_error('The alumno you are trying to delete does not exist.');
    }
    
}
