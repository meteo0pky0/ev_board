<?php
	class M_make extends CI_model{
		function __construct() {
		parent::__construct();
		$this->load->library('encrypt');
		}

		public function index(){
			//row() 로 한개의 자료만 가저옴
			//return $this -> db -> query("CHECK TABLE ev_member") -> result();
			//return $this -> db -> query("SHOW TABLES LIKE 'topic'") -> result_array();
			//ev_member 테이블이있는지 체크
			return $this -> db -> query("CHECK TABLE ev_member") -> row();
		}

		public function add($ev_id,$ev_pw,$ev_nick,$ev_email_all){
			//트렌젝션 실행
			$this->db->trans_start();
			/*
			$this->db->query("
						CREATE  TABLE IF NOT EXISTS .`ev_member` (
						  `ev_num` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
						  `ev_id` VARCHAR(80) NOT NULL ,
						  `ev_pw` VARCHAR(60) NOT NULL ,
						  `ev_nick` VARCHAR(20) NOT NULL ,
						  `ev_email` VARCHAR(250) NOT NULL ,
						  `ev_make_time` DATETIME NOT NULL ,
						  `ev_update_time` DATETIME NOT NULL ,
						  PRIMARY KEY (`ev_num`) )
						  ");
			*/
			$data = array(
				'ev_id' => $ev_id,
				'ev_pw' => $ev_pw,
				'ev_nick' => $ev_nick,
				'ev_email' => $ev_email_all
				);
			$this->db->set('ev_make_time', 'now()', false);
			$this->db->set('ev_update_time', 'now()', false);
			$this->db->insert('ev_member', $data);
				
			$this->db->trans_complete(); 
			//트렌젝션 실패시 메시지
			if ($this->db->trans_status() === FALSE)
			{
				 // generate an error... or use the log_message() function to log your error
				 echo "쿼리실패";
			} 
		}	


	}
?>