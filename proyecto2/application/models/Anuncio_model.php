<?php
/* 
 * Generated by CRUDigniter v2.3 Beta 
 * www.crudigniter.com
 */
 
class Anuncio_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get anuncio by id
     */
    function get_anuncio($id)
    {
        return $this->db->get_where('anuncio',array('id'=>$id))->row_array();
    }
    
    /*
     * Get all anuncio
     */
    function get_all_anuncio()
    {
        return $this->db->get('anuncio')->result_array();
    }
    
    /*
     * function to add new anuncio
     */
    function add_anuncio($params)
    {
        $this->db->insert('anuncio',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update anuncio
     */
    function update_anuncio($id,$params)
    {
        $this->db->where('id',$id);
        $response = $this->db->update('anuncio',$params);
        if($response)
        {
            return "anuncio updated successfully";
        }
        else
        {
            return "Error occuring while updating anuncio";
        }
    }
    
    /*
     * function to delete anuncio
     */
    function delete_anuncio($id)
    {
        $response = $this->db->delete('anuncio',array('id'=>$id));
        if($response)
        {
            return "anuncio deleted successfully";
        }
        else
        {
            return "Error occuring while deleting anuncio";
        }
    }
}
