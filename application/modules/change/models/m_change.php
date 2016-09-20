<?php
	
	class m_change extends CI_Model{
		
		public function get_jum_dokter(){
			
			$result = $this->db->get('tb_dokter');
			return $result->num_rows();
		}
	
	}

?>