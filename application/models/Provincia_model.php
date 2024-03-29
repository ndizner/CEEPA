<?php
 
class Provincia_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get provincia by id_provincia
     */
    function get_provincia($id_provincia)
    {
        return $this->db->get_where('provincias',array('id_provincia'=>$id_provincia))->row_array();
    }
    
    /*
     * Get all provincias count
     */
    function get_all_provincias_count()
    {
        $this->db->from('provincias');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all provincias
     */
    function get_all_provincias($params = array())
    {
        $this->db->order_by('id_provincia', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('provincias')->result_array();
    }
        
    /*
     * function to add new provincia
     */
    function add_provincia($params)
    {
        $this->db->insert('provincias',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update provincia
     */
    function update_provincia($id_provincia,$params)
    {
        $this->db->where('id_provincia',$id_provincia);
        return $this->db->update('provincias',$params);
    }
    
    /*
     * function to delete provincia
     */
    function delete_provincia($id_provincia)
    {
        return $this->db->delete('provincias',array('id_provincia'=>$id_provincia));
    }
}
