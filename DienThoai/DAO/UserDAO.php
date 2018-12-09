<?php
include "/../BEAN/users.php";

class UserDAO{
    public function checkLogin($mail, $pass)
    {
        $user;
        $dsuser = array();
        $conn = new mysqli("localhost", "root", "", "selling-mobile");
        mysqli_set_charset($conn,'utf8');
        $sql = "SELECT * From users where email='$mail' and password='$pass'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $user = new users("", $row["name"], '', $mail, $pass, '');
            array_push($dsuser,$user);
        }
        }  
        else            
            return NULL;
        $user = $dsuser[0];   
        return $user;  
    }
}

