<?php
	
	class change extends CI_Controller{
		
		public function __construct(){
			
			parent::__construct();
			$this->load->model('m_change');
		}
		
		public function index(){
		
			$this->load->view('v_change');
		
		}
		
		public function display(){
			
			$data = array(
				
				'jum_dokter' => $this->m_change->get_jum_dokter(),
			
			);
			
			$this->load->view('v_display', $data);
		
		}
		
		public function jum_dokter(){
			
			echo $this->m_change->get_jum_dokter();
		
		}
	}

?>