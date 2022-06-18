<?php

include('./db_connection.php');

class User {

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

    public function setSignUp_info($firstName, $lastName, $telephone, $gender, $nationality, $username, $email, $password, $connection) {

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

    public function setLogIn_info($email, $password, $connection) {

        $this->email = $email;
        $this->password = $password;
        $this->connection = $connection;

    }

    public function setdeleteUser_info($userId, $connection) {
        $this->userId = $userId;
        $this->connection = $connection;
    }

    public function hashPassword() {

        $this->password = hash('sha256', $this->password);
        echo $this->password;
    }

    public function generateId() {
        $this->userId = uniqid();
        echo $this->userId;
    }

    //signUp method
    public function signUp() {
        $insert = "INSERT INTO users(userId, firstName, lastName, telephone, gender, nationality, username, email, password) values('$this->userId', '$this->firstName', '$this->lastName', '$this->telephone', '$this->gender', '$this->nationality', '$this->username', '$this->email', '$this->password')";

        $query = mysqli_query($this->connection, $insert);

        if($query) {
            //store user information in session
            session_start();
            $_SESSION['user'] = $this->id;
            //direct user to his dashboard
            header('Location: ../front-files/dashboard.php');
        }else {
            echo mysqli_error($this->connection);
            header('Location: ../front-files/signup.php?error=please fillout all fields wisely');
        }
    }


    //login method
    public function logIn() {

        $select = "SELECT * FROM USERS where email='$this->email'";
        $query = mysqli_query($this->connection, $select);

        if($query && ($query->num_rows != 0)) {


            $user = mysqli_fetch_assoc($query);
            if(hash('sha256',$this->password) === $user['password']) {
                //starting session
                session_start();

                $_SESSION['userId'] = $this->userId;
                $_SESSION['email'] = $this->email;
                $_SESSION['username'] = $this->username;

                header("Location: ../front-files/dashboard.php");
            }
        }
    }

    //delete user method
    public function deleteUser() {

        $delete = "DELETE FROM users WHERE userId='$this->userId'";
        $query = mysqli_query($this->connection, $delete);

        if($query){
            header('Location: ../front-files/dashboard.php?message=User was Deleted Successfully.');
        }
    }
}


if(isset($_GET['signup']) && $_GET['signup'] == TRUE) {

    $newUser = new User();

    //setting required fields
    $newUser->setSignUp_info($_POST['firstname'], $_POST['lastname'], $_POST['telephone'], $_POST['gender'], $_POST['nationality'], $_POST['username'], $_POST['email'], $_POST['password'], $dbConnection);

    //inserting user into db with complete information.
    $newUser->hashPassword();
    $newUser->generateId();
    $newUser->signUp();
}

if(isset($_GET['login']) && $_GET['login'] == TRUE) {

    $userLoggedIn = new User();
    $userLoggedIn->setLogIn_info($_POST['email'], $_POST['password'], $dbConnection);
    $userLoggedIn-> logIn();

}

if(isset($_GET['delete']) && $_GET['delete'] == TRUE) {

    $deleteUser = new User();
    $deleteUser->setdeleteUser_info($_GET['userId'] ,$dbConnection);
    $deleteUser->deleteUser();

}

?>