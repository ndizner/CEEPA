<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Condicion_iva_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get condicion_iva by id_cond_iva
     */
    function get_condicion_iva($id_cond_iva)
    {
        return $this->db->get_where('condicion_iva',array('id_cond_iva'=>$id_cond_iva))->row_array();
    }
    
    /*
     * Get all condiciones_iva count
     */
    function get_all_condiciones_iva_count()
    {
        $this->db->from('condicion_iva');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all condiciones_iva
     */
    function get_all_condiciones_iva($params = array())
    {
        $this->db->order_by('id_cond_iva', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('condicion_iva')->result_array();
    }
        
    /*
     * function to add new condicion_iva
     */
    function add_condicion_iva($params)
    {
        $this->db->insert('condicion_iva',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update condicion_iva
     */
    function update_condicion_iva($id_cond_iva,$params)
    {
        $this->db->where('id_cond_iva',$id_cond_iva);
        return $this->db->update('condicion_iva',$params);
    }
    
    /*
     * function to delete condicion_iva
     */
    function delete_condicion_iva($id_cond_iva)
    {
        return $this->db->delete('condicion_iva',array('id_cond_iva'=>$id_cond_iva));
    }
}