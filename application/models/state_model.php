<?php

class State_model extends MY_Model {
	function get_states()
	{				$data = array();
			$q = $this->db->get('state');
			foreach ($q->result() as $state)
			{
				$data[] = $state;
			}
			return $data;
	}

}