<?php
require_once('lib/websockets.php');
// use application\core\Controller;
// use application\model\Chat;


class echoServer extends WebSocketServer {
  //protected $maxBufferSize = 1048576; //1MB... overkill for an echo server, but potentially plausible for other applications.
  
  protected function process ($user, $message) {
    date_default_timezone_set("Europe/Kiev"); 
    $date = date('Y-m-d');
    $time = date('H:i:s');
    $obj = ['user_from'=>$user->from, 'time'=>$time, 'txt'=>$message];
    $messageJSON = json_encode([(object)$obj], JSON_UNESCAPED_UNICODE); 
    foreach ($this->dialogs as $dialog => $users_arr){
              if($dialog == $user->dialog){
                foreach($users_arr as $send_to_user){
                  $this->send($send_to_user,$messageJSON);
                }
              }
            }  
    $this->saveMessage($date,$time,$user->from,$user->to,$message);
    // echo $messageJSON;
    //  die();
  }
  
  protected function connected ($user) {
    $chat_model = new Chat();
    $dialog = $chat_model->getDialog($user->from, $user->to);    
    $jsn = json_encode($dialog, JSON_UNESCAPED_UNICODE);
    $this->send($user,$jsn);
  }
  
  protected function closed ($user) {
    // Do nothing: This is where cleanup would go, in case the user had any sort of
    // open files or other objects associated with them.  This runs after the socket 
    // has been closed, so there is no need to clean up the socket itself here.
  }
}

class serverController extends Controller {
  public function actionResponce(){  

    $server = new echoServer("uk.lantrix.info","8889");
    try {
      $server->run();
    }
    catch (Exception $e) {
      $server->stdout($e->getMessage());
    }


  }
}

