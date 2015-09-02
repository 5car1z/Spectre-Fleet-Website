<?php
require_once "core/IGBFunctions.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Wargaming | Spectre Fleet</title>
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
                                <a href="#warships">World of Warships</a>
                            </li>
                            <li>
                                <a href="#tanks">World of Tanks</a>
                            </li>
                            <li>
                                <a href="#everyone">For Everyone</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 style="text-align: center !important; margin-top: 40px !important;">Looking to participate in Spectre Fleet's Wargaming Branch? Look no further!</h2>
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
                                <h2 style="text-align: left !important;"><a href="http://worldofwarships.com/">If you play World of Warships</a></h2>
                                <p>Unfortunately, clan support will not be implemented until the end of the closed beta test. However, regardless of clan support, you're more than welcome to be a part of our community and take part in the fun - Spectre will be participating in the Ranked Battles released in Patch 0.4.1. Join the ingame channel "Spectre Fleet" and form a division or simply say hello to the community and hang out! For more information, check out our forum post here.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="play">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-6">
                                <div class="signup">
                                    <h2><a href="http://worldoftanks.com/">If you play World of Tanks</a></h2>
                                    <p>You can join the Spectre Fleet branch in WoT by going to this link and applying, however the Spectre Fleet branch does not currently partake in clan warfare. Once there is enough interest, we'll organize a competitive and regular team, until then this branch will remain a social group to network between casual players. Like warships, feel free to use Spectre as a place to socialize or to find fellow tankers to platoon with!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="spaceships">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2 style="text-align: left !important;"><a href="#spaceships">For Everyone</a></h2>
                                <p>Feel free to make use of the Spectre Fleet Open Teamspeak, as well as the Spectre Fleet Slack. Teamspeak is a program used to facilitate voice communications between players, and Slack is a communication tool that can be used to organize events or simply talk with other members of the community. Come say hello!</p>
                            </div>
                        </div>
                    </div>
                </section>
           </main>
           <?php include "includes/footer.php"; ?>
