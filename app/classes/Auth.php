<?php


namespace app\classes;


class Auth
{
    private $email;
    private $password;

    private $userEmail;
    private $userPassword;


    public function __construct($post = null)
    {
        $this->email        = 'rita@gmail.com';
        $this->password     = 'rita';
        $this->userEmail    = $post['email'];
        $this->userPassword = $post['password'];
    }


    public function login()
    {
        if($this->email == $this->userEmail && $this->password == $this->userPassword)
        {
            session_start();
            $_SESSION['id'] = session_id();
            header('Location: action.php?page=home');
        }
            return 'Email or Password is Invalid!';
    }

    public function logout()
    {
        session_start();
        if(isset($_SESSION['id']))
        {
            unset($_SESSION['id']);
        }
        header('Location: action.php?page=login');
    }

}