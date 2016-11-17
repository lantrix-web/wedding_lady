<?php

// namespace application\model;

// use application\core\Model;

class Profile extends Model
{

    public function getUserRole($id)
    {
        $sql = 'SELECT `role` FROM `users` WHERE `user_id` = :id';

        $query = $this->db;
        $result = $query->prepare($sql);
        $result->bindParam(':id', $id);
        $result->execute();
        $userInfo = $result->fetch(\PDO::FETCH_ASSOC);

        if($userInfo)
        {
            return $userInfo;
        }
        else
        {
            return false;
        }


    }


    public function checkUserProfile($id)
    {
        $sql = 'SELECT * FROM `ladies` WHERE `user_id` = :id';

        $query = $this->db;
        $result = $query->prepare($sql);
        $result->bindParam(':id', $id);
        $result->execute();
        if($result->fetch())
        {
            return true;
        }
        else
        {
            return false;
        }

    }

//    public function createProfile($firstName,$lastName,$prefMinAge, $prefMaxAge, $height,
//                                  $weight, $hairColour, $eyeColor, $country, $smoker,
//                                  $religion, $childrens, $childrenPossibility, $languages, $about,
//                                  $hobbie, $education, $idealMate, $dreams, $favoriteFood,
//                                  $favoriteMusic, $favoriteSeason, $englishSkillLevel, $guide, $favoriteGifts)
//    {
//        $sql = 'INSERT INTO `ladies` (
//          `first_name`, `last_name`, `pref_min_age`, `pref_max_age`, `height`,
//          `weight`, `hair_colour`, `eye_color`, `country`, `smoker`, `religion`,
//          `childrens`, `children_possibility`, `languages`, `about`, `hobbie`,
//          `education`, `ideal_mate`, `dreams`, `favorite_food`, `favorite_music`,
//          `favorite_season`, `english_skill_level`, `guide`, `favorite_gifts`)
//          VALUES
//          (:first_name, :last_name, :pref_min_age, :pref_max_age, :height,
//           :weight, :hair_colour, :eye_color, :country, :smoker,
//           :religion, :childrens, :children_possibility, :languages, :about,
//           :hobbie, :education, :ideal_mate, :dreams, :favorite_food,
//           :favorite_music, :favorite_season, :english_skill_level, :guide, :favorite_gifts)';
//
//        $query = $this->db;
//        $result = $query->prepare($sql);
//
//        $result->bindParam(':first_name', $firstName);
//        $result->bindParam(':last_name', $lastName);
//        $result->bindParam(':pref_min_age', $prefMinAge);
//        $result->bindParam(':pref_max_age', $prefMaxAge);
//        $result->bindParam(':height', $height);
//        $result->bindParam(':weight', $weight);
//        $result->bindParam(':hair_colour', $hairColour);
//        $result->bindParam(':eye_color', $eyeColor);
//        $result->bindParam(':country', $country);
//        $result->bindParam(':smoker', $smoker);
//        $result->bindParam(':religion', $religion);
//        $result->bindParam(':childrens', $childrens);
//        $result->bindParam(':children_possibility', $childrenPossibility);
//        $result->bindParam(':languages', $languages);
//        $result->bindParam(':about', $about);
//        $result->bindParam(':hobbie', $hobbie);
//        $result->bindParam(':education', $education);
//        $result->bindParam(':ideal_mate', $idealMate);
//        $result->bindParam(':dreams', $dreams);
//        $result->bindParam(':favorite_food', $favoriteFood);
//        $result->bindParam(':favorite_music', $favoriteMusic);
//        $result->bindParam(':favorite_season', $favoriteSeason);
//
//        $result->bindParam(':english_skill_level', $englishSkillLevel);
//        $result->bindParam(':guide', $guide);
//        $result->bindParam(':favorite_gifts', $favoriteGifts);
//
//
//        $result->execute();
//
//
//
//
//    }
    public function setUserParams($id, $birth, $locale, $email)
    {
        $sql = '
            UPDATE `users` 
            SET `locale` = :locale,
            `email` = :email,
            `birth` = :birth
            WHERE `user_id` = :id
        ';
        $query = $this->db;

        $result = $query->prepare($sql);
        $result->bindParam(':locale', $locale);
        $result->bindParam(':email', $email);
        $result->bindParam(':birth', $birth);
        $result->bindParam(':id', $id);
        if($result->execute())
        {
            return true;
        }
        else
        {
            echo "\n PDO::errorInfo(): \n";
            print_r($result->errorInfo());
            return false;
        }
    }

