<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Carrera_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get carrera by id_carrera
     */
    function get_carrera($id_carrera)
    {
        return $this->db->get_where('carreras',array('id_carrera'=>$id_carrera))->row_array();
    }
    
    /*
     * Get all carreras count
     */
    function get_all_carreras_count()
    {
        $this->db->from('carreras');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all carreras
     */
    function get_all_carreras($params = array())
    {
        $this->db->order_by('id_carrera', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('carreras')->result_array();
    }
        
    /*
     * function to add new carrera
     */
    function add_carrera($params)
    {
        $this->db->insert('carreras',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update carrera
     */
    function update_carrera($id_carrera,$params)
    {
        $this->db->where('id_carrera',$id_carrera);
        return $this->db->update('carreras',$params);
    }
    
    /*
     * function to delete carrera
     */
    function delete_carrera($id_carrera)
    {
        return $this->db->delete('carreras',array('id_carrera'=>$id_carrera));
    }
}
