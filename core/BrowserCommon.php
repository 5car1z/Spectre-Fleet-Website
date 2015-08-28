<?php

/**
 * Checks whether or not the DNT header is passed.
 *
 * @author Lill Oddleif <lill@lilloddleif.com>
 * @return boolean Whether or not DNT is set.
 * @since 20150828
 */
function checkDNT() {
    return (isset($_SERVER['HTTP_DNT']) && $_SERVER['HTTP_DNT'] == 1 && getCanIgnoreDNT == 1);
}

/**
 * Checks whether or not to ignore DNT.
 *
 * @author Lill Oddleif <lill@lilloddleif.com>
 * @return boolean Whether or not to ignore DNT.
 * @since 20150829
 */
function getCanIgnoreDNT() {
    if (isset($_COOKIE[SpectreFleet.canIgnoreDNT])) {
        return true;
    } else {
        return false;
    }
}

/**
 * Sets a cookie to define a user preference to ignore their DNT flag.
 *
 * @author Lill Oddleif <lill@lilloddleif.com>
 * @since 20150829
 */
function setCanIgnoreDNT() {
    setcookie("SpectreFleet.canIgnoreDNT",
              "true",
              time()+5,184,000, // 60 days
              "/");
}

?>