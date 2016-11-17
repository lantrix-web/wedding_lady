<?php

// use application\core\Controller;
// use application\model\Profile;

class profileController extends Controller
{
    private $errors = [];

    //Метод, выводящий данные о пользователе на страницу
    public function showUserProfile($id)
    {

        $data['user'] = $this->getProfile($id);

        $this->view->generate('profile', $data);
    }

//    Генерируем вьюху с предупреждением о неактивированном аккаунте
    public function showNotActiveProfile()
    {
        $this->view->generate('NotActiveProfile');
    }

//  Получаем профиль текущего пользователя
    public function getMyProfile($id)
    {
        $model = new Profile();
        $user = $model->getAllAboutProfile($id);
        return $user;
    }

// Метод , которые ВЫВОДИТ данные о текущем пользователе
    public function showMyProfile($id)
    {
        $data['userInfo'] = $this->getMyProfile($id);

        $this->view->generate('myProfile', $data);
    }

    //Получение роли пользователя
    public function getRole($id)
    {
        $role = new Profile();
        $userRole = $role->getUserRole($id);
        if ($userRole) {
            return $userRole;
        } else {
            header('Location:/404');
        }
    }

//    Инициализация
    public function actionIndex($id)
    {

        //Удаление фото
        if(isset($_POST['link'])) {
            $delImg = new Profile();
            $result = $delImg->delImg($_POST['link'], $_POST['id']);

            if($result)
            {
                echo 'success';
            }
            return false;
        }

        //Установка аватара
        if(isset($_POST['photo_id']))
        {

            $ava = new Profile();
            $photoId = preg_replace('/[^0-9]/', '', $_POST['photo_id']);
            $setAvatar = $ava->setAvatar($_POST['user_id'], $photoId);

            if($setAvatar)
            {
                $_SESSION['user']['avatar'] = $_POST['img_src'];
                echo 'success';
            }

            return false;
        }
        //Удаление фото пасспорта
        if(isset($_POST['src']))
        {

            $passport = new Profile();
            $delPassport = $passport->delPassport($_POST['src'], $_POST['id']);

            if($delPassport)
            {
                echo 'success';
            }
            return false;
        }



        $userRole = $this->getRole($id);

        if ($_SESSION['user']['role'] == 'admin') {
            if ($userRole['role'] == 'man') {
                $this->showUserProfile($id);
            } elseif ($userRole['role'] == 'lady') {
                $this->showMyProfile($id);
            }
        } elseif ($_SESSION['user']['role'] == 'lady') {

            if ($userRole['role'] == 'man') {

                $this->showUserProfile($id);
            } elseif ($userRole['role'] == 'lady') {
                if ($_SESSION['user']['user_id'] == $id) {
                    $data['user'] = $this->getMyProfile($id);
//                    echo "<pre>";
//                    print_r($data['user']);
//                    echo "</pre>";
//
//                    die;
                    if (empty($data['user']['profile']['first_name'])) {
                        $this->actionEditUserProfile($id);
                    } elseif ($data['user']['profile']['active'] == 0) {
                        $this->showNotActiveProfile();
                    } else {
                        $this->showMyProfile($id);
                    }
                } else {
                    header('Location:/404');
                }
            }
        } elseif (!isset($_SESSION['user'])) {
            header('Location:/login');
        }
    }

    //Метод получающий данные о пользователе из бд
    public function getProfile($id)
    {

        $model = new Profile();

        $user = $model->getUserInfoById($id);
/*<<<<<<< HEAD
        echo "string";
        if($user == false)
        {
=======*/


        if ($user == false) {
//>>>>>>> origin/profiles
            header('Location:/404');
        }

        return $user;
    }



//    Метод зазгрузки фотографий пользователя
    private function imageUpload()
    {

        for ($i = 0, $length = count($_FILES['image']['name']); $i < $length; $i++) {

            if ($_FILES['image']['error'][$i] != 0) {
                print_r($_FILES['image']['error']);
                print_r($_FILES['image']['size']);

                // Наполняем массив $errors - ключ это имя проблемного файла, а значение код ошибки.
                $this->errors['photo'][$_FILES['image']['name'][$i]] = $_FILES['image']['error'][$i];
                // Пропускаем итерацию:
                continue;
            }


            if ($_FILES['image']['size'][$i] > 3000000) {
                $this->errors['photo'][] = 'Слишком большой файл';
            }

            if (
            !(($_FILES['image']['type'][$i] == 'image/jpeg') || ($_FILES['image']['type'][$i] == 'image/png') || ($_FILES['image']['type'][$i] == 'image/gif') ||
                ($_FILES['image']['type'][$i] == 'image/bmp') || ($_FILES['image']['type'][$i] == 'image/jpg'))
            ) {

                die('image');
                $this->errors['photo'][] = 'Недопустимый формат изображения';
            }


            if (empty($this->errors['photo'])) {

                $fileName = 'images/original/' . md5(microtime()) . '__' . $_FILES['image']['name'][$i];
                move_uploaded_file($_FILES['image']['tmp_name'][$i], $fileName);


                $user_id = $_SESSION['user']['user_id'];
                $model = new Profile();
                $model->uploadPhoto($user_id, '/'.$fileName);
            } else {
                return false;
            }


        }
        return true;
    }




