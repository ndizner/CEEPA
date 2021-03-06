<?php
 
class Datos_personales_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get dato_personal by id_datos_personales
     */
    function get_dato_personal($id_datos_personales)
    {
        return $this->db->get_where('datos_personales',array('id_datos_personales'=>$id_datos_personales))->row_array();
    }
    
    /*
     * Get all datos_personales count
     */
    function get_all_datos_personales_count()
    {
        $this->db->from('datos_personales');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all datos_personales
     */
    function get_all_datos_personales($params = array())
    {
        $this->db->order_by('id_datos_personales', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('datos_personales')->result_array();
    }
        
    /*
     * function to add new dato_personal
     */
    function add_dato_personal($params)
    {
        $this->db->insert('datos_personales',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update dato_personal
     */
    function update_dato_personal($id_datos_personales,$params)
    {
        $this->db->where('id_datos_personales',$id_datos_personales);
        return $this->db->update('datos_personales',$params);
    }
    
    /*
     * function to delete dato_personal
     */
    function delete_dato_personal($id_datos_personales)
    {
        return $this->db->delete('datos_personales',array('id_datos_personales'=>$id_datos_personales));
    }
}
