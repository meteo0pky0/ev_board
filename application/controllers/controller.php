<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controller extends CI_Controller {
	public function index()
	{
		echo "��Ʈ���Դϴ�.";
		phpinfo();
	}
	public function one($num,$num2){
		echo "one�޼��� �� $num �Ķ���� �Դϴ�. $num2";
	}
}

?>