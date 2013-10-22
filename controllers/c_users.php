<?php
class users_controller extends base_controller {

    public function __construct() {
        parent::__construct();
    } 

    public function index() {
        echo "This is the index page";
    }

    public function signup() {
        
        #Set up the view
        $this->template->content = View::instance('v_users_signup');

        #Render the view
        echo $this->template;
    }

    public function p_signup() {

        $_POST['created'] = Time::now();
        $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);
        $_POST['token'] = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string());

        DB::instance(DB_NAME)->insert_row('users', $_POST);

        Router::redirect('/users/login');
    }

    public function login() {
        
        $this->template->content = View::instance('v_users_login');

        echo $this->template;
    }

    public function p_login() {

        $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);

        $q =
            'SELECT token
            FROM users
            WHERE email = "'.$_POST['email'].'"
            AND password = "'.$_POST['password'].'"';

        $token = DB::instance(DB_NAME)->select_field($q);

        # Success
        if($token) {
            setcookie('token',$token,strtotime('+1 year'),'/');
            echo "You are logged in!";
        }
        # Fail
        else {
            echo "Login failed!";
        }
    }

    public function logout() {
        echo "This is the logout page";
    }

    public function profile($user_name = NULL) {

        if($user_name == NULL) {
            echo "No user specified";
        }
        else {
            echo "This is the profile for ".$user_name;
        }
    }

} # end of the class

?>