    public function updateProfile($id,$firstName,$lastName,$prefMinAge, $prefMaxAge, $height,
                                  $weight, $hairColour, $eyeColor, $smoker,
                                  $religion, $about, $hobbie, $education, $idealMate,
                                  $dreams, $favoriteFood, $favoriteMusic, $favoriteSeason, $englishSkillLevel,
                                  $favoriteGifts,
                                  $otchesvto, $propAddress,
                                  $propIndex, $skype, $viber, $faceTime, $zadiak, $profession,
                                  $alcohol, $family, $creed, $favoriteMovie,
                                  $favoriteCity, $driverLicense, $aboutUs, $maskName, $video, $childrens_possibility, $country, $street, $zip, $email_optional)
    {

        $sql = '
            UPDATE `ladies`
            SET `first_name` = :firstName, 
            `last_name` = :lastName, 
            `pref_min_age` = :pref_min_age, 
            `pref_max_age` = :pref_max_age, 
            `height` = :height, 
            `weight` = :weight, 
            `hair_colour` = :hair_colour, 
            `eye_color` = :eye_color, 
            `smoker` = :smoker, 
            `religion` = :religion, 
            `about` = :about, 
            `hobbie` = :hobbie, 
            `education` = :education, 
            `ideal_mate` = :ideal_mate, 
            `dreams` = :dreams, 
            `favorite_food` = :favorite_food, 
            `favorite_music` = :favorite_music, 
            `favorite_season` = :favorite_season, 
            `english_skill_level` = :english_skill_level, 
            `favorite_gifts` = :favorite_gifts,
            `otchestvo` = :otchestvo,
            `prop_address` = :prop_address,
            `prop_index` = :prop_index,
            `skype` = :skype,
            `viber` = :viber,
            `face_time` = :face_time,
            `zadiak` = :zadiak,
            `profession` = :profession,
            `alcohol` = :alcohol,
            `family` = :family,
            `creed` = :creed,
            `favorite_movie` = :favorite_movie,
            `favorite_city` = :favorite_city,
            `driver_license` = :driver_license,
            `about_us` = :about_us,
            `mask_name` = :mask_name,
            `video` = :video,
            `childrens_possibility` = :childrens_possibility,
            `country` = :country,
            `street` = :street,
            `zip` = :zip,
            `email_optional` = :email_optional
            WHERE `id` = :id
        ';

        $query = $this->db;

        $result = $query->prepare($sql);
        $result->bindParam(':id',$id);
        $result->bindParam(':firstName', $firstName);
        $result->bindParam(':lastName', $lastName);
        $result->bindParam(':pref_min_age', $prefMinAge);
        $result->bindParam(':pref_max_age', $prefMaxAge);
        $result->bindParam(':height', $height);
        $result->bindParam(':weight', $weight);
        $result->bindParam(':hair_colour', $hairColour);
        $result->bindParam(':eye_color', $eyeColor);
        $result->bindParam(':smoker', $smoker);
        $result->bindParam(':religion', $religion);
        $result->bindParam(':about', $about);
        $result->bindParam(':hobbie', $hobbie);
        $result->bindParam(':education', $education);
        $result->bindParam(':ideal_mate', $idealMate);
        $result->bindParam(':dreams', $dreams);
        $result->bindParam(':favorite_food', $favoriteFood);
        $result->bindParam(':favorite_music', $favoriteMusic);
        $result->bindParam(':favorite_season', $favoriteSeason);

        $result->bindParam(':english_skill_level', $englishSkillLevel);
        $result->bindParam(':favorite_gifts', $favoriteGifts);

        $result->bindParam(':otchestvo', $otchesvto);
        $result->bindParam(':prop_address', $propAddress);
        $result->bindParam(':prop_index', $propIndex);
        $result->bindParam(':skype', $skype);
        $result->bindParam(':viber', $viber);
        $result->bindParam(':face_time', $faceTime);
        $result->bindParam(':zadiak', $zadiak);
        $result->bindParam(':profession', $profession);
        $result->bindParam(':alcohol', $alcohol);
        $result->bindParam(':family', $family);
        $result->bindParam(':creed', $creed);
        $result->bindParam(':favorite_movie', $favoriteMovie);
        $result->bindParam(':favorite_city', $favoriteCity);
        $result->bindParam(':driver_license', $driverLicense);
        $result->bindParam(':about_us', $aboutUs);
        $result->bindParam(':mask_name', $maskName);
        $result->bindParam(':video', $video);

        $result->bindParam(':childrens_possibility', $childrens_possibility);

        $result->bindParam(':country', $country);
        $result->bindParam(':street', $street);
        $result->bindParam(':zip', $zip);
        $result->bindParam(':email_optional', $email_optional);

        if($result->execute())
        {
            return true;
        }
        else
        {
            echo "\n PDO::errorInfo(): \n";
            print_r($result->errorInfo());
            return false;
        }


    }

