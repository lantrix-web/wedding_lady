<?php

namespace application\model;

use application\core\Model;

class admin extends Model
{

    public function getUsers($gender)
    {
        $sql = 'SELECT * FROM `users` WHERE `role` = :gender';

        $query = $this->db;
        $result = $query->prepare($sql);
        $result->bindParam(':gender', $gender);
        $result->execute();

        $users = $result->fetchAll(\PDO::FETCH_ASSOC);

        return $users;
    }




    public function getCountNewUsers()
    {
        $sql = 'SELECT COUNT(*) FROM `users` WHERE `is_new` = 1';

        $query = $this->db;
        $result = $query->prepare($sql);
        $result->execute();

        $newUsers = $result->execute();

        return $newUsers;
    }


}


