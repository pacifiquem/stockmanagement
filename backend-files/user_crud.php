<?php

include('./db_connection.php');

class AddUser {

    private $userId;
    private $firstName;
    private $lastName;
    private $telephone;
    private $gender;
    private $nationality;
    private $username;
    private $email;
    private $password;

    function __construct($userId, $firstName, $lastName, $telephone, $gender, $nationality, $username, $email, $password) {
        $this->userId = $userId;
        $this->firstName = $firstname;
        $this->lastName = $lastName;
        $this->telephone = $telephone;
        $this->gender = $gender;
        $this->nationality = $nationality;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    private function hashPassword() {
        return hash('sha256', $this->password);
    }

    public function signUp() {
        $insert = "INSERT INTO users(userId, firstName, lastName, telephone, gender, nationality, username, email, password) values($this->userId, $this->firstName, $this->lastName, $this->telephone, $this->gender, $this->nationality, $this->username, $this->email, $this->hashPassword)";

        $query = mysqli_query($dbConnection, $insert);

        if($query) {
            header('Location: ../front-files/dashboard.php');
        }else {
            header('Location: ../front-files/signup.php');
        }
    }
    
}


?>