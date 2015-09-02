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
            <section id="intro">
                <div class="texture"></div>
                <div id="vidcontainer">
                    <div class="inner">
                        <video autoplay id="vid2000" loop poster="/img/layout/cover.jpg">
                        <source src="/assets/eve_background.webm" type="video/webm"></video>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
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
                                <a href="#what">About Spectre Fleet</a>
                            </li>
                            <li>
                                <a href="#spaceships">What we fly</a>
                            </li>
                            <li>
                                <a href="#play">The Commanders</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h2 style="text-align: center !important;">About Spectre Fleet</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <p>Spectre Fleet is the largest and most active NPSI PVP community in Eve Online. Hosted from in-game channel of the same name, Spectre Fleet has become a place where PvP pilots can hangout, join fleets, and experience no-holds-barred PvP in every region of space, every single day of the week, with fleet commanders from different corporations and alliances.</p><p>Here are some testimonials about Spectre Fleet and the NPSI playstyle: </p>
                            <p>&quot;Although not new to EVE, the public fleet concept is becoming increasingly popular, and is a concept most notably demonstrated by Spectre Fleet. Public fleets are - as their title implies - open to anyone and everyone with no strings attached. Pilots decide on a doctrine, form up, and go searching for a fight against anything that they can find.&quot;</p><p style="text-align: right !important;"> - <i>TheMittani.com</i></p>
                            <p>&quot;Spectre Fleets are run frequently from the in-game channel: Spectre Fleet. Interested pilots simply join the channel and either organize or join up with a fleet. There are no API checks, interviews, or minimum skillpoint requirements to join. When a Fleet Commander decides to host a fleet, they advertise in the channel what type of doctrine they want to use and where they're going to go to look for fights. Anyone who is interested in joining them, speaks up and receives a fleet invite.&quot;</p><p style="text-align: right !important;"> - <i>CCP Eterne</i></p>
                        </div>
                        <div class="col-sm-6">
                            <p>&quot;We do not take PVP personally, and have no problem whatsoever with being shot at […] by you or your corporation. This has no effect on our attitude towards you or your access to our classes and services. We enjoy fights, and we'll actually be much more offended if you don't shoot us! Similarly, if we engage you without provocation (which we will) this doesn't mean we don't like you, it just means we like to PvP. This is true regardless of how friendly we are with you and whether or not you've taken classes with us in the past. We observe the rules of NPSI but other than that, you're fair game.&quot;</p><p style="text-align: right !important;"> - <i>Azual Skoll, EVE Altruist</i></p>
                            <p>&quot;NPSI will soon become ubiquitous for those seeking PvP in EVE, and in time surpass even the best NBSI organizations of today. NPSI communities have gone from strength to strength over the past few years, and it has been a point of personal pride to see many new communities come into existence along with many new friendships made as a result of the ties people discover outside the outmoded corporate system. The future of good clean PvP in EVE is to be found in NPSI.&quot;</p><p style="text-align: right !important;"> - <i>Mangala Solaris, CSM9</i></p>
                        </div>
                    </div>
                </div>
            </section>
                <section id="spaceships">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2 style="text-align: left !important;"><a href="doctrines">What we fly</a></h2>
                                <p>In Spectre Fleet, what we fly are where we fly changes every day. Ranging from frigate roams and battleship fleets, to classic cruisers and sniping destroyers, the fleet command will always let you know what ship to purchase and where to stage. While flying the doctrine ships is greatly encouraged, if you are unable to or simply do not want to, you will still be allowed to attend the fleet. Please speak to your FC for a suitable replacement or alternate ship if this is the case.<br><br>Regardless, you will never be turned away from a fleet.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="play">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-6">
                                <div class="signup">
                                    <h2><a href="commanders">Our Fleet Commanders</a></h2>
                                    <p>The Fleet Commanders of Spectre Fleet are divided into several groupings. There are the commanders, who are in charge of the administration and management of the FC Team. There are also the Fleet Commanders, who take out fleets regularly and have proven themselves to be competent at leading NPSI fleets. Lastly, there are the Junior Fleet Commanders who are either still learning how to FC, or are simply new to the NPSI community. The Fleet Commanders of Spectre Fleet come from a variety of corporations and alliances throughout EvE, with no one group being favoured or excluded from participation. From large sov holding alliances, to smaller elite PvP groups, Spectre Fleet Commanders come from a wide variety of backgrounds, but are above all else, skilled.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
           </main>
            <?php include "includes/footer.php"; ?>
