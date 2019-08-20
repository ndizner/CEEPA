<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Tipo_usuario_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get tipo_usuario by id_tipo_usuario
     */
    function get_tipo_usuario($id_tipo_usuario)
    {
        return $this->db->get_where('tipo_usuario',array('id_tipo_usuario'=>$id_tipo_usuario))->row_array();
    }
    
    /*
     * Get all tipo_usuarios count
     */
    function get_all_tipo_usuarios_count()
    {
        $this->db->from('tipo_usuario');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all tipo_usuarios
     */
    function get_all_tipo_usuarios($params = array())
    {
        $this->db->order_by('id_tipo_usuario', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('tipo_usuario')->result_array();
    }
        
    /*
     * function to add new tipo_usuario
     */
    function add_tipo_usuario($params)
    {
        $this->db->insert('tipo_usuario',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update tipo_usuario
     */
    function update_tipo_usuario($id_tipo_usuario,$params)
    {
        $this->db->where('id_tipo_usuario',$id_tipo_usuario);
        return $this->db->update('tipo_usuario',$params);
    }
    
    /*
     * function to delete tipo_usuario
     */
    function delete_tipo_usuario($id_tipo_usuario)
    {
        return $this->db->delete('tipo_usuario',array('id_tipo_usuario'=>$id_tipo_usuario));
    }
}
