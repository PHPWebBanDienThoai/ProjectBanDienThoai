<?php
include '/../DAO/UserDAO.php';
class UserBO {
    public function checkLogin($mail, $pass)
    {
        $userdao = new UserDAO;
        return $userdao->checkLogin($mail, $pass);
    }
}
