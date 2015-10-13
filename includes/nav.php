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
			<li <?php getPage("commanders"); getPage("doctrines"); ?> ><a href="#">Eve Online</a>
				<ul class="i2">
					<li><a href="#">Join Spectre</a></li>
					<!--<li><a href="/commanders">Commanders</a></li>-->
					<li><a href="/doctrines">Doctrines</a></li>
				</ul>
			</li>
			<li <?php getPage("wargaming"); ?> ><a href="/wargaming">Wargaming</a>
				<ul class="i1">
				<li><a href="/wargaming">Join Spectre</a></li>
			</ul>
			</li>
			<li <?php getPage("other-games"); ?> ><a href="/other-games">Other Games</a>
			</li>
            <li <?php getPage("feedback");getPage("slack-register");getPage("teamspeak"); ?> ><a href="#">Tools</a>
                <ul class="i6">
					<li><a href="/feedback">Feedback Form</a> </li>
					<li class="col1"><a href="/teamspeak">Teamspeak 3</a> </li>
					<li class="col1"><hr><li>
					<li class="col1"><a href="https://spectrefleet.slack.com/messages/general/" target="_blank">Open Slack</a></li>
					<li class="col1"><a href="/slack-about">About Slack</a></li>
					<li class="col1"><a href="/slack-register">Register</a></li>
					</li>
                </ul>
            </li>
            
            <li <?php getPage("stream") ?>><a href="/stream">Stream</a></li>
			<li <?php getPage("team") ?>><a href="/team">Our Team</a></li>
		<!--<li <?php getPage("donate"); ?> ><a href="/donate">Donate</a>
            </li>
            -->
        </ul>
    </nav>
</section>

