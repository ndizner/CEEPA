<?php
 
class Condicion_venta_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get condicion_venta by id_cond_venta
     */
    function get_condicion_venta($id_cond_venta)
    {
        return $this->db->get_where('condicion_venta',array('id_cond_venta'=>$id_cond_venta))->row_array();
    }
    
    /*
     * Get all condiciones_venta count
     */
    function get_all_condiciones_venta_count()
    {
        $this->db->from('condicion_venta');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all condiciones_venta
     */
    function get_all_condiciones_venta($params = array())
    {
        $this->db->order_by('id_cond_venta', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('condicion_venta')->result_array();
    }
        
    /*
     * function to add new condicion_venta
     */
    function add_condicion_venta($params)
    {
        $this->db->insert('condicion_venta',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update condicion_venta
     */
    function update_condicion_venta($id_cond_venta,$params)
    {
        $this->db->where('id_cond_venta',$id_cond_venta);
        return $this->db->update('condicion_venta',$params);
    }
    
    /*
     * function to delete condicion_venta
     */
    function delete_condicion_venta($id_cond_venta)
    {
        return $this->db->delete('condicion_venta',array('id_cond_venta'=>$id_cond_venta));
    }
}
