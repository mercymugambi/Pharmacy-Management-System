<?php
require_once('../database/Database.php');
require_once('../interface/iUser.php');
class User extends Database implements iUser {
    public function user_login($username, $password)
    {
        $sql = "SELECT *
        FROM user
        WHERE user_account = ?
        AND user_pass = ?";
    return $this->getRows($sql,[$username,$password]);
    }//end login_user
}//end class user

$user = new User();

?>