    public function setSocial($id, array $social)
    {

        $sql = "DELETE FROM `social` WHERE `user_id` = :id";
        $query = $this->db;
        $result = $query->prepare($sql);
        $result->bindParam(':id', $id);

        $result->execute();


        if(!empty($social['vk']))
        {
            $sql = "INSERT INTO `social` (`user_id`, `link`, `name`) VALUES (:id, :link, 'vk')";

            $result = $query->prepare($sql);
            $result->bindParam(':id', $id);
            $result->bindParam(':link', $social['vk']);

            $result->execute();
        }
        if(!empty($social['fb']))
        {
            $sql = "INSERT INTO `social` (`user_id`, `link`, `name`) VALUES (:id, :link, 'fb')";

            $result = $query->prepare($sql);
            $result->bindParam(':id', $id);
            $result->bindParam(':link', $social['fb']);

            $result->execute();
        }
        if(!empty($social['inst']))
        {
            $sql = "INSERT INTO `social` (`user_id`, `link`, `name`) VALUES (:id, :link, 'inst')";

            $result = $query->prepare($sql);
            $result->bindParam(':id', $id);
            $result->bindParam(':link', $social['inst']);

            $result->execute();
        }
    }

    public function setPhone($id, $phone)
    {
        $query = $this->db;

        $del_sql = "DELETE FROM `phones` WHERE `id` = :id";
        $result = $query->prepare($del_sql);
        $result->bindParam(':id', $id);
        $result->execute();

        foreach ($phone as $number)
        {
            $sql = "INSERT INTO `phones` (`id`, `phone`) VALUES (:id, :number)";
            $result = $query->prepare($sql);
            $result->bindParam(':id', $id);
            $result->bindParam(':number', $number);
            $result->execute();
        }

    }


    public function setAvatar($user_id, $avatar_id)
    {
        $del_sql = "DELETE FROM `user_avatars` WHERE `user_id` = :user_id";

        $query = $this->db;
        $result = $query->prepare($del_sql);
        $result->bindParam(":user_id", $user_id);
        $result->execute();

        $insert_sql = "INSERT INTO `meeting`.`user_avatars` (`user_id`, `avatar_id`) VALUES (:user_id, :avatar_id)";

        $result = $query->prepare($insert_sql);
        $result->bindParam(':user_id', $user_id);
        $result->bindParam(':avatar_id', $avatar_id);
        if($result->execute())
        {

            return true;

        }
        else
        {
            return false;
        }







    }

    public function delImg($link, $id)
    {
        $sql = 'DELETE FROM `user_photos` WHERE `user_id` = :id AND `img` = :link';

        $query = $this->db;

        $result = $query->prepare($sql);
        $result->bindParam(":id", $id);
        $result->bindParam(":link", $link);
        $result->execute();

        $link = substr($link, 1);
        unlink($link);

        return true;

    }

    public function delPassport($src, $id)
    {
        $sql = 'DELETE FROM `passport` WHERE `user_id` = :id AND `link` = :src';

        $query = $this->db;

        $result = $query->prepare($sql);
        $result->bindParam(':id', $id);
        $result->bindParam(':src', $src);
        $result->execute();

        $src = substr($src, 1);
        unlink($src);

        return true;
    }


    public function delChildrens($id)
    {
        $delSql = 'DELETE FROM `user_child` WHERE `user_id` = :id';
        $query = $this->db;



        $result = $query->prepare($delSql);
        $result->bindParam(':id', $id);
        $result->execute();
    }

    public function setChildrens($id, $childGender, $childAge)
    {



        $sql = 'INSERT INTO `user_child` (`user_id`, `child_gender`, `age`) VALUES (:id, :childGender, :childAge)';

        $query = $this->db;


        $result = $query->prepare($sql);
        $result->bindParam(':id', $id);
        $result->bindParam(':childGender', $childGender);
        $result->bindParam(':childAge', $childAge);

        $result->execute();


    }

