<?php
require_once "core/IGBFunctions.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Teamspeak | Spectre Fleet</title>
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
                                <a href="#teamspeak">Teamspeak</a>
                            </li>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 style="text-align: center !important; margin-top: -13px !important; margin-bottom: -33px;"><a href="http://www.teamspeak.com/downloads"><img src="/img/layout/download_teamspeak.png"></a>
							<a href="http://invite.teamspeak.com/voice.spectrefleet.com/?channel=Lobby" style="margin-left: 10px"><img src="/img/layout/join_spectre_teamspeak.png"></a></h2>
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
							<h2><a href="#">Teamspeak 3</a></h2>
								<p>
Teamspeak is a voice communication tool that allows players to communicate outside of a game client. The teamspeak is open for everyone to use and is not password protected. If you'd like a custom channel added to the Spectre Fleet Teamspeak, contact a commander and we'll make you a channel to use as you please.
								</p>
                            </div>
                        </div>
                    </div>
                </section>
           </main>
           <?php include "includes/footer.php"; ?>
