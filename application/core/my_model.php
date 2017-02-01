<?php

class my_model extends CI_Model {
    const DB_TABLE = 'abstract';
    const DB_TABLE_PK = 'abstract';
    
    /**
     * Create record.
     */
    private function insert() {
        $this->db->insert($this::DB_TABLE, $this);
        $this->{$this::DB_TABLE_PK} = $this->db->insert_id();
    }
    
    public function insert_post($my_array) {
    	$this->db->insert($this::DB_TABLE, $my_array);
//     	$this->{$this::DB_TABLE_PK} = $this->db->insert_id();
    }
    
    /**
     * Update record.
     */
//     public function update() {
//         $this->db->update($this::DB_TABLE, $this, $this::DB_TABLE_PK);
//     }

    public function update($id, $data)
    {
    	// 		echo $id;
    	// 		echo $this->db->update($this::DB_TABLE, $this, "application_id='63'");
    	$this->db->where($this::DB_TABLE_PK, $id);
    	$this->db->update($this::DB_TABLE, $data);

    }
    
    /**
     * Populate from an array or standard class.
     * @param mixed $row
     */
    public function populate($row) {
        foreach ($row as $key => $value) {
            $this->$key = $value;
        }
    }
    
    /**
     * Load from the database.
     * @param int $id
     */
//     public function load($id) {
//         $query = $this->db->get_where($this::DB_TABLE, array(
//             $this::DB_TABLE_PK => $id,
//         ));
//        return $this->populate($query->row());
//     }

    public function load($id)
    {
    	$this->db->where($this::DB_TABLE_PK, $id);
    	$query = $this->db->get($this::DB_TABLE);
    	$row = $query->row();
    	return $data[$this::DB_TABLE] = $row;
    		}
    
    /**
     * Delete the current record.
     */
    public function delete() {
        $this->db->delete($this::DB_TABLE, array(
           $this::DB_TABLE_PK => $this->{$this::DB_TABLE_PK}, 
        ));
        unset($this->{$this::DB_TABLE_PK});
    }
    
    /**
     * Save the record.
     */
    public function save() {
        if (isset($this->{$this::DB_TABLE_PK})) {
            $this->update();
        }
        else {
            $this->insert();
        }
    }
    
    /**
     * Get an array of Models with an optional limit, offset.
     * 
     * @param int $limit Optional.
     * @param int $offset Optional; if set, requires $limit.
     * @return array Models populated by database, keyed by PK.
     */
    public function get($limit = 0, $offset = 0) {
        if ($limit) {
            $query = $this->db->get($this::DB_TABLE, $limit, $offset);
        }
        else {
            $query = $this->db->get($this::DB_TABLE);
        }
        $ret_val = array();
        $class = get_class($this);
        foreach ($query->result() as $row) {
            $model = new $class;
            $model->populate($row);
            $ret_val[$row->{$this::DB_TABLE_PK}] = $model;
        }
        return $ret_val;
    }
    
	public function get_list ($id_name, $id) 
	{
		$data =array();
		$q = $this->db->query('select * from ' . $this::DB_TABLE . ' where ' . $id_name . '=' . $id);
		foreach ($q->result() as $row) 
		{
			$data[] = $row;
		}
		return $data;
	}
    
	public function get_item ($id_name, $id)
		{
		
	    	$this->db->where($id_name, $id);
	    	$query = $this->db->get($this::DB_TABLE);
	    	$row = $query->row();
	    	return $data[$this::DB_TABLE] = $row;
		}
}