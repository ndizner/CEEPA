<?php
 
class Datos_personales extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Datos_personales_model');
    } 

    /*
     * Listar datos_personales
     */
    function index()
    {
        $params['limit'] = RECORDS_PER_PAGE; 
        $params['offset'] = ($this->input->get('per_page')) ? $this->input->get('per_page') : 0;
        
        $config = $this->config->item('pagination');
        $config['base_url'] = site_url('dato_personal/index?');
        $config['total_rows'] = $this->Datos_personales_model->get_all_datos_personales_count();
        $this->pagination->initialize($config);

        $data['datos_personales'] = $this->Datos_personales_model->get_all_datos_personales($params);
        
        $data['_view'] = 'datos_personales/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Agregar dato_personal
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nombre','Nombre','required');
		$this->form_validation->set_rules('apellido','Apellido','required');
		$this->form_validation->set_rules('fecha_nacimiento','Fecha Nacimiento','required');
		$this->form_validation->set_rules('tel','Tel','min_length[10]');
		$this->form_validation->set_rules('email','Email','valid_email|required');
		$this->form_validation->set_rules('calle','Calle','required');
		$this->form_validation->set_rules('numero','Numero','required');
		$this->form_validation->set_rules('codigo_postal','Codigo Postal','required');
		$this->form_validation->set_rules('contacto_emergencia','Contacto Emergencia','required');
		$this->form_validation->set_rules('tel_emergencia','Tel Emergencia','required');
		$this->form_validation->set_rules('parentesco_emergencia','Parentesco Emergencia','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'estado_psicofisico' => $this->input->post('estado_psicofisico'),
				'id_localidad' => $this->input->post('id_localidad'),
				'id_provincia' => $this->input->post('id_provincia'),
				'nombre' => $this->input->post('nombre'),
				'apellido' => $this->input->post('apellido'),
				'fecha_nacimiento' => $this->input->post('fecha_nacimiento'),
				'tel' => $this->input->post('tel'),
				'email' => $this->input->post('email'),
				'calle' => $this->input->post('calle'),
				'numero' => $this->input->post('numero'),
				'codigo_postal' => $this->input->post('codigo_postal'),
				'contacto_emergencia' => $this->input->post('contacto_emergencia'),
				'tel_emergencia' => $this->input->post('tel_emergencia'),
				'parentesco_emergencia' => $this->input->post('parentesco_emergencia'),
            );
            
            $dato_personal_id = $this->Datos_personales_model->add_dato_personal($params);
            redirect('datos_personales/index');
        }
        else
        {
			$this->load->model('Localidad_model');
			$data['all_localidades'] = $this->Localidad_model->get_all_localidades();

			$this->load->model('Provincia_model');
			$data['all_provincias'] = $this->Provincia_model->get_all_provincias();
            
            $data['_view'] = 'datos_personales/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editar dato_personal
     */
    function edit($id_datos_personales)
    {   
        //Verificar si el dato_personal existe antes de tratar de editarlo.
        $data['dato_personal'] = $this->Datos_personales_model->get_dato_personal($id_datos_personales);
        
        if(isset($data['dato_personal']['id_datos_personales']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nombre','Nombre','required');
			$this->form_validation->set_rules('apellido','Apellido','required');
			$this->form_validation->set_rules('fecha_nacimiento','Fecha Nacimiento','required');
			$this->form_validation->set_rules('tel','Tel','min_length[10]');
			$this->form_validation->set_rules('email','Email','valid_email|required');
			$this->form_validation->set_rules('calle','Calle','required');
			$this->form_validation->set_rules('numero','Numero','required');
			$this->form_validation->set_rules('codigo_postal','Codigo Postal','required');
			$this->form_validation->set_rules('contacto_emergencia','Contacto Emergencia','required');
			$this->form_validation->set_rules('tel_emergencia','Tel Emergencia','required');
			$this->form_validation->set_rules('parentesco_emergencia','Parentesco Emergencia','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'estado_psicofisico' => $this->input->post('estado_psicofisico'),
					'id_localidad' => $this->input->post('id_localidad'),
					'id_provincia' => $this->input->post('id_provincia'),
					'nombre' => $this->input->post('nombre'),
					'apellido' => $this->input->post('apellido'),
					'fecha_nacimiento' => $this->input->post('fecha_nacimiento'),
					'tel' => $this->input->post('tel'),
					'email' => $this->input->post('email'),
					'calle' => $this->input->post('calle'),
					'numero' => $this->input->post('numero'),
					'codigo_postal' => $this->input->post('codigo_postal'),
					'contacto_emergencia' => $this->input->post('contacto_emergencia'),
					'tel_emergencia' => $this->input->post('tel_emergencia'),
					'parentesco_emergencia' => $this->input->post('parentesco_emergencia'),
                );

                $this->Datos_personales_model->update_dato_personal($id_datos_personales,$params);            
                redirect('datos_personales/index');
            }
            else
            {
				$this->load->model('Localidad_model');
				$data['all_localidades'] = $this->Localidad_model->get_all_localidades();

				$this->load->model('Provincia_model');
				$data['all_provincias'] = $this->Provincia_model->get_all_provincias();

                $data['_view'] = 'datos_personales/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('El dato_personal que esta tratando de editar no existe.');
    } 

    /*
     * Eliminar dato_personal
     */
    function remove($id_datos_personales)
    {
        $dato_personal = $this->Datos_personales_model->get_dato_personal($id_datos_personales);

        //Verificar si el dato_personal existe antes de tratar de eliminarlo.
        if(isset($dato_personal['id_datos_personales']))
        {
            $this->Datos_personales_model->delete_dato_personal($id_datos_personales);
            redirect('datos_personales/index');
        }
        else
            show_error('El dato_personal que esta tratando de eliminar no existe.');
    }
    
}
