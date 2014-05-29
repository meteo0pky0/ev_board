<?php
	class Topic_model extends CI_model{
		function __construct(){
			parent::__construct();
		}

		public function gets(){
			return $this -> db -> query('Select * from topic') -> result();
		}

		public function get($topic_id){
			$this->db->select('id');
			$this->db->select('title');
			$this->db->select('description');
			$this->db->select('UNIX_TIMESTAMP(created) as created');
			return $this -> db -> get_where('topic', array('id' => $topic_id)) -> row();  //엑티브 레코드 (이식성이좋음) mysql ,오라클등 db를 마음데로 이동가능
			//row() 로 한개의 자료만 가저옴
			//return $this -> db -> query('Select * from topic where id ='.$topic_id);
		}

		public function add($title, $description){
			$this->db->set('created','now()',false);
			$this->db->insert('topic',array(
			'title' => 	$title,
			'description' => $description
			));
			return $this->db->insert_id();
			//echo $this->db->list_query();
			
		}
	}
?>