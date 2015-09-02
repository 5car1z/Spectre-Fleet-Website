<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/core/BrowserCommon.php';
?>

    <div class="push"></div>
        <footer class="main-content" id="footer">
            <div class="wrapper-landing clearfix">
                <div class="col-sm-10">
                    <div class="row">
                        <div class="container">
							<p style="padding-left: 50%">
								<a href="http://twitter.com/Spectre_Fleet"><img src="/img/layout/TwitterLogo_blue.png" width="64px"/></a>
								<a href="https://www.youtube.com/c/SpectrefleetGaming"><img src="/img/layout/YouTube-social-circle_red_128px.png" width="48px"/></a>
							</p>
                            <p style="padding-left: 10%">EVE Online and the EVE logo are the registered trademarks of CCP hf. All rights are reserved worldwide. All other trademarks are the property of their respective owners. EVE Online, the EVE logo, EVE and all associated logos and designs are the intellectual property of CCP hf. All artwork, screenshots, characters, vehicles, storylines, world facts or other recognizable features of the intellectual property relating to these trademarks are likewise the intellectual property of CCP hf. CCP hf. has granted permission to Spectre Fleet to use EVE Online and all associated logos and designs for promotional and information purposes on its website but does not endorse, and is not in any way affiliated with, Spectre Fleet. CCP is in no way responsible for the content on or functioning of this website, nor can it be liable for any damage arising from the use of this website. <a href="legal.txt">Legal information</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="/lib/jquery/jquery-2.1.4.min.js" type="text/javascript"></script>
        <?php if (checkDNT() == 0) { ?>
            <script src="/js/google-analytics.js" type="text/javascript"></script>
        <?php } ?>
    </body>
</html>