<?php
@session_start();
include 'conf.php';

date_default_timezone_set('America/Los_Angeles'); //get fucked, euronerds // NO U
mb_internal_encoding("UTF-8");

if (!isset($_POST['email']) || !isset($_POST['fname']) || !isset($_POST['lname'])) {
    echo '<div class="error"><i class="fa fa-times-circle"></i>Error</div>';
} else if (isset($_POST['attempt']) && ($_POST['attempt'] == "true")) {
    if (empty($_POST["email"])
        || empty($_POST['captcha'])
        || empty($_POST["fname"])
        || empty($_POST["lname"])) {
        echo '<div class="warning"><i class="fa fa-warning"></i>Need to fill out all fields.</div>';
    } else {
        $images = glob("*.png");
        foreach ($images as $image_to_delete) {
            unlink($image_to_delete);
        }
        $cap = $_SESSION['captcha'];
        $inputCap = $_POST['captcha'];
        if ($cap != $inputCap){
            die('<div class="warning"><i class="fa fa-warning"></i>Invalid captcha</div>');
        }
        $URL = $BASE_URL.time();
        $email = $_POST['email'];
        if (!filter_var( $email, FILTER_VALIDATE_EMAIL )) {
            die('<div class="warning"><i class="fa fa-warning"></i>Email invalid.</div>');
        }
        $name = $_POST['fname'];
        $last = $_POST['lname'];
        $fields = array(
            'email' => urlencode($email),
            'channels' => urlencode($CHANNELS),
            'first_name' => urlencode($name),
            'token' => $TOKEN,
            'set_active' => urlencode('true'),
            '_attempts' => '1'
        );
        $post = '';
        foreach ($fields as $key=>$value) {
            $post .= $key.'='.$value.'&';
        }
        rtrim($post, '&');
        $ch = curl_init($URL);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        $reply = curl_exec($ch);
        $reply1 = json_decode($reply, true);
        if ($reply1["ok"] == "true") {
            echo '<div class="success"><i class="fa fa-check"></i>Success, check your email '.htmlspecialchars($email, ENT_QUOTES, 'utf-8').' for confirmation.</div>';
            // Invalidate their session captcha so they can't resend the same data.
            $_SESSION['captcha'] = md5(strval(rand(0,1024)));
        } else {
            echo '<div class="error"><i class="fa fa-times-circle"></i>Register failed, e-mail is invalid or in use.</div>';
        }
        curl_close($ch);
    }
}
?>
