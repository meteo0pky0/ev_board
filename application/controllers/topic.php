<?php
@header('Content-Type: text/html; charset=utf-8'); //언어셋을 utf-8로 셋팅
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Topic extends CI_Controller {
	//로드될때 생성자가 시작됨
	function __construct(){
			parent::__construct();
			//공용 초기 실행
			$this->load->database();
			$this->load->model('topic_model');
		}
	
	public function index()
	{
		$this->_head();

		$this->load->view('main');
		$this->load->view('footer');
	}
	
	public function get($id){
		$this->_head();
		
		$topic = $this->topic_model->get($id);
		$this->load->helper(array('url', 'HTML', 'korean'));
		$this->load->view('get',array('topic'=>$topic));
		$this->load->view('footer');
	}

	public function add(){
		$this->_head();
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('title','제목','required');
		$this->form_validation->set_rules('description','본문','required');

		if($this->form_validation->run() == FALSE){
			$this->load->view('add');
		}else{
			//위에서 초기에 실행됨$this->load->model('topic_model');
			//$topic_id 리턴값으로 마지막 작성한 아이디값을 가져옴
			$topic_id = $this->topic_model->add($this->input->post('title'),$this->input->post('description'));
			$this->load->helper('url');
			redirect('/topic/get/'.$topic_id);
			//echo $topic_id;
		}
		
		$this->load->view('footer');
	}
	









	//공용사용
    public function _head(){
		$this->load->view('head');
		$topics = $this->topic_model->gets();
		$this->load->view('topic_list',array('topics'=>$topics));
	}




}
