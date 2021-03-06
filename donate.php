<?php
require_once "core/IGBFunctions.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Donate | Spectre Fleet</title>
        <?php include "includes/static-header.php"; ?>
    </head>
    <body id="landing">
        <?php include "includes/nav.php"; ?>
       <main class="main-content" id="mainstuff" role="main">
            <section id="intro">
                <div class="texture"></div>
                <div id="vidcontainer">
                    <div class="inner">
                        <video autoplay id="vid2000" loop poster="/img/layout/cover.jpg">
                        <source src="/assets/eve_background.webm" type="video/webm"></video>
                    </div>
                </div>
                <div class="container">
                    <div class="row titletext">
                            <h2>Spectre Fleet</h2>
                            <h3>Gaming Community</h3>
                            <?php if (checkIGB()) { ?>
                                <?php if (checkTrust() == 0) { ?>
                                    <div align="center">
                                        <div class="col-sm-12">
                                            <div style="padding: 60px 0 0;">
                                                <a class="button--arrow landing red" href="#" style="font-family: 'Arial', sans-serif; font-size: 0.8em; white-space: nowrap;" onclick="<?php printRequestTrust(); ?>"><span class="button--arrow-text">Install Spectre Fleet as trusted</span></a>
                                            </div>
                                        </div>
                                    </div>
                                <?php } else { ?>
                                    <div align="center">
                                        <div class="col-sm-12">
                                            <div style="padding: 60px 0 0;">
                                                <a class="button--arrow landing red" href="#" style="font-family: 'Arial', sans-serif; font-size: 0.8em; white-space: nowrap;" onclick="<?php printJoinChannel(); ?>"><span class="button--arrow-text">X up now in Spectre Fleet!</span></a>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                    </div>
                </div>
            </section>
            <section id="what">
                <nav id="section-menu">
                    <div class="container">
                        <ul class="nav">
                            <li>
                                <a href="/index"><img height="29" src="/img/layout/logo.png" style="margin-top: -5px;" alt="Spectre Logo" width="85"></a>
                            </li>
                            <li>
                                <a href="#warships">Donate</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 style="text-align: center !important; margin-top: 40px !important;">Donate today to support Spectre Fleet!</h2>
	     		        <br><!--
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" style="display: inline; padding-left: 43%;">
				    <input type="hidden" name="cmd" value="_s-xclick">
                                    <input type="hidden" name="hosted_button_id" value="6A4HSN7XDL3YS">
                                    <input type="image" src="http://dev.spectrefleet.com/img/layout/paypal-128.png" style="border-width: 0px !important; width: 92px;" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                                </form> <a href="https://www.patreon.com/Spectre_Fleet?ty=h"><img src="http://dev.spectrefleet.com/img/layout/patreon_logo.png" width="64px" style="margin-top: -80px"></a> -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <p></p>
                            <p></p>
                        </div>
                    </div>
                </div>
            </section>
            <section id="spaceships">
               <div class="container">
                   <div class="row">
                       <div class="col-sm-6">
		           <h2><a href="">Where do donations go... ?</a></h2>
			    <p>The Spectre Fleet Gaming Community provides our services free of charge for all members of the community, and the Community itself is run by a large group of volunteers. Donations help us pay for hosting fees, and any extra donations will be forwarded as rewards to the commanders, developers, and streamers who help make this community possible. If you'd like to make a one-time donation, please use the PayPal link below. To pledge your support on a monthly basis, please check out our Patreon page and associated funding goals. If you'd like to donate your time and become a part of the Spectre Fleet team, please contact a commander and help us make this community the best in Gaming.</p>
	          	    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank" style="display: inline; padding-left: 23%;">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="6A4HSN7XDL3YS">
                                <input type="image" src="http://dev.spectrefleet.com/img/layout/paypal-128.png" style="border-width: 0px !important; width: 92px;" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                            </form> <a href="https://www.patreon.com/Spectre_Fleet?ty=h"><img src="http://dev.spectrefleet.com/img/layout/patreon_logo.png" width="64px" style="margin-top: -80px"></a>
                       </div>
                   </div>
               </div>
            </section>
        </main>
        <?php include "includes/footer.php"; ?>