    private function passportUpload()
    {



        for( $i = 0, $length = count( $_FILES['passport']['name'] ); $i <= $length; $i++)
        {


            if( $_FILES['passport']['error'][$i] != 0 )
            {
                echo "<pre>";
                print_r($_FILES['passport']);
                echo "</pre>";

                echo "<br>";
                print_r($_FILES['passport']['size']);
                echo 'here_error';
                die;
                // Наполняем массив $errors - ключ это имя проблемного файла, а значение код ошибки.
                $this->errors['photo'][ $_FILES['passport']['name'][$i] ] = $_FILES['passport']['error'][$i];
                // Пропускаем итерацию:
                continue;
            }


            if($_FILES['passport']['size'][$i] > 3000000)
            {

                die('size error');
                $this->errors['photo'][] = 'Слишком большой файл';
            }


            if (
            !(($_FILES['passport']['type'][$i] == 'image/jpeg') || ($_FILES['passport']['type'][$i] == 'image/png') || ($_FILES['passport']['type'][$i] == 'image/gif') ||
                ($_FILES['passport']['type'][$i] == 'image/bmp') || ($_FILES['passport']['type'][$i] == 'image/jpg'))
            )
            {

                $this->errors['photo'][] = 'Недопустимый формат изображения';
            }

            if(empty($this->errors['photo']))
            {

                $fileName = 'images/passports/'.md5( microtime() ).'__'.$_FILES['passport']['name'][$i];

                move_uploaded_file( $_FILES['passport']['tmp_name'][$i], $fileName);


                $user_id = $_SESSION['user']['user_id'];
                $model = new Profile();
                $model->uploadPassport($user_id, '/'.$fileName);
            }
            else
            {
                return false;
            }


        }
        return true;

    }

