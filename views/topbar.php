<?php
// IF USER IS LOGGED IN
if($user->isLoggedIn()) { ?>
    <p>Hello <a href="../profile.php?user=<?php echo escape($user->data()->username); ?>"><?php echo escape($user->data()->username); ?></a>!</p>

    <ul>
        <li><a href="../logout.php">Log out</a></li>
        <li><a href="../changepassword.php">Change password</a></li>
        <li><a href="../update.php">Update details</a></li>
    </ul>
    <?php
    if($user->hasPermission('admin')) {
        echo '<p>You\'re also an administrator!</p>';
    }
} else {
    echo 'You need to <a class="loginlb" href="#">Log In</a> or <a class="registerlb" href="#">Register</a>!';
}

if(Input::exists()) {

    if(Token::check(Input::get('token'))) {
        $validate = new Validate();
        $validation = $validate->check($_POST, array(
            'username' => array(
                'required' => true,
                'min' => 2,
                'max' => 20,
                'unique' => 'users'),
            'password' => array(
                'required' => true,
                'min' => 6),
            'password_again' => array(
                'required' => true,
                'matches' => 'password'),
            'name' => array(
                'required' => false,
                'min' => 2,
                'max' => 50)
        ));

        if($validation->passed()) {
            $user = new User();

            $salt = Hash::salt(32);

            try {
                $user->create(array(
                    'username' 	=> Input::get('username'),
                    'password' 	=> Hash::make(Input::get('password'), $salt),
                    'salt'		=> $salt,
                    'name' 		=> Input::get('name'),
                    'joined'	=> date('Y-m-d H:i:s'),
                    'group'		=> 1
                ));

                Session::flash('home', 'You have been registered and can now log in!');
                Redirect::to('index.php');

            } catch(Exception $e) {
                die($e->getMessage());
            }

        } else {
            foreach($validate->errors() as $error) {
                echo $error, '<br>';
            }
        }
    }
}
?>

<div style="display:none;">
    <div id="registerlbcontent">
        <div class="colorboxtitle">
            <span class="cbtitle">Register</span><span class="cbclose" onclick="$.colorbox.close();">X</span>
            <div style="clear:both;"></div>
        </div>
        <div class="colorboxbody">
            <form action="" method="post">
                <div class="regformleft">
                    <div class="field">
                        <label for="username">Choose a username</label>
                        <input type="text" name="username" id="username" value="<?php echo escape(Input::get('username')); ?>">
                    </div>
                    <div class="field">
                        <label for="password">Choose a password</label>
                        <input type="password" name="password" id="password">
                    </div>
                    <div class="field">
                        <label for="password_again">Enter your password again</label>
                        <input type="password" name="password_again" id="password_again">
                    </div>
                    <div class="field">
                        <label for="name">Your name</label>
                        <input type="text" name="name" id="name" value="<?php echo escape(Input::get('name')); ?>">
                    </div>
                </div>
                <input class="regsubmit" type="image" src="images/register.png" value="Register">
                <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
                <div style="clear:both;"></div>
            </form>
        </div>
    </div>
</div>