<?php


// use application\core\Controller;
// use application\model\registration;

class userController extends Controller
{

    public function __construct()
    {
        parent::__construct();

        if(isset($_SESSION['user']) && $_SESSION['user']['role'] == 'lady')
        {
            header('Location:/profile/'.$_SESSION['user']['user_id']);
        }
    }

    public function actionRegister()
    {
        //авторизация
//        if(isset($_POST['auth_submit'], $_POST['auth_login'], $_POST['auth_password']))
//        {
//            if($this->login($_POST['auth_login'], $_POST['auth_password']))
//            {
//                if($_SESSION['user']['role'] == 'admin')
//                {
//                    header('Location:/admin');
//                }
//                else
//                {
//                    header('Location:/profile/'.$_SESSION['user']['user_id']);
//
//                }
//            }
//            else
//            {
//                $errors[] = 'Неверный логин или пароль';
//            }
//        }




        $errors = [];
        //Регистрация
        if(isset($_POST['username'], $_POST['password'], $_POST['email'], $_POST['city']))
        {

            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $city = $_POST['city'];
            $day = $_POST['day'];
            $month = $_POST['month'];
            $year = $_POST['year'];
            $gender = 'lady';
            $time = time();

            


            $model = new registration();

            if(!$model->checkName($username))
            {
                $errors[] = 'Имя не должно быть короче 2х символов';
            }

            if(!$model->checkEmail($email))
            {
                $errors[] = 'Неправильный email';
            }

            if(!$model->checkPassword($password))
            {
                $errors[] = 'Пароль не должен быть короче 6ти символов';
            }

            if(!$model->checkCity($city))
            {
                $errors[] = 'Такого города не существует';
            }

            if($model->checkEmailExists($email))
            {
                $errors['email'] = 'Такой email уже существует';
            }

            if($model->checkLoginExists($username))
            {
                $errors['login'] = 'Такой логин уже существует';
            }

            if(empty($_POST['day']))
            {
                $errors[] = 'Select day!';
            }

            if(empty($_POST['month']))
            {
                $errors[] = 'Select month!';
            }

            if(empty($_POST['year']))
            {
                $errors[] = 'Select year';
            }




            if(empty($errors))
            {
                $date = strtotime($year.'-'.$month.'-'.$day);

                $model->register($username, $password, $email, $city, $time, $date, $gender);

                echo 'success';
                return false;

            }
            else
            {
                echo json_encode($errors, JSON_UNESCAPED_UNICODE, JSON_FORCE_OBJECT);
                return false;
            }





        }



        $this->view->generate('index', $errors);
    }


    public function login($login, $password)
    {



            $model = new registration();
            if($user = $model->checkUserData($login, $password))
            {
                $model->userAuth($user);
                return true;
            }
            else
            {
                return false;
            }


    }
    public function actionLogout()
    {
        session_destroy();
        header('Location:main');
    }

    public function actionLogin()
    {

        /*
         * Ajax проверка логина и пароля
         */
        if(isset($_POST['auth_login'], $_POST['auth_password']))
        {

            if($this->login($_POST['auth_login'], $_POST['auth_password']))
            {
                if($_SESSION['user']['role'] == 'admin')
                {
                    echo '/admin';
                    return false;
                }
                else
                {
                    echo '/profile/'.$_SESSION['user']['user_id'];
                    return false;
                }
            }
            else
            {
                echo 'Неверный логин или пароль!';
                return false;
            }

        }




 $errors = [];

        if(isset($_POST['auth_submit'], $_POST['auth_login'], $_POST['auth_password']))
        {
            if($this->login($_POST['auth_login'], $_POST['auth_password']))
            {
                if($_SESSION['user']['role'] == 'admin')
                {
                    header('Location:/admin');
                }
                else
                {
                    header('Location:/profile/'.$_SESSION['user']['user_id']);
                }
            }
            else
            {
                $errors[] = 'Неверный логин или пароль';
            }


        }

            $this->view->generate('login', $errors);
    }

}