<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index()
	{
		echo "admin main��Ʈ���Դϴ�.";
		//phpinfo();
	}
	public function one($num,$num2){
		echo "one�޼��� �� $num �Ķ���� �Դϴ�. $num2";
	}
}

?>