    //Метод редактирования данных о пользователе
    public function actionEditUserProfile($id)
    {




        if(($_SESSION['user']['user_id'] == $id) || $_SESSION['user']['role'] == 'admin') {

            $edit = new Profile();

            $data['userInfo'] = $edit->getAllAboutProfile($id);

            if (isset($_POST['edit'])) {



                $firstName = $_POST['first_name'];
                $lastName = $_POST['last_name'];
                $prefMinAge = $_POST['pref_min_age'];
                $prefMaxAge = $_POST['pref_max_age'];
                $height = $_POST['height'];
                $weight = $_POST['weight'];
                $hairColor = $_POST['hair_color'];
                $eyeColor = $_POST['eye_color'];
                $smoker = $_POST['smoker'];
                $religion = $_POST['religion'];
                $childGender = $_POST['child_gender'];
                $childAge = $_POST['child_age'];
                $about = $_POST['about'];
                $hobbie = $_POST['hobbie'];
                $education = $_POST['education'];
                $idealMate = $_POST['ideal_mate'];
                $dreams = $_POST['dreams'];
                $food = $_POST['food'];
                $music = $_POST['music'];
                $season = $_POST['season'];

                $englishSkillLevel = $_POST['english_skill_level'];
                $favorite_gift = $_POST['gift'];

                $otchestvo = $_POST['otchestvo'];
                $maskName = $_POST['mask_name'];
                $aboutUs = $_POST['about_us'];
                $driverLicense = $_POST['driver_licence'];
                $favoriteCity = $_POST['favorite_city'];
                $favoriteMovie = $_POST['favorite_movie'];
                $creed = $_POST['creed'];
                $family = $_POST['family'];
                $alcohol = $_POST['alcohol'];
                $profession = $_POST['profession'];
                $zadiak = $_POST['zadiak'];
                $faceTime = $_POST['face_time'];
                $viber = $_POST['viber'];
                $skype = $_POST['skype'];
                $propAddress = $_POST['prop_address'];
                $propIndex = $_POST['prop_index'];
                $video = $_POST['video'];

                $social['vk'] = $_POST['vk'];
                $social['fb'] = $_POST['fb'];
                $social['inst'] = $_POST['instagram'];

                $phone = $_POST['phone'];

                $childrens_possibility = $_POST['childrens_possibility'];

                /*
                 * Дата рождения
                 */
                $day = $_POST['day'];
                $month = $_POST['month'];
                $year = $_POST['year'];
                $birth = strtotime($year.'-'.$month.'-'.$day);
                /*
                 * Дата рождения
                 */

                $country = $_POST['country'];
                $locale = $_POST['locale'];
                $street = $_POST['street'];
                $zip = $_POST['zip'];
                $email = $_POST['email'];
                $email_optional = $_POST['email_optional'];




                //Установка проверки заполнения необходимых полей
                if(empty($firstName || $lastName || $smoker || $about))
                {
                    $data['errors'] = 'Нужно заполнить все необходимые поля!';
                }


                if(empty($data['errors']))
                {


                    $edit->updateProfile($id,
                        $firstName,
                        $lastName,
                        $prefMinAge,
                        $prefMaxAge,
                        $height,
                        $weight,
                        $hairColor,
                        $eyeColor,
                        $smoker,
                        $religion,
                        $about,
                        $hobbie,
                        $education,
                        $idealMate,
                        $dreams,
                        $food,
                        $music,
                        $season,
                        $englishSkillLevel,
                        $favorite_gift,
                        $otchestvo,
                        $propAddress,
                        $propIndex,
                        $skype,
                        $viber,
                        $faceTime,
                        $zadiak,
                        $profession,
                        $alcohol,
                        $family,
                        $creed,
                        $favoriteMovie,
                        $favoriteCity,
                        $driverLicense,
                        $aboutUs,
                        $maskName,
                        $video,
                        $childrens_possibility,
                        $country,
                        $street,
                        $zip,
                        $email_optional
                    );


                    if(!empty($social))
                    {
                        $edit->setSocial($id, $social);

                    }
                    if(!empty($phone))
                    {

                        $edit->setPhone($id,$phone);
                    }

                    $edit->setUserParams($id, $birth, $locale, $email);



                    if(!empty($childAge)&&!empty($childGender))
                    {

                        $edit->delChildrens($id);
                        $childrens = [];
                        foreach ($childAge as $key => $value)
                        {
                            foreach ($childGender as $g_key => $g_value)
                            {
                                if($key == $g_key)
                                {
                                    $childrens[$g_key][] = $value;
                                    $childrens[$g_key][] = $g_value;
                                }
                            }
                        }
                        foreach ($childrens as $value)
                        {
                            $edit->setChildrens($id, $value[1], $value[0]);
                        }

                    }

                    if(!empty($_FILES['image']['name'][0]))
                    {


                        if(!$this->imageUpload())
                        {
                            $data['errors'] = $this->errors['photo'];
                        }
                    }
                    if(!empty($_FILES['passport']['name'][0]))
                    {

                        if(!$this->passportUpload())
                        {
                            $data['errors'] = $this->errors['photo'];
                        }

                    }

//                    $_SESSION['user']['info'] = $this->getInfoPercent($data);

                    $_SESSION['user']['name'] = $data['userInfo']['profile']['mask_name'];
                    $_SESSION['user']['photo'] = $data['userInfo']['avatar']['img'];
//                    print_r($_SESSION);
//                    die;
//                    $edit->createProfile($firstName, $lastName, $prefMinAge, $prefMaxAge, $height,
//                        $weight, $hairColor, $eyeColor, $country, $smoker,
//                        $religion, $childrens, $childrensPossibility, $languages, $about,
//                        $hobbie, $education, $idealMate, $dreams, $food,
//                        $music, $season, $englishSkillLevel, $guide, $favorite_gift);
//                    if (!empty($childrens) && $childrens == 'Yes') {
//                        $edit->setChildrens($id, $childGender, $childAge);
//                    }
                    header('Location:/profile/'.$id);
                }



            }


            $this->view->generate('editNew', $data);
        }
        else
        {
            header('Location:/404');
        }
    }

}
