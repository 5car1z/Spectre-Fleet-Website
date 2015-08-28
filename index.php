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
        <header class="main-content noprint" id="mainheader-responsive">
            <div>
                <a id="mainlogo" href="/index"><img alt="Spectre Fleet" src="/img/layout/logo.png"></a>
            </div>
            <a id="nav-toggle" href="#navigation"><span aria-hidden="true" class="nav-toggle-icon"></span><span class="visuallyhidden">Menu</span></a>
        </header>
        <section id="navigation-responsive">
            <nav id="mainnav">
                <ul class="clearfix">
                    <li class="selected"><a href="/index">Frontpage</a></li>
                    <li><a href="/news/">Spectre News</a></li>
                    <li><a href="/commanders">Our Commanders</a></li>
                    <li><a href="/doctrines">Our Doctrines</a></li>
                    <li><a href="#">Fleet Tools</a>
                        <ul class="i3">
                            <li class="col1">
                                <a href="/feedback">Fleet Feedback Form</a>
                            </li>
                            <li class="col1">
                                <a href="https://spectrefleet.slack.com/messages/general/" target="_blank">Spectre Slack</a>
                            </li>
                            <li class="col1">
                                <a href="/slack-register">Slack Registration</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </section>
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
                            <h3>The content machine</h3>
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
                        <div class="col-sm-7">
                            <div class="video-container">
                                <iframe height="280" src="//www.youtube.com/embed/mIRv2yhS5cA?hd=1&amp;rel=0&amp;autohide=1&amp;showinfo=0;&amp;wmode=transparent" width="500"></iframe>
                            </div>
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
                                <a href="#players">News</a>
                            </li>
                            <li>
                                <a href="#game">Media</a>
                            </li>
                            <li>
                                <a href="#spaceships">What we fly</a>
                            </li>
                            <li>
                                <a href="#play">The Commanders</a>
                            </li>
                            <li>
                                <a href="#partners">Our Partners</a>
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
            <section id="players">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2 style="text-align: left !important;">Spectre News</h2>
                            <div style="border: 15px solid rgba(255,255,255,0.8); -moz-box-shadow:0 0 10px rgba(0,0,0,0.75); -webkit-box-shadow:0 0 10px rgba(0,0,0,0.75); box-shadow:0 0 10px rgba(0,0,0,0.75); margin-bottom:25px;background:#fff;">
                                <script type="text/javascript">document.write('<script type="text/javascript" src="' + ('https:' == document.location.protocol ? 'https://' : 'http://') + 'feed.mikle.com/js/rssmikle.js"><' + '/script>');</script><script type="text/javascript">(function() {var params = {rssmikle_url: "http://spectrefleet.com/news/",rssmikle_frame_width: "100%",rssmikle_frame_height: "350",rssmikle_target: "_blank",rssmikle_font: "Open Sans Condensed, Arial, Helvetica, sans-serif",rssmikle_font_size: "14",rssmikle_border: "off",responsive: "on",rssmikle_css_url: "",text_align: "left",text_align2: "left",corner: "off",scrollbar: "on",autoscroll: "off",scrolldirection: "up",scrollstep: "3",mcspeed: "20",sort: "New",rssmikle_title: "off",rssmikle_title_sentence: "",rssmikle_title_link: "",rssmikle_title_bgcolor: "#9820ca",rssmikle_title_color: "#FFFFFF",rssmikle_title_bgimage: "",rssmikle_item_bgcolor: "rgba(255,255,255,0.0)",rssmikle_item_bgimage: "",rssmikle_item_title_length: "55",rssmikle_item_title_color: "#9820ca",rssmikle_item_border_bottom: "off",rssmikle_item_description: "on",item_link: "off",rssmikle_item_description_length: "150",rssmikle_item_description_color: "#666666",rssmikle_item_date: "gl1",rssmikle_timezone: "Etc/GMT",datetime_format: "%b %e, %Y %l:%M:%S %p",item_description_style: "text+tn",item_thumbnail: "full",article_num: "15",rssmikle_item_podcast: "off",keyword_inc: "",keyword_exc: ""};feedwind_show_widget_iframe(params);})();</script>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h2 style="text-align: left !important;"><a href="http://community.eveonline.com/news/dev-blogs/" target="_blank">Devblogs</a></h2>
                            <div style="border: 15px solid rgba(255,255,255,0.8); -moz-box-shadow:0 0 10px rgba(0,0,0,0.75); -webkit-box-shadow:0 0 10px rgba(0,0,0,0.75); box-shadow:0 0 10px rgba(0,0,0,0.75); margin-bottom:25px;background:#fff;">
                                <script type="text/javascript">document.write('<script type="text/javascript" src="' + ('https:' == document.location.protocol ? 'https://' : 'http://') + 'feed.mikle.com/js/rssmikle.js"><' + '/script>');</script><script type="text/javascript">(function() {var params = {rssmikle_url: "http://newsfeed.eveonline.com/en-US/2/articles/page/1/20",rssmikle_frame_width: "100%",rssmikle_frame_height: "350",rssmikle_target: "_blank",rssmikle_font: "Open Sans Condensed, Arial, Helvetica, sans-serif",rssmikle_font_size: "14",rssmikle_border: "off",responsive: "on",rssmikle_css_url: "",text_align: "left",text_align2: "left",corner: "off",scrollbar: "on",autoscroll: "off",scrolldirection: "up",scrollstep: "3",mcspeed: "20",sort: "New",rssmikle_title: "off",rssmikle_title_sentence: "",rssmikle_title_link: "",rssmikle_title_bgcolor: "#9820ca",rssmikle_title_color: "#FFFFFF",rssmikle_title_bgimage: "",rssmikle_item_bgcolor: "rgba(255,255,255,0.0)",rssmikle_item_bgimage: "",rssmikle_item_title_length: "55",rssmikle_item_title_color: "#9820ca",rssmikle_item_border_bottom: "off",rssmikle_item_description: "on",item_link: "off",rssmikle_item_description_length: "150",rssmikle_item_description_color: "#666666",rssmikle_item_date: "gl1",rssmikle_timezone: "Etc/GMT",datetime_format: "%b %e, %Y %l:%M:%S %p",item_description_style: "text",item_thumbnail: "full",article_num: "15",rssmikle_item_podcast: "off",keyword_inc: "",keyword_exc: ""};feedwind_show_widget_iframe(params);})();</script>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="game">
                <hr>
                <div class="container">
                    <h2>Media</h2>
                        <div class="row">
                            <article class="col-sm-6">
                                <div class="video-container">
                                    <iframe src="//www.youtube.com/embed/QHDkl5CQXF4?hd=1&amp;rel=0&amp;autohide=1&amp;showinfo=1;&amp;wmode=transparent" width="500" height="280"></iframe>
                                </div>
                                <p><a href="http://www.themittani.com/news/storm-kamela-npsi-vs-pandemic-legion">
                                <b>The Storm of Kamela</b></a> On October 2nd, Spectre Fleet formed its largest Battleship fleet, supported by Guardians and Triage Carriers. The fighting was fierce and immediate, as two back to back engagements saw over 60B ISK destoryed in a single system.<br><br><a href="http://www.themittani.com/news/storm-kamela-npsi-vs-pandemic-legion">Read more about this fight on TheMittani.com</a></p>
                            </article>
                            <article class="col-sm-6">
                                <div class="video-container">
                                    <iframe src="//www.youtube.com/embed/CcwMn4GeiG4?hd=1&amp;rel=0&amp;autohide=1&amp;showinfo=1;&amp;wmode=transparent" width="500" height="280"></iframe>
                                </div>
                                <p><a href="http://www.themittani.com/news/alod-aldali-project-0"><b>The Aldali Project</b></a> The first Supercarrier kill claimed by an NPSI organization too place on October 8th, when Ninja Utioh assembled a small group of people form Spectre Fleet to hunt and catch a Hel.<br><br><br><a href="http://www.themittani.com/news/alod-aldali-project-0">Read more about their hunt on TheMittani.com</a> </p>
                            </article>
                        </div>
                        <div class="row">
                            <article class="col-sm-6">
                                <div class="video-container">
                                    <iframe src="//www.youtube.com/embed/oL8w3IwzrtM?hd=1&amp;rel=0&amp;autohide=1&amp;showinfo=1;&amp;wmode=transparent"></iframe>
                                </div>
                                <p><a href="http://www.themittani.com/news/alod-thousand-cuts"><b>Death by a Thousand Cuts</b></a> On July 27th, Spectre Fleet departed highsec with a fleet of two hundred interceptors intent on completing a full loop of nullsec, requiring over four hundred gate jumps in total. Not thirty jumps into their planned route, they accidentally caught and killed seven carriers.<br><br><a  href="http://www.themittani.com/news/alod-thousand-cuts">Read about the fight on TheMittani.com</a></p>  
                            </article>
                            <article class="col-sm-6">
                                <div class="video-container">
                                    <iframe src="//www.youtube.com/embed/j9pUanNf_rk?hd=1&amp;rel=0&amp;autohide=1&amp;showinfo=1;&amp;wmode=transparent"></iframe>
                                </div>
                                <p><a href="https://www.youtube.com/watch?v=j9pUanNf_rk"><b>Operation Content Generator</b></a> On June 29th, Spectre Fleet teamed up with the other NPSI communities and conducted war games against Provibloc, simulating sov warfare. The fleet of 250 shield battlecruisers began placing SBUs as two support fleets provided overwatch. The resulting 1200 man battle remains the largest in Spectre Fleet's history.</p>
                            </article>
                        </div>
                    </div>
                </section>
                <section id="spaceships">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2 style="text-align: left !important;"><a href="doctrines" style="color: #fff !important;">What we fly</a></h2>
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
                <section id="partners">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 style="text-align: left !important;">Our Partners</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <p><strong>RvB Ganked</strong>:<br> Large themed fleets depart every Saturday in the EU TZ, commanded by Guest FCs from different corporations and alliance. Hosted by the RvB Alliances and Mangala Solaris.</p>
                            </div>
                            <div class="col-sm-4">
                                <p><strong>Redemption Road</strong>:<br> A very newbro friendly NPSI community, Redemption Road runs often runs a fleet on Sundays as well as fleets in the AU TZ. Hosted by the Affirmative Alliance and Greygal.</p>
                            </div>
                            <div class="col-sm-4">
                                <p><strong>Stille Gewalt</strong>:<br> The largest and most popular German NPSI community, runs primarily armor cruiser doctrines, and prefers to operate in lowsec. Hosted by the Stille Gewalt corporation and Citriconi.</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <p><strong>Bombers Bar</strong>:<br> A covert ops focused NPSI community, Bombers Bar pioneered the current NPSI model and is great place to learn how to Bomb. Hosted by the Vengance Inc and Tempelman N.</p>
                            </div>
                            <div class="col-sm-6">
                                <p><strong>Frigs for Life</strong>:<br> The newest NPSI community, Frigs for Life is a dedicated frigate roaming community that operates in lowsec. Hosted by the Suddenly Frigates corporation and Wolfvaine.</p>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
            <?php include "includes/footer.php"; ?>
