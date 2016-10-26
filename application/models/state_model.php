<?php

class State_model extends MY_Model {
	function get_states()
	{				$data = [];
// 			$this->db->where('name', "Alabama");
			$q = $this->db->get('state');
			foreach ($q->result() as $state)
			{
				$data[] = $state;
			}
// 			echo "<pre>";
// 			var_dump($data);
// 			echo "</pre>";
// 	$q = $this->db->get_where('goal',array('inactive' => 0));
// 		foreach ($q->result() as $goal) {
// 			$data[] = $goal;
// 		}
			return $data;
	}

}