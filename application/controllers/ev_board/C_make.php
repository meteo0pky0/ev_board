<?php
@header('Content-Type: text/html; charset=utf-8'); //언어셋을 utf-8로 셋팅
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_make extends CI_Controller {
	function __construct(){
			parent::__construct();
			$this->load->database();
			$this->load->model('ev_board/M_make');
			$this->load->library('encrypt');
			$make_ck = $this->M_make->index();
	}
	public function index()
	{
		
		//if($make_ck -> Msg_text != "OK"){
			//echo"테이블이 없으면 실행";
			$this->load->view('ev_board/V_head');
			$this->load->view('ev_board/V_admin_make');
			//완료를 누르면 테이블생성후 데이터 삽입 후 로그인페이지로.
			//트렌젝션 실행으로 실폐시 데이터고 테이블이고 싹다 롤벡
			$this->load->view('ev_board/V_footer');
		//}else{
			//테이블 있고 데이터가 있으면 로그인 페이지로 넘어가도록.
		//	echo "여기";
		//}
	}
	public function db_make(){
		//자바스크립트로 pw 확인은 view에서 처리
		$ev_id =  $this -> input -> post('ev_id');
		$ev_pw =  $this -> input -> post('ev_pw');
		$ev_nick =  $this -> input -> post('ev_nick');
		$ev_email =  $this -> input -> post('ev_email');
		$ev_email_last =  $this -> input -> post('ev_email_last');
		$ev_email_all = $ev_email.".".$ev_email_last;
		
		$this-> encrypt -> encode($ev_pw);
		//if($make_ck -> Msg_text != "OK"){
		//$this->M_make->add($ev_id,$ev_pw,$ev_nick,$ev_email_all);
		//}

		//$plaintext_string = $this->encrypt->decode($aa);
		
		//데이터베이스생성 index내용 db 입력
		//완료메세지후 로컬로이동
	}
}

?>