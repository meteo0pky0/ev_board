<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controller extends CI_Controller {
	public function index()
	{
		echo "컨트롤페이지 입니다."; 
		phpinfo();
	}
	public function one($num,$num2){
		echo "one메소드의  $num 파라미터  $num2";
	}
}

?>