    public function uploadPhoto($id, $img)
    {

        $sql = 'INSERT INTO `user_photos` (`user_id`, `img`) VALUES (:id, :img)';
        $query = $this->db;
        $result = $query->prepare($sql);
        $result->bindParam(':id', $id);
        $result->bindParam(':img', $img);
        $result->execute();

    }

    public function uploadPassport($id, $img)
    {

        $sql = 'INSERT INTO `passport` (`user_id`, `link`) VALUES (:id, :img)';
        $query = $this->db;
        $result = $query->prepare($sql);
        $result->bindParam(':id', $id);
        $result->bindParam(':img', $img);
        $result->execute();

    }


    public function getUserInfoById($id)
    {
//        $sql = '
//            SELECT `mans`.`first_name`, `mans`.`last_name`, `mans`.`pref_min_age`, `mans`.`pref_max_age`, `mans`.`height`, `mans`.`weight`, `mans`.`hair_colour`, `mans`.`eye_color`,
//            `mans`.`country`, `mans`.`smoker`, `mans`.`religion`, `mans`.`childrens`, `mans`.`children_possibility`, `mans`.`languages`, `mans`.`about`, `mans`.`hobbie`, `mans`.`education`,
//            `mans`.`ideal_mate`, `mans`.`dreams`, `mans`.`favorite_food`, `mans`.`favorite_music`, `mans`.`favorite_season`, `mans`.`id`, `user_child`.`child_id`, `user_child`.`child_name`, `user_child`.`child_gender`, `user_child`.`age`, `user_photos`.`img`, `user_photos`.`photo_id`, `user_avatars`.`avatar_id`, `users`.`birth`, `users`.`active`, `users`.`role`
//            FROM `users`
//            LEFT JOIN `user_child` ON `users`.`user_id` =`user_child`.`user_id`
//            LEFT JOIN `user_photos` ON `users`.`user_id` = `user_photos`.`user_id`
//            LEFT JOIN `user_avatars` ON `users`.`user_id` = `user_avatars`.`user_id`
//            LEFT JOIN `mans` ON `users`.`user_id` = `mans`.`id`
//            WHERE `users`.`user_id` = :id
//        ';
//
//        $query = $this->db;
//        $result = $query->prepare($sql);
//        $result->bindParam(':id', $id);
//        $result->execute();
        $profileSQL = 'SELECT  `mans`.`id`, 
                        `mans`.`first_name`,
                        `mans`.`middle_name`, 
                        `mans`.`last_name`, 
                        `mans`.`pref_min_age`, 
                        `mans`.`pref_max_age`, 
                        `mans`.`height`, 
                        `mans`.`weight`, 
                        `mans`.`height`, 
                        `mans`.`hair_colour`, 
                        `mans`.`eye_color`, 
                        `mans`.`country`, 
                        `mans`.`street`, 
                        `mans`.`city`, 
                        `mans`.`zip`, 
                        `mans`.`prop_address`, 
                        `mans`.`prop_index`, 
                        `mans`.`email_optional`, 
                        `mans`.`skype`, 
                        `mans`.`skype`, 
                        `mans`.`viber`, 
                        `mans`.`faceTime`, 
                        `mans`.`zodiak_sign`, 
                        `mans`.`smoker`, 
                        `mans`.`alcohol`, 
                        `mans`.`religion`, 
                        `mans`.`marital_status`, 
                        `mans`.`childrens`, 
                        `mans`.`children_possibility`,
                        `mans`.`motto`, `mans`.`about`, 
                        `mans`.`hobbie`, 
                        `mans`.`education`, 
                        `mans`.`occupation`, 
                        `mans`.`ideal_mate`, 
                        `mans`.`dreams`, 
                        `mans`.`favorite_food`, 
                        `mans`.`favorite_music`, 
                        `mans`.`favorite_season`, 
                        `mans`.`favorite_movie`, 
                        `mans`.`favorite_city`, 
                        `mans`.`driver_licence`, 
                        `mans`.`about_us`, 
                        `mans`.`video`, 
                        `users`.`email`, 
                        `users`.`locale`, 
                        `users`.`active`, 
                        `users`.`birth`, 
                        `users`.`role`, 
                        `users`.`is_new`
                        FROM users
                        LEFT JOIN `mans` on `users`.`user_id` = `mans`.`id`
                        WHERE `users`.`user_id` = :id
        ';

        $query = $this->db;
        $result = $query->prepare($profileSQL);
        $result->bindParam(':id', $id);
        $result->execute();
        $data['profile'] = $result->fetch(\PDO::FETCH_ASSOC);


        //Получаем фотографии пользователя
        $imagesSQL = "SELECT `user_photos`.`photo_id`, `user_photos`.`img`
                      FROM `user_photos`
                      WHERE `user_photos`.`user_id` = :id";
        $result = $query->prepare($imagesSQL);
        $result->bindParam(':id', $id);
        $result->execute();
        $data['images'] = $result->fetchAll(\PDO::FETCH_ASSOC);


        //Получаем аватар пользователя
        $avatarSQL = "SELECT `user_photos`.`img` FROM `user_photos` WHERE `user_photos`.`photo_id` = (SELECT `user_avatars`.`avatar_id` FROM `user_avatars` WHERE `user_avatars`.`user_id` = :id)";

        $result = $query->prepare($avatarSQL);
        $result->bindParam(':id', $id);
        $result->execute();
        $data['avatar'] = $result->fetch(\PDO::FETCH_ASSOC);

        //Получаем детей пользователя
        $childSQL = "SELECT `user_child`.`child_id`, `user_child`.`child_gender`, `user_child`.`age` 
        FROM `user_child` WHERE `user_child`.`user_id` = :id";

        $result = $query->prepare($childSQL);
        $result->bindParam(':id', $id);
        $result->execute();
        $data['chlidrens'] = $result->fetchAll(\PDO::FETCH_ASSOC);

        //Получаем фото пасспорта
        $passportSQL = "SELECT `passport`.`link`,`passport`.`photo_id` FROM `passport` WHERE `passport`.`user_id` = :id";

        $result = $query->prepare($passportSQL);
        $result->bindParam(':id', $id);
        $result->execute();
        $data['passport'] = $result->fetchAll(\PDO::FETCH_ASSOC);

        //Получаем телефоны
        $phonesSQL = "SELECT `phone_id`, `phone` FROM `phones` WHERE `id` = :id";

        $result = $query->prepare($phonesSQL);
        $result->bindParam(':id', $id);
        $result->execute();
        $data['phones'] = $result->fetchAll(\PDO::FETCH_ASSOC);
        //Получаем соц сети
        $socialSQL = "SELECT `social_id`, `link`, `name` FROM `social` WHERE `user_id` = :id";

        $result = $query->prepare($socialSQL);
        $result->bindParam(':id', $id);
        $result->execute();
        $data['social'] = $result->fetchAll(\PDO::FETCH_ASSOC);

        return $data;

//        $userInfo = $result->fetch(\PDO::FETCH_ASSOC);
//        if(($userInfo['birth'] != 0)&&($userInfo['role'] == 'man'))
//        {
//            return $userInfo;
//        }
//        return false;

    }

