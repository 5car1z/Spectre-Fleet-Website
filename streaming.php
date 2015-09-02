<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Spectre Fleet Commanders - The largest and best NPSI Community in EVE Online</title>
        <?php include "includes/static-header.php"; ?>
    </head>
    <body id="landing" class="animate">
        <header class="main-content noprint" id="mainheader-responsive">
            <div>
                <a id="mainlogo" href="/index"><img alt="Spectre Fleet" src="/img/layout/logo.png"></a>
            </div>
            <a id="nav-toggle" href="#navigation"><span aria-hidden="true" class="nav-toggle-icon"></span><span class="visuallyhidden">Menu</span></a>
        </header>
        <section id="navigation-responsive">
            <nav id="mainnav">
                <ul class="clearfix">
                    <li><a href="/index">Frontpage</a></li>
                    <li><a href="/news/">Spectre News</a></li>
                    <li class="selected"><a href="/commanders">Commanders</a></li>
                    <li><a href="/doctrines">Doctrines</a></li>
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
            <section id="what">
                <nav id="section-menu">
                    <div class="container">
                        <ul class="nav">
                            <li>
                                <a href="#command">Spectre's Twitch.tv Stream</a>
                            </li>
                            <li>
                                <a href="#streamers">Featured Streamers</a>
                            </li>
                            <li>
                                <a href="#recruitment">Streamer Recruitment</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <h2 style="text-align: right !important;">Spectre Streaming</h2>
                        </div>
                    </div>
                </div>
            </section>
            <section id="command">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div style="text-align: left !important;">
                                <h2 style="text-align: left !important;">Spectre's Twitch.tv Stream</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-sm-6">
                             <a class="embedly-card" href="http://www.twitch.tv/spectrefleet">SpectreFleet</a>
                             <script src="/js/twitch.min.js" type="text/javascript"></script>
                        </div>
                    </div>
                </div>
            </section>
            <div class="clearfix"></div>
                <section id="streamers">
                    <div class="container">
                        <div class="col-sm-12">
                            <div style="text-align: left !important;">
                                <h2 style="text-align: right !important;">Featured Streamers</h2>
                                <h3 style="text-align: right !important; margin-right: 5px; margin-top: -15px;">Streaming on behalf of Spectre Fleet</h3>
                            </div>
                        </div>
                        <div class="row">
                            <article class="col-sm-3">
                                <?php include "includes/profiles/alterari.php"; ?>
                            </article>
                        </div>
                    </div>
                </section>
                <section id="recruitment" style="background:#fff; color:">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div style="text-align: left;">
                                    <h2>Streamer Recruitment</h2>
                                    <h3>Want to stream for Spectre?</h3>
                                    <p style="text-align: left;">Streamer recruitment info goes here</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
            <?php include "includes/footer.php"; ?>
