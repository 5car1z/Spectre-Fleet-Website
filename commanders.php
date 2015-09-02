<?php
require_once "core/IGBFunctions.php";
?>

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
                    <li class="selected"><a href="/commanders">Our Commanders</a></li>
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
            <section id="what">
                <nav id="section-menu">
                    <div class="container">
                        <ul class="nav">
                            <li>
                                <a href="#command">General Commanders</a>
                            </li>
                            <li>
                                <a href="#fc">Fleet Commanders</a>
                            </li>
                            <li>
                                <a href="#jrfc">Junior FCs</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <h2 style="text-align: right !important;">Our Fleet Commanders</h2>
                        </div>
                    </div>
                </div>
            </section>
            <section id="fc">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div style="text-align: left !important;">
                                <h2 style="text-align: left !important;">General Commanders</h2>
                                <h3 style="text-align: left !important; margin-left: 5px;">The Spectre Bosses</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <?php include "includes/profiles/jayne.php"; ?>
                        </div>
                        <div class="col-sm-6">
                            <?php include "includes/profiles/nonnak.php"; ?>
                        </div>
                        <div class="col-sm-6">
                            <?php include "includes/profiles/douglas.php"; ?>
                        </div>
                    </div>
                </div>
            </section>
            <div class="clearfix"></div>
            </main>
            <?php include "includes/footer.php"; ?>