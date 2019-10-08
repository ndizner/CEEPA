<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Provincias_model extends CI_Model
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
     * Get all provincias
     */
    function get_all_provincias()
    {
        $this->db->order_by('id_provincia', 'desc');
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
