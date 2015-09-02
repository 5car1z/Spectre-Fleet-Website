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
                                <a href="#what">About Spectre Fleet</a>
                            </li>
                            <li>
                                <a href="#spaceships">What we Play</a>
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
                            <p>Spectre Fleet is a multi-platform competitive gaming community that was founded in 2013, in order to bring competitive players together. What started as a small group of friends who met through Eve Online, has since become a large community with over 150 staff and 7000 active members in every major timezone. As a community, we focus on the social aspect of gaming, providing a place where gamers can hang out and play together, with minimal commitment, while still being a part of a group that likes to play - and likes to win. Welcome to the Spectre Fleet Gaming Community.</p>
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
                                <h2 style="text-align: left !important;"><a href="doctrines">What we Play</a></h2>
                                <p>Spectre Fleet originated from the game "Eve Online" and still maintains a large and active presence. Players are encouraged to join for regularly scheduled events hosted by different members of the community, and can join regardless of background or experience. More recently, Spectre Fleet has expanded into the Wargaming trilogy of games, focusing on World of Warships and World of Tanks. Outside of these two titles, members of Spectre Fleet play various games together using our services, such as Garry's Mod, League of Legends, or even Indie Games on Steam.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="play">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-6">
                                <div class="signup">
                                    <h2><a href="commanders">Our Commanders</a></h2>
                                    <p>The staff of Spectre Fleet all come from various gaming backgrounds, and help run events, tournaments, and moderate the community on a day to day basis. Whether it's leading a fleet in Eve Online or helping to keep the servers up and running, these unsung heroes are the people who keep this community alive and thriving. If you're looking for a commander, you can either look for them by name on our commanders page, or look for their special tags on the Spectre Fleet Open Teamspeak.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
           </main>
            <?php include "includes/footer.php"; ?>
