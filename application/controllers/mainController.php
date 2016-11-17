<?php

 // use application\core\Controller;
 // use application\model\registration;
//$smth = new application\core\Controller();

// echo $className;
class mainController extends Controller
{



    public function actionIndex()
    {
        if(isset($_SESSION['user']) && $_SESSION['user']['role'] == 'lady')
        {
            header('Location:/profile/'.$_SESSION['user']['user_id']);
        }
        $this->view->generate('main_view');
    }

    public function action404()
    {
        $this->view->generate('404');
    }


}