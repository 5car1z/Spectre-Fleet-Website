<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Slack | Spectre Fleet</title>
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
                    <li><a href="/index">Frontpage</a></li>
                    <li><a href="/news/">Spectre News</a></li>
                    <li><a href="/commanders">Commanders</a></li>
                    <li><a href="/doctrines">Doctrines</a></li>
                    <li class="selected"><a href="#">Fleet Tools</a>
                        <ul class="i3">
                            <li class="col1">
                                <a href="/feedback">Fleet Feedback Form</a>
                            </li>
                            <li class="col1">
                                <a href="/slack">Spectre Slack</a>
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
            <iframe src="https://spectrefleet.slack.com/messages/general/" width="100%" height="883" seamless></iframe>
            <?php include "includes/footer.php;" ?>
