<?php

class M_Random extends CI_Model{

	private $table = 'tbl_random';

	public function __construct()
    {
        parent::__construct();
    }

	public function insert($data){
        $this->db->insert($this->table,$data);
    }

    public function getAllData(){
        $this->db->order_by('randomNumber', 'DESC');
        $query =  $this->db->get($this->table);

        return $query->result();
    }

    
	public function getDataByCriteria($criteria,$limit=""){
    	$query = $this->db->get_where($this->table,$criteria);
    	return $query->result();
    }

    public function update($data,$criteria){
        $this->db->update($this->table,$data,$criteria);
    }

	public function delete($criteria){
		$this->db->delete($this->table,$criteria);
	}
	
    public function __destruct() {
		$this->db->close();
   	}

    public function getDistinctGroup(){
        $this->db->select("groupName");
        $this->db->distinct();
        $query = $this->db->get($this->table);
        return $query->result();
    }

     public function getLastQuery(){
        return $this->db->last_query();
    }

}