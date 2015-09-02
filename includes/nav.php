<?php
    function getPage($s){
        if ($_SERVER['PHP_SELF'] == "/{$s}.php"){
            echo 'class="selected"';
        }
    }
?>

<header class="main-content noprint" id="mainheader-responsive">
    <div>
        <a id="mainlogo" href="/"><img alt="Spectre Fleet" src="/img/layout/logo.png"></a>
    </div>
    <a id="nav-toggle" href="#navigation"><span aria-hidden="true" class="nav-toggle-icon"></span><span class="visuallyhidden">Menu</span></a>
</header>
<section id="navigation-responsive">
    <nav id="mainnav">
        <ul class="clearfix">
            <li <?php getPage("news"); ?> ><a href="/news">Spectre News</a></li>
            <li <?php getPage("commanders"); ?>  ><a href="/commanders">Commanders</a></li>
            <li <?php getPage("doctrines"); ?> ><a href="/doctrines">Doctrines</a></li>
            <li <?php getPage("feedback"); ?> ><a href="/feedback">Fleet Feedback Form</a> </li>
            <li><a href="#">Tools</a>
                <ul class="i2">
                    <li class="col1">
                        <a href="https://spectrefleet.slack.com/messages/general/" target="_blank">Spectre Slack</a>
                    </li>
                    <li class="col1">
                        <a href="/slack-register">Slack Registration</a>
                    </li>
                </ul>
            </li>
            <li <?php getPage("stream") ?>><a href="/stream">Stream</a>
            </li>
        </ul>
    </nav>
</section>

