<?php
@session_start();

function randString($length,
                    $charset='ABCDEFGHJKLMNPQRSTUVWXYZabcdefghjkmnpqrstuvwxyz23456789')
{
    $str = '';
    $count = strlen($charset);
    while ($length--) {
        $str .= $charset[mt_rand(0, $count-1)];
    }
    return $str;
}

function generateCaptcha($cap) {
    $images = glob("*.png");
    foreach ($images as $image_to_delete) {
        unlink($image_to_delete);
    }
    $image = imagecreatetruecolor(75, 30);
    $color = imagecolorallocate($image, rand(100,255), rand(100,255), rand(100,255));
    $imageString = imagestring($image, 5, 10, 7, $cap, $color);
    $line_color = imagecolorallocate($image, 64,64,64);
    $pixel_color = imagecolorallocate($image, 0,0,255);
    for ($i=0;$i<1000;$i++) {
        imagesetpixel($image,rand()%200,rand()%50,$pixel_color);
    }
    $name = 'captcha_'.md5($cap).'.png';
    imagepng($image, $name);
    return $name;
}

function display($filename){
    echo '<div class="captchaImage">';
    echo '<img src='.$filename.'>';
    echo '</div>';
}
$cap = randString(6);
$_SESSION['captcha'] = $cap;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Register | Spectre Fleet</title>
        <meta content="Spectre Fleet is the biggest NPSI community in the MMO EVE Online. You can join us by joining our in game channel Spectre Fleet and whenever there's a fleet, X up!" name="description">
        <link href="/lib/Font-Awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- FIXME: load these in locally -->
        <link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
        <link href="//fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css">
        <style>
            body {
                background: url("img/layout/register-bg.jpg") #000;
                font-size: 13px;
                font-family: 'Open Sans', Arial, sans-serif;
            }

            a:visited {
                color:#9820ca
            }

            a:hover {
                opacity: 1;
                cursor: pointer;
            }

            a:focus {
                box-shadow: inset 4px 6px 10px -4px rgba(0, 0, 0, 0.7), 0 1px 1px -1px rgba(255, 255, 255, 0.3);
                background: rgba(0, 0, 0, 0.3);
                -webkit-transition: 1s ease;
                -moz-transition: 1s ease;
                -o-transition: 1s ease;
                -ms-transition: 1s ease;
                transition: 1s ease;
            }

            a:hover,a:active {
                outline:0;
            }

            .info, .success, .warning, .error {
                margin: 10px 0px;
                padding:12px;
                border-radius:.5em;
                border: 1px solid;
            }

            .info {
                color: #00529B;
                background-color: #BDE5F8;
            }

            .success {
                color: #4F8A10;
                background-color: #DFF2BF;
            }

            .warning {
                color: #9F6000;
                background-color: #FEEFB3;
            }

            .error {
                color: #D8000C;
                background-color: #FFBABA;
            }

            .info i, .success i, .warning i, .error i, .message i {
                margin: 0px 5px;
                vertical-align:middle;
            }

            .info p, .success p, .warning p, .error p, .message p {
                font-family: 'Open Sans', Arial, sans-serif;
                padding-left: none;
                font-size: 13px;
                font-family: 'Open Sans', Arial, sans-serif;
                color: inherit;
                text-shadow: none;
                margin-bottom: none;
            }

            .wrapper {
                width: 420px;
                margin: 0 auto;
                padding-top: -50px;
                padding-left: 25px;
                padding-right: 25px;
                padding-bottom: 80px;
                background-color: rgba(78, 78, 78,0.8);
                border: 1px solid rgba(55,57,59,0.8);
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0,0,0,0.75);
                -moz-box-shadow: 0 0 10px rgba(0,0,0,0.75);
                -webkit-box-shadow: 0 0 10px rgba(0,0,0,0.75);
                position:absolute;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                margin: auto;
                height:500;
            }

            h1 {
                text-align: center;
                padding: 30px 0px 0px 0px;
                font-size: 21px;
                font-family: 'Oswald', arial, sans-serif;
                color: #FFF;
                text-transform: uppercase;
                text-shadow: #000 0px 1px 5px;
                margin: 0px;
            }

            p {
                padding-left: 10px;
                font-size: 13px;
                font-family: 'Open Sans', Arial, sans-serif;
                color: #ADADAD;
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
                background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#9900FF), to(#444444));
                background-image: -webkit-linear-gradient(#9900FF 0%, #444444 100%);
                background-image: -moz-linear-gradient(#9900FF 0%, #444444 100%);
                background-image: -o-linear-gradient(#9900FF 0%, #444444 100%);
                background-image: linear-gradient(#9900FF 0%, #444444 100%);
                font-size: 14px;
                font-family: 'Oswald', arial, sans-serif;
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

            .name-help, .name-help2, .email-help, .captcha-help {
                display: none;
                padding: 0px;
                margin: 0px 0px 15px 0px;
            }

            .optimize {
                font-family: 'Oswald', arial, sans-serif !important;
                font-size: 14px;
                position: fixed;
                right: 7%;
                top: 25px;
                float: right;
                padding-right: inherit;
            }

            @media only screen and (max-width: 1025px) {
                .optimize {
                    display: none;
                }
            }
        </style>
    </head>
    <body>
                  <p class="optimize">
                <a href="https://spectrefleet.slack.com/messages/general/"><img src="/img/layout/spectre_fleet_slack.png"></a>
            </p>
        <div class="wrapper">
            <div class="message"></div><br>
            <h1>Register A Spectre Fleet Slack account</h1>
            <p>To sign-up for a Spectre Fleet Slack account please provide us with some basic information using the contact form below. Use valid credentials; you cannot register if you do not give us a valid email.</p>
            <form id="register" class="form">
                <input class="name" id="fname" type="text" name="fname" placeholder="First name of character">
                <div>
                    <p class="name-help">Please enter your character name.</p>
                </div>
                <input class="name2" id="lname" type="text" name="lname" placeholder="Second name of character">
                <div>
                    <p class="name-help2">If your character doesn't have a second name, please enter a blank space in this field (a second name is mandatory for Slack, but a space is enough).</p>
                </div>
                <input type="text" id="email" name="email" placeholder="E-mail" class="email">
                <div>
                    <p class="email-help">Please enter your current email address.</p>
                </div>
                <input type="text" id="captcha" name="captcha" placeholder="Captcha (please type the below code here)">
                <div>
                    <p class="captcha-help">Please enter the captcha text below.</p>
                </div>
                <?php
                $fname = generateCaptcha($cap);
                display($fname);
                ?>
                <input type="hidden" name="attempt" value="true">
                <input type="submit" value="Register">
            </form>

        </div>
        <script src="/lib/jquery/jquery-2.1.4.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function() {
                $('#register').submit(function() {
                    var $form = $(this);
                    var $inputs = $form.find("input, select, button, textarea");
                    var serializedData = $form.serialize();
                    $inputs.prop("disabled", true);
                    request = $.ajax({
                        url: "/registerTwo.php",
                        type: "post",
                        data: serializedData
                    });
                    request.done(function (response, textStatus, jqXHR){
                        // Log a message to the console
                        $(".message").html(response)
                        if (response.indexOf("Success") < 0) {
                            $inputs.prop("disabled", false);
                        }
                    });
                    // Callback handler that will be called on failure
                    request.fail(function (jqXHR, textStatus, errorThrown){
                        // Log the error to the console
                        console.error(
                            "The following error occurred: "+
                            textStatus, errorThrown
                        );
                        $inputs.prop("disabled", false);
                    });
                    event.preventDefault();
                });
            });

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

            $('.captcha').focus(function () {
                $('.captcha-help').slideDown(500);
            }).blur(function () {
                $('.captcha-help').slideUp(500);
            });
        </script>
        <script src="/js/google-analytics.js" type="text/javascript"></script>
    </body>
</html>
