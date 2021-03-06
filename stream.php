<?php
require_once "core/IGBFunctions.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Stream | Spectre Fleet</title>
        <?php include "includes/static-header.php"; ?>
    </head>
    <body id="landing" class="animate">
       <?php include "includes/nav.php"; ?>
       <main class="main-content" id="mainstuff" role="main">
            <section id="fc">
                <div class="container">
                    <h2 class="title">Spectre Fleet TV</h2>
                    <iframe src="http://www.twitch.tv/spectrefleet/embed" frameborder="0" scrolling="no" height="620" width="1024"></iframe>
		<div>
		    <form style="float: left; padding-top: 20px; padding-left: 49px;" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
		        <input type="hidden" name="cmd" value="_s-xclick">
		        <input type="hidden" name="hosted_button_id" value="H22NE6BUUMJ62">
		        <input type="image" src="http://spectrefleet.com/img/layout/donate_to_stream.png" style="border-width: 0px !important;" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
	                <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
		    </form>
			<a href="http://twitter.com/Spectre_Fleet" target="_blank"><img src="/img/layout/TwitterLogo_blue.png" title="Twitter" width="64px"/></a>
			<a href="http://www.twitch.tv/spectrefleet" target="_blank"><img src="/img/layout/GlitchIcon_white.png" title="Twitch" width="48px"/></a>
			<a href="https://www.patreon.com/Spectre_Fleet?ty=h" target="_blank"><img src="/img/layout/patreon_logo.png" title="Patreon" width="48px" style="margin-left: 10px;"/></a>
		        <a href="#" style="padding-right: 57px; float: right;" onclick="window.open('http://www.twitch.tv/spectrefleet/chat?popout=', 'Stream Chat', 'directories=no,titlebar=no,toolbar=no,location=no,status=no,menubar=no,scrollbars=no')"><img src="/img/layout/open_stream_chat.png"></a>	
                    </div>
                </div>
            </section>
            <div class="clearfix"></div>
            <section id="videos">
                <div class="container">
                    <h2><a href="#videos">Media</a></h2>
                    <div class="row">
                        <article class="col-sm-6">
                            <h3>The Golden Fleet</h3>
                            <?php if (checkIGB() == 0) { ?>
                                <div class="video-container">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Bk5UkltcX_c" frameborder="0" allowfullscreen></iframe>
                                </div>
                            <?php } ?>
                            <p>Celebrating Spectre Fleet's 1st Birthday and the 150th RVB Ganked Roam. A "Golden Fleet" consisting of over 600 Pilots using Navy Issue Apocalypse battleships and Carrier support, ventured to kill a Titan.</p>
                        </article>
                        <article class="col-sm-6">
                            <h3>The Aldali Project</h3>
                            <?php if (checkIGB() == 0) { ?>
                                <div class="video-container">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/CcwMn4GeiG4" frameborder="0" allowfullscreen></iframe>
                                </div>
                            <?php } ?>
                            <p>The first Supercarrier kill claimed by an NPSI organization too place on October 8th, when Ninja Utioh assembled a small group of people form Spectre Fleet to hunt and catch a Hel.</p>
                        </article>
                    </div>
                    <div class="row">
                        <article class="col-sm-6">
                            <h3>Death by a Thousand Cuts</h3>
                            <?php if (checkIGB() == 0) { ?>
                                <div class="video-container">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/oL8w3IwzrtM" frameborder="0" allowfullscreen></iframe>
                                </div>
                            <?php } ?>
                            <p>On July 27th, Spectre Fleet departed highsec with a fleet of two hundred interceptors intent on completing a full loop of nullsec, requiring over four hundred gate jumps in total. Not thirty jumps into their planned route, they accidentally caught and killed seven carriers.</p>
                        </article>
                        <article class="col-sm-6">
                            <h3>Operation Content Generator</h3>
                            <?php if (checkIGB() == 0) { ?>
                                <div class="video-container">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/j9pUanNf_rk" frameborder="0" allowfullscreen></iframe>
                                </div>
                            <?php } ?>
                            <p>On June 29th, Spectre Fleet teamed up with the other NPSI communities and conducted war games against Provibloc, simulating sov warfare. The fleet of 250 shield battlecruisers began placing SBUs as two support fleets provided overwatch. The resulting 1200 man battle remains the largest in Spectre Fleet's history.</p>
                        </article>
                    </div>
                </div>
            </section>
        </main>
        <?php include "includes/footer.php"; ?>
