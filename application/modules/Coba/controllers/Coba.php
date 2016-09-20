<?php
	
	class Coba extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			
		}
		
		public function index(){
			
			$this->load->view('v_coba');
		}
		
		public function lagi(){
			
			//$file = $_FILES["userfile"]["name"];
			//echo "Ada";
			$this->load->view('v_lagi');
		}
	
	}

