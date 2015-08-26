
<!DOCTYPE html><html class=''>
<head><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="canonical" href="http://codepen.io/ScottMarshall/pen/ytiLC" />


<style class="cp-pen-styles">/*dark background to support form theme*/
body {
  background: url("images/layout/register-bg.jpg");
  font: 13px Open Sans;
}

.info, .success, .warning, .error, .validation {
border: 1px solid;
margin: 10px 0px;
padding:15px 10px 15px 50px;
background-repeat: no-repeat;
background-position: 10px center;
}
.info {
color: #00529B;
background-color: #BDE5F8;
background-image: url('img/misc/info.png');
}
.success {
color: #4F8A10;
background-color: #DFF2BF;
background-image:url('img/misc/success.png');
}
.warning {
color: #9F6000;
background-color: #FEEFB3;
background-image: url('img/misc/warning.png');
}
.error {
color: #D8000C;
background-color: #FFBABA;
background-image: url('img/misc/error.png');
}

/*sass variables used*/
/*site container*/
.wrapper {
  width: 420px;
  margin: 0 auto;
}

h1 {
  text-align: center;
  padding: 30px 0px 0px 0px;
  font: 25px Oswald;
  color: #FFF;
  text-transform: uppercase;
  text-shadow: #000 0px 1px 5px;
  margin: 0px;
}

p {
  font: 13px Open Sans;
  color: #6E6E6E;
  text-shadow: #000 0px 1px 5px;
  margin-bottom: 30px;
}

.form {
  width: 100%;
}

input[type="text"], input[type="email"] {
  width: 98%;
  padding: 15px 0px 15px 8px;
  border-radius: 5px;
  box-shadow: inset 4px 6px 10px -4px rgba(0, 0, 0, 0.3), 0 1px 1px -1px rgba(255, 255, 255, 0.3);
  background: rgba(0, 0, 0, 0.2);
  outline: none;
  border: none;
  border: 1px solid black;
  margin-bottom: 10px;
  color: #6E6E6E;
  text-shadow: #000 0px 1px 5px;
}