    //Получаем данные текущего пользователя
    public function getMyProfileById($id)
    {

        $sql = '
            SELECT `ladies`.`first_name`, `ladies`.`last_name`, `ladies`.`pref_min_age`, `ladies`.`pref_max_age`, `ladies`.`height`, `ladies`.`weight`, 
            `ladies`.`hair_colour`, `ladies`.`eye_color`, `ladies`.`smoker`, `ladies`.`religion`, 
            `ladies`.`about`, `ladies`.`hobbie`, `ladies`.`education`, `ladies`.`ideal_mate`, 
            `ladies`.`dreams`, `ladies`.`favorite_food`, `ladies`.`favorite_music`, `ladies`.`favorite_season`, `ladies`.`english_skill_level`, 
            `ladies`.`favorite_gifts`, `ladies`.`id`, `user_child`.`child_id`, `user_child`.`child_gender`, `user_child`.`age`, `user_photos`.`img`, 
            `user_photos`.`photo_id`, `user_avatars`.`avatar_id`, `users`.`birth`, `users`.`active`, `users`.`role`
            FROM `users`
            LEFT JOIN `user_child` ON `users`.`user_id` =`user_child`.`user_id`
            LEFT JOIN `user_photos` ON `users`.`user_id` = `user_photos`.`user_id`
            LEFT JOIN `user_avatars` ON `users`.`user_id` = `user_avatars`.`user_id`
            LEFT JOIN `ladies` ON `users`.`user_id` = `ladies`.`id`
            WHERE `users`.`user_id` = :id
        ';

        $query = $this->db;
        $result = $query->prepare($sql);
        $result->bindParam(':id', $id);
        $result->execute();

        $userInfo = $result->fetch(\PDO::FETCH_ASSOC);
        if ($userInfo['birth'] != 0) {
            return $userInfo;
        }
        return false;
    }

