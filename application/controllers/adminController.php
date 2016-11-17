<?php


use application\core\Controller;
use application\model\Profile;
use application\model\admin;

class adminController extends Controller
{

    public function __construct()
    {
        parent::__construct();
        if($_SESSION['user']['role'] != 'admin')
        {
            header('Location:404');
        }
    }


    public function actionIndex()
    {

        $data['newUsers'] = $this->getNewUsers();
        $data['usersList'] = $this->getUsers();

        $this->view->generate('dashboard', $data);
    }

    private function getNewUsers()
    {
        $model = new admin();
        $newUsers = $model->getCountNewUsers();

        return $newUsers;
    }

    private function getUsers()
    {
        $model = new admin();
        $usersList['mans'] = $model->getUsers('man');
        $usersList['ladies'] = $model->getUsers('lady');

        return $usersList;
    }

//    public function actionEditUserProfile($id)
//    {
//        $edit = new Profile();
//        $data['userInfo'] = $edit->getUserInfoById($id);
//
//        if(isset($_POST['edit']))
//        {
//            $firstName              = $_POST['first_name'];
//            $lastName               = $_POST['last_name'];
//            $prefMinAge             = $_POST['pref_min_age'];
//            $prefMaxAge             = $_POST['pref_max_age'];
//            $height                 = $_POST['height'];
//            $weight                 = $_POST['weight'];
//            $hairColor              = $_POST['hair_color'];
//            $eyeColor               = $_POST['eye_color'];
//            $country                = $_POST['country'];
//            $smoker                 = $_POST['smoker'];
//            $religion               = $_POST['religion'];
//            $childrens              = $_POST['childrens'];
//            $childName              = $_POST['child_name'];
//            $childGender            = $_POST['child_gender'];
//            $childAge               = $_POST['child_age'];
//            $childrensPossibility   = $_POST['chlidrens_possibility'];
//            $languages              = $_POST['languages'];
//            $about                  = $_POST['about'];
//            $hobbie                 = $_POST['hobbie'];
//            $education              = $_POST['education'];
//            $idealMate              = $_POST['ideal_mate'];
//            $dreams                 = $_POST['dreams'];
//            $food                   = $_POST['food'];
//            $music                  = $_POST['music'];
//            $season                 = $_POST['season'];
//
//            $englishSkillLevel      = $_POST['english_skill_level'];
//            $guide                  = $_POST['guide'];
//            $favorite_gift          = $_POST['gift'];
//
//
//            $edit->updateProfile($id,
//                $firstName,$lastName,$prefMinAge,$prefMaxAge,$height,
//                $weight,$hairColor,$eyeColor,$country,$smoker,
//                $religion,$childrens,$childrensPossibility,$languages,$about,
//                $hobbie,$education,$idealMate,$dreams,$food,
//                $music,$season,$englishSkillLevel,$guide,$favorite_gift
//            );
//            if(!empty($childrens)&&$childrens == 'Yes')
//            {
//                $edit->setChildrens($id, $childName, $childGender, $childAge);
//            }
//
//        }
//
//
//
//        $this->view->generate('edit',$data);
//    }




}