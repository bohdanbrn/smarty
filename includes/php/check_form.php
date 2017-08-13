<?php

    class CheckForm
    {
        //public $result = array( 'success' => true, 'messages' => array('email' => true, 'password' => true, 'captcha' => true) );
        public $result = array( 'success' => true, 'messages' => array() );

        public function __construct($email, $password, $repeat_pass, $user_captcha)
        {
            if ( empty($email) || empty($password) || empty($repeat_pass) || empty($user_captcha) )
            {
                $this->result['success'] = false;
                $this->result['messages'][] = "Not all fields are filled";
                echo json_encode($this->result);
                exit();
            }
        }

        public function checkEmail( $connect, $email )
        {
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $query = mysqli_query($connect, $sql);
            if ( !$query )
            {
                $this->result['success'] = false;
                $this->result['messages'][] = "Could not successfully run query from DB: " . mysql_error();
            } 
            else if ( mysqli_num_rows($query) > 0 )
            {
                $this->result['success'] = false;
                //$this->result['messages']['email'] = "User with such an email is already registered";
                $this->result['messages'][] = "User with such an email is already registered";
            }
        }

        public function checkPass( $password, $repeat_pass )
        {
            if ( strlen($password) < 4 )
            {
                $this->result['success'] = false;
                $this->result['messages'][] = 'Password must contain at least 4 characters';
            }
            else if ( $password !== $repeat_pass )
            {
                $this->result['success'] = false;
                $this->result['messages'][] = 'Enter the same passwords';
            }
        }

        public function checkCaptcha( $user_captcha, $true_captcha )
        {
            if ( $user_captcha !== $true_captcha )
            {
                $this->result['success'] = false;
                $this->result['messages'][] = 'Field captcha entered incorrectly';
            }
        }

        public function saveUser($connect, $email, $password)
        {
            $sql = "INSERT INTO `users` (`id`, `email`, `password`) VALUES (NULL, '$email', '$password')";
            $result = mysqli_query($connect, $sql);
            if ( $result ) {
                $this->result['messages'][] = 'You have successfully registered';
            }
            else {
                $this->result['messages'][] = 'Could not successfully run query from DB: ' . mysqli_error(); 
            }
        }
    }

?>