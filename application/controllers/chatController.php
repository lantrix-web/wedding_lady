<?php
// use application\core\Controller;
// use application\model\Chat;
class chatController extends Controller
{
	public function actionDialog($id){
		$model = new Chat();
		$userinfo = $model->getUserInfo($id);
		//$soc = $model->Socket();
		$this->view->generate('chat', $userinfo);
		print_r($name);
		//echo $soc;
	}
}

?>