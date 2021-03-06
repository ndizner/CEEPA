<?php
 
class Estado_usuario_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get estado_usuario by id_estado_usuario
     */
    function get_estado_usuario($id_estado_usuario)
    {
        return $this->db->get_where('estado_usuario',array('id_estado_usuario'=>$id_estado_usuario))->row_array();
    }
    
    /*
     * Get all estados_usuario count
     */
    function get_all_estados_usuario_count()
    {
        $this->db->from('estado_usuario');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all estados_usuario
     */
    function get_all_estados_usuario($params = array())
    {
        $this->db->order_by('id_estado_usuario', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('estado_usuario')->result_array();
    }
        
    /*
     * function to add new estado_usuario
     */
    function add_estado_usuario($params)
    {
        $this->db->insert('estado_usuario',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update estado_usuario
     */
    function update_estado_usuario($id_estado_usuario,$params)
    {
        $this->db->where('id_estado_usuario',$id_estado_usuario);
        return $this->db->update('estado_usuario',$params);
    }
    
    /*
     * function to delete estado_usuario
     */
    function delete_estado_usuario($id_estado_usuario)
    {
        return $this->db->delete('estado_usuario',array('id_estado_usuario'=>$id_estado_usuario));
    }
}
