<?php

include('./db_connection.php');
class signup extends Db_Connection {

    private $userId;
    private $firstName;
    private $lastName;
    private $telephone;
    private $gender;
    private $nationality;
    private $username;
    private $email;
    private $password;
    private $connection;

    function __construct($firstName, $lastName, $telephone, $gender, $nationality, $username, $email, $password, $connection) {

        $this->userId = '';
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->telephone = $telephone;
        $this->gender = $gender;
        $this->nationality = $nationality;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->connection = $connection;
        $this->password = $password;
    }

    public function hashPassword() {

        $this->password = hash('sha256', $this->password);
        echo $this->password;
    }

    public function generateId() {
        $this->userId = uniqid();
        echo $this->userId;
    }

    public function signUp() {
        $insert = "INSERT INTO users(userId, firstName, lastName, telephone, gender, nationality, username, email, password) values('$this->userId', '$this->firstName', '$this->lastName', '$this->telephone', '$this->gender', '$this->nationality', '$this->username', '$this->email', '$this->password')";

        $query = mysqli_query($this->connection, $insert);

        if($query) {
            // //store user information in session
            // session_start();
            // $_SESSION['user'] = $this->id;
            // //direct user to his dashboard
            // header('Location: ../front-files/dashboard.php');
        }else {
            echo mysqli_error($this->connection);
            header('Location: ../front-files/signup.php?error=please fillout all fields wisely');
        }
    }
}
$newUser = new signup($_POST['firstname'], $_POST['lastname'], $_POST['telephone'], $_POST['gender'], $_POST['nationality'], $_POST['username'], $_POST['email'], $_POST['password'], $dbConnection);
$newUser->hashPassword();
$newUser->generateId();
$newUser->signUp();

?>