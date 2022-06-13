<?php

include('./db_connection.php');

class signup {

    private $userId;
    private $firstName;
    private $lastName;
    private $telephone;
    private $gender;
    private $nationality;
    private $username;
    private $email;
    private $password;

    function __construct($firstName, $lastName, $telephone, $gender, $nationality, $username, $email, $password) {
        // $this->userId = $userId;
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

    private function getId() {
        $this->userId =  uniqid();
        return $this->userId;
    }

    public function signUp() {
        $insert = "INSERT INTO users(userId, firstName, lastName, telephone, gender, nationality, username, email, password) values($this->getId, $this->firstName, $this->lastName, $this->telephone, $this->gender, $this->nationality, $this->username, $this->email, $this->hashPassword())";

        $query = mysqli_query($dbConnection, $insert);

        if($query) {
            setcookie('id',$this->getId());
            header('Location: ../front-files/dashboard.php');
        }else {
            header('Location: ../front-files/signup.php');
        }
    }
}

$user = new signup('pacifique', 'murangwa', '0785604230', 'Male', 'Rwanda', 'thePack', 'thePack@gmail.com', 'password');
$user->signUp();

?>