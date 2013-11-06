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

        Router::redirect('/users/profile');
    }
    
    public function update($user_id) {
        
        #Set up the view
        $this->template->content = View::instance('v_users_update');
        $this->template->title   = "Update Profile";
        
        #Pass to the view
        $this->template->content->user_id = $user_id;

        #Render the view
        echo $this->template;
    }
    
    public function p_update()  {
        
        
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
            Router::redirect('/users/profile');
        }
        # Fail
        else {
            echo "Login failed!";
        }
    }

    public function logout() {
        $new_token = sha1(TOKEN_SALT.$this->user->email.Utils::generate_random_string());
        
        $data = Array('token' => $new_token);
        
        DB::instance(DB_NAME)->update('users', $data, 'WHERE user_id ='. $this->user->user_id);
        
        setcookie('token', '', strtotime('-1 year'), '/');
        
        Router::redirect('/');
    }

    public function profile() {

    # If user is blank, they're not logged in; redirect them to the login page
        if(!$this->user) {
            Router::redirect('/');
        }

    # If they weren't redirected away, continue:

    # Setup view
        $this->template->content = View::instance('v_users_profile');
        $this->template->title   = "Profile of ".$this->user->first_name;

    # Render template
        echo $this->template;
        
    }

} # end of the class

?>