    public function getAllAboutProfile($id)
    {
        $profileSQL = 'SELECT `ladies`.`id`,`ladies`.`first_name`, `ladies`.`last_name`, `ladies`.`pref_min_age`, `ladies`.`pref_max_age`, `ladies`.`height`, `ladies`.`weight`, 
            `ladies`.`hair_colour`, `ladies`.`eye_color`, `ladies`.`smoker`, `ladies`.`religion`, 
            `ladies`.`about`, `ladies`.`hobbie`, `ladies`.`education`, `ladies`.`ideal_mate`, 
            `ladies`.`dreams`, `ladies`.`favorite_food`, `ladies`.`favorite_music`, `ladies`.`favorite_season`, `ladies`.`english_skill_level`, 
            `ladies`.`favorite_gifts`, `ladies`.`id`, `ladies`.`is_new`, `ladies`.`country`, `ladies`.`street`, `ladies`.`zip`, `ladies`.`otchestvo`,`ladies`.`prop_address`,
            `ladies`.`prop_index`,`ladies`.`skype`,`ladies`.`viber`,`ladies`.`face_time`,`ladies`.`zadiak`, `ladies`.`profession`, `ladies`.`alcohol`, `ladies`.`family`, `ladies`.`creed`,
            `ladies`.`favorite_movie`, `ladies`.`favorite_city`, `ladies`.`driver_license`, `ladies`.`about_us`, `ladies`.`mask_name`, `ladies`.`video`, `ladies`.`email_optional`,
            `ladies`.`country`, `ladies`.`zip`, `ladies`.`street`, `ladies`.`childrens_possibility`,
            `users`.`birth`, `users`.`active`, `users`.`role`, `users`.`locale`, `users`.`email`
            FROM `users`
             LEFT JOIN `ladies` ON `users`.`user_id` = `ladies`.`id`
             WHERE `users`.`user_id` = :id';
        $query = $this->db;
        $result = $query->prepare($profileSQL);
        $result->bindParam(':id', $id);
        $result->execute();
        $data['profile'] = $result->fetch(\PDO::FETCH_ASSOC);

        $imagesSQL = "SELECT `user_photos`.`photo_id`, `user_photos`.`img`
                      FROM `user_photos`
                      WHERE `user_photos`.`user_id` = :id";
        $result = $query->prepare($imagesSQL);
        $result->bindParam(':id', $id);
        $result->execute();
        $data['images'] = $result->fetchAll(\PDO::FETCH_ASSOC);

        $avatarSQL = "SELECT `user_photos`.`img` FROM `user_photos` WHERE `user_photos`.`photo_id` = (SELECT `user_avatars`.`avatar_id` FROM `user_avatars` WHERE `user_avatars`.`user_id` = :id)";

        $result = $query->prepare($avatarSQL);
        $result->bindParam(':id', $id);
        $result->execute();
        $data['avatar'] = $result->fetch(\PDO::FETCH_ASSOC);

        $childSQL = "SELECT `user_child`.`child_id`, `user_child`.`child_gender`, `user_child`.`age` 
        FROM `user_child` WHERE `user_child`.`user_id` = :id";

        $result = $query->prepare($childSQL);
        $result->bindParam(':id', $id);
        $result->execute();
        $data['chlidrens'] = $result->fetchAll(\PDO::FETCH_ASSOC);

        $passportSQL = "SELECT `passport`.`link`,`passport`.`photo_id` FROM `passport` WHERE `passport`.`user_id` = :id";

        $result = $query->prepare($passportSQL);
        $result->bindParam(':id', $id);
        $result->execute();
        $data['passport'] = $result->fetchAll(\PDO::FETCH_ASSOC);

        $phonesSQL = "SELECT `phone_id`, `phone` FROM `phones` WHERE `id` = :id";

        $result = $query->prepare($phonesSQL);
        $result->bindParam(':id', $id);
        $result->execute();
        $data['phones'] = $result->fetchAll(\PDO::FETCH_ASSOC);

        $socialSQL = "SELECT `social_id`, `link`, `name` FROM `social` WHERE `user_id` = :id";

        $result = $query->prepare($socialSQL);
        $result->bindParam(':id', $id);
        $result->execute();
        $data['social'] = $result->fetchAll(\PDO::FETCH_ASSOC);

        return $data;

//        echo "<pre>";
//        print_r($data);
//        echo "</pre>";
//        die();
    }

}