<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Usuario_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get usuario by id
     */
    function get_usuario($id)
    {
        return $this->db->get_where('usuario',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all usuario
     */
    function get_all_usuario()
    {
        return $this->db->get('usuario')->result_array();
    }
    
    /*
     * function to add new usuario
     */
    function add_usuario($params)
    {
        $this->db->insert('usuario',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update usuario
     */
    function update_usuario($id,$params)
    {
        $this->db->where('id',$id);
        $response = $this->db->update('usuario',$params);
        if($response)
        {
            return "usuario updated successfully";
        }
        else
        {
            return "Error occuring while updating usuario";
        }
    }
    
    /*
     * function to delete usuario
     */
    function delete_usuario($id)
    {
        $response = $this->db->delete('usuario',array('id'=>$id));
        if($response)
        {
            return "usuario deleted successfully";
        }
        else
        {
            return "Error occuring while deleting usuario";
        }
    }
}