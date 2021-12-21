<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainModel extends CI_Model 
{
	public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Kolkata');
    }
    
    // To get data in row by Mahadev, 18-12-2021
    public function getData($tbl, $where)
    {
    	$this->db->select('*');
    	$this->db->from($tbl);
    	$this->db->where($where);
    	$query =$this->db->get();
    	return $query->row_array();
    }
    
    // To get All Data with id by Mahadev, 18-12-2021
    public function getallData($tbl,$where)
    {
        $this->db->select('*');
        $this->db->from($tbl);
        $this->db->where($where);
        $query =$this->db->get();
        return $query->result_array();
    }

     // To get All Data by Mahadev, 20-12-2021
    public function getAllData_1($tbl)
    {
        $this->db->select('*');
        $this->db->from($tbl);
        $query = $this->db->get();
        return $query->result_array();
    } 

     // To Insert Data by Mahadev, 18-12-2021
    public function insertData($tbl, $arr)
    {
    	$this->db->insert($tbl,$arr);
    	return $this->db->insert_id();
    }
    
     // To Edit Data by Mahadev, 18-12-2021
    public function editData($tbl,$where,$arr)
    {
    	$this->db->where($where);
        if($this->db->update($tbl,$arr))
        {
        	return TRUE;
        } 
        else 
        {
            return FALSE;
        }
    }

}
?>