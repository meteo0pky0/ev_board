<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controller extends CI_Controller {
	public function index()
	{
		echo "컨트롤입니다.";
		phpinfo();
	}
	public function one($num,$num2){
		echo "one메서드 의 $num 파라미터 입니다. $num2";
	}
}

?>