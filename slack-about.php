<?php
require_once "core/IGBFunctions.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Spectre Fleet - The largest and best NPSI Community in EVE Online</title>
        <?php include "includes/static-header.php"; ?>
    </head>
    <body id="landing">
        <?php include "includes/nav.php"; ?>
       <main class="main-content" id="mainstuff" role="main">
            <section id="intro" style="padding-top: 20px !important;">
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
                                <a href="what">What is Slack?</a>
                            </li>
                            <li>
                                <a href="#tanks">Already use IRC/XMPP?</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </section>
                <section id="spaceships">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
								<h2><a href="#">What is Slack?</a></h2>
								<p>
Slack is a cross-platform collaboration and communication tool that provides real time messaging, file sharing, and group conversations. In Spectre Fleet, we use Slack as a hangout, a place to talk about games, and a network to find new people to play with. Available on both mobile and browser, you can always keep in touch with the community and find out about upcoming events or the latest happenings.
								</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="play">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-6">
                                <div class="signup">
									<h2><a href="#">Already use IRC or XMPP?</a></h2>
									<p>
Good News! Slack has gateways that will allows you to connect to the Spectre Fleet Slack using those protocols. Whether it's in your browser, on your mobile device, or integrated with  a program you already use - Slack is easy to use and will help you keep both connected and involved.
								</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
				
				 <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 style="text-align: center !important; margin-top: 20px !important;"><a href="http://dev.spectrefleet.com/slack-register">Join Spectre Fleet Slack!</a></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <p></p>
                            <p></p>
                        </div>
                    </div>
                </div>
           </main>
           <?php include "includes/footer.php"; ?>
