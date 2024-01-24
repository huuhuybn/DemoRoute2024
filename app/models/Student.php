<?php

namespace Huuhu\Demo\models;

use Huuhu\Demo\base\DBMySQL;
use Huuhu\Demo\base\Person;

class Student extends Person
{
    private $mssv;
    private $sdtPhuHuynh;
    private $idBangDiem;

    function profile()
    {
        // TODO: Implement profile() method.
    }
    public function login($username, $password)
    {
        $kq = null;
        try{
            $query = 'SELECT * FROM students where username = :username';
            $stmp = DBMySQL::getDBInstance()->prepare($query);
            $stmp->bindParam(':username',$username);
            $stmp->execute();
            $result = $stmp->fetchAll(\PDO::FETCH_ASSOC);
            if ($stmp->rowCount() > 0){
                $first = $result[0];
                $username = $first['username'];
                $passwordC = $first['password'];
                if ($password == $passwordC ){
                    $kq = 1;
                }
            }
        }catch (\PDOException $e){
            echo $e->getMessage();
        }
        return $kq;
    }


    function logout()
    {
        // TODO: Implement logout() method.
    }
}

