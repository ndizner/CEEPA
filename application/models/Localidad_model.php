<?php
 
class Localidad_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get localidad by id_localidad
     */
    function get_localidad($id_localidad)
    {
        return $this->db->get_where('localidades',array('id_localidad'=>$id_localidad))->row_array();
    }
    
    /*
     * Get all localidades count
     */
    function get_all_localidades_count()
    {
        $this->db->from('localidades');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all localidades
     */
    function get_all_localidades($params = array())
    {
        $this->db->order_by('id_localidad', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('localidades')->result_array();
    }
        
    /*
     * function to add new localidad
     */
    function add_localidad($params)
    {
        $this->db->insert('localidades',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update localidad
     */
    function update_localidad($id_localidad,$params)
    {
        $this->db->where('id_localidad',$id_localidad);
        return $this->db->update('localidades',$params);
    }
    
    /*
     * function to delete localidad
     */
    function delete_localidad($id_localidad)
    {
        return $this->db->delete('localidades',array('id_localidad'=>$id_localidad));
    }
}