input[type="submit"] {
  width: 100%;
  padding: 15px;
  border-radius: 5px;
  outline: none;
  border: none;
  background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#28D2DE), to(#1A878F));
  background-image: -webkit-linear-gradient(#28D2DE 0%, #1A878F 100%);
  background-image: -moz-linear-gradient(#28D2DE 0%, #1A878F 100%);
  background-image: -o-linear-gradient(#28D2DE 0%, #1A878F 100%);
  background-image: linear-gradient(#28D2DE 0%, #1A878F 100%);
  font: 14px Oswald;
  color: #FFF;
  text-transform: uppercase;
  text-shadow: #000 0px 1px 5px;
  border: 1px solid #000;
  opacity: 0.7;
  -webkit-box-shadow: 0 8px 6px -6px rgba(0, 0, 0, 0.7);
  -moz-box-shadow: 0 8px 6px -6px rgba(0, 0, 0, 0.7);
  box-shadow: 0 8px 6px -6px rgba(0, 0, 0, 0.7);
  border-top: 1px solid rgba(255, 255, 255, 0.8) !important;
  -webkit-box-reflect: below 0px -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(50%, transparent), to(rgba(255, 255, 255, 0.2)));
}

input:focus {
  box-shadow: inset 4px 6px 10px -4px rgba(0, 0, 0, 0.7), 0 1px 1px -1px rgba(255, 255, 255, 0.3);
  background: rgba(0, 0, 0, 0.3);
  -webkit-transition: 1s ease;
  -moz-transition: 1s ease;
  -o-transition: 1s ease;
  -ms-transition: 1s ease;
  transition: 1s ease;
}

input[type="submit"]:hover {
  opacity: 1;
  cursor: pointer;
}

.name-help, .name-help2, .email-help {
  display: none;
  padding: 0px;
  margin: 0px 0px 15px 0px;
}

.optimize {
  position: fixed;
  right: 3%;
  top: 0px;
}
</style>
</head>
<body>
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<div class="wrapper">
<?php
    date_default_timezone_set('America/Los_Angeles'); //get fucked, euronerds
    mb_internal_encoding("UTF-8");
    function showRegistration($error){
        //Modify the forms here, it's plain HTML, mostly.
		//So $error just indicates they missed some form information. true/false
		//Will switch to integer error codes {0,1,2,...} later to indicate more specific errors
        ?>
		<?php 
		if ($error){
            echo "<div class=warning>You need to fill out the whole form.</div><br>";
		}
		?>
                          <h1>Register A Spectre Fleet Slack account</h1>
                          <p>To sign-up for a Spectre Fleet slack account please provide us with some basic information using
 						 	the contact form below. Please use valid credentials, you cannot register if you do not give us a valid email!</p>
                        <form class="form" action="register.php" method="POST">
                            <input class="name" type="text" name="fname" placeholder="First Name">
                            <div>
                                <p class="name-help">Please enter your first name.</p>
                            </div>
                            <input class="name2" type="text" name="lname" placeholder="Last Name">
                            <div>
                                <p class="name-help2">Please enter you last name.</p>
                            </div>
                            <input type="text" name="email" placeholder="Email" class="email">
                            <div>
                                <p class="email-help">Please enter your current email address.</p>
                            </div>
                            <input type="submit" value="Register">
                            <input type="hidden" name="attempt" value="true">
                        </form>
        <?php
    }
    if (!isset($_POST['email']) || !isset($_POST['fname']) || !isset($_POST['lname'])){
        showRegistration(false);
    }
    else if (isset($_POST['attempt']) && ($_POST['attempt'] == "true")){
        if (empty($_POST["email"])
                || empty($_POST["fname"])
                || empty($_POST["lname"])){
            showRegistration(true);
        }
        else{
            $TOKEN = "xoxs-3152905981-3224893926-3224893984-3d34e44a31";
            $URL = "https://spectrefleet.slack.com/api/users.admin.invite?t=".time();
            $CHANNELS="C034GSMV7";
            $email=$_POST['email'];
            $name=$_POST['fname'];
            $last =$_POST['lname'];
            $fields= array(
                    'email' => urlencode($email),
                    'channels' => urlencode($CHANNELS),
                    'first_name' => urlencode($name),
                    'token' => $TOKEN,
                    'set_active' => urlencode('true'),
                    '_attempts' => '1'
                    );
            $post = '';
            foreach ($fields as $key=>$value){
                $post .= $key.'='.$value.'&';
            }
            rtrim($post, '&');
            $ch = curl_init($URL);

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, count($fields));
            curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
            $reply = curl_exec($ch);
            $reply1 = json_decode($reply, true);
            if ($reply1["ok"] == "true")
                echo "<div class=success>Registration successful! You should receive your Slack invite within 30 minutes on the email you registered with.</div>";
            else
                echo "<div class=error>Registration unsuccesful. The e-mail you tried to register with is probably already in use. Please send Quantum Lotus a mail in game for a manual invite.</div>";
            curl_close($ch);
        }
    }

?>
<p class="optimize">
  <a href="spectrefleet.com">Back to the main website</a>
</p>
<script src='//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
<script>
$('.name').focus(function () {
    $('.name-help').slideDown(500);
}).blur(function () {
    $('.name-help').slideUp(500);
});

$('.name2').focus(function () {
    $('.name-help2').slideDown(500);
}).blur(function () {
    $('.name-help2').slideUp(500);
});
$('.email').focus(function () {
    $('.email-help').slideDown(500);
}).blur(function () {
    $('.email-help').slideUp(500);
});
//@ sourceURL=pen.js
</script>
<script src='http://codepen.io/assets/editor/live/css_live_reload_init.js'></script>
</body></html>

