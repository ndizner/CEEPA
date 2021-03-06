<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Profesores_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get profesor by id_profesores
     */
    function get_profesor($id_profesores)
    {
        return $this->db->get_where('profesores',array('id_profesores'=>$id_profesores))->row_array();
    }
    
    /*
     * Get all profesores count
     */
    function get_all_profesores_count()
    {
        $this->db->from('profesores');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all profesores
     */
    function get_all_profesores($params = array())
    {
        $this->db->order_by('id_profesores', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('profesores')->result_array();
    }
        
    /*
     * function to add new profesor
     */
    function add_profesor($params)
    {
        $this->db->insert('profesores',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update profesor
     */
    function update_profesor($id_profesores,$params)
    {
        $this->db->where('id_profesores',$id_profesores);
        return $this->db->update('profesores',$params);
    }
    
    /*
     * function to delete profesor
     */
    function delete_profesor($id_profesores)
    {
        return $this->db->delete('profesores',array('id_profesores'=>$id_profesores));
    }
}
