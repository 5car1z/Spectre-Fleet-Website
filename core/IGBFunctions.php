<?php

/**
 * Checks whether or not the client is using the EVE IGB.
 *
 * @author Lill Oddleif <lill@lilloddleif.com>
 * @return boolean Whether or not the IGB is used.
 * @since 20150827
 */
function checkIGB() {
    if (preg_match('/EVE-IGB/', $_SERVER['HTTP_USER_AGENT']) {
        return true;
    } else {
        return false;
    }
}

/**
 * Prints a JavaScript function used in the IGB to display a fitting
 * represented by the DNA string in the fitting parameter.
 *
 * @author Lill Oddleif <lill@lilloddleif.com>
 * @param String $fitting A ship DNA string.
 * @since 20150827
 */
function printFitting($fitting) {
    echo "CCPEVE.showFitting('" . $fitting . "')";
}

/**
 * Prints a JavaScript function used in the IGB to join the ingame
 * Spectre Fleet chat channel.
 *
 * @author Lill Oddleif <lill@lilloddleif.com>
 * @since 20150827
 */
function printJoinChannel() {
    echo "CCPEve.joinChannel('Spectre Fleet')";
}

/**
 * Prints a JavaScript function used in the IGB to join the ingame
 * Spectre Fleet mailing list.
 *
 * @author Lill Oddleif <lill@lilloddleif.com>
 * @since 20150827
 */
function printJoinMailingList() {
    echo "CCPEve.joinMailingList('Spectre Fleet')";
}

/**
 * Prints a JavaScript function used in the IGB to request trust for
 * the Spectre Fleet website.
 *
 * @author Lill Oddleif <lill@lilloddleif.com>
 * @since 20150827
 */
function printRequestTrust() {
    echo "CCPEve.requestTrust('http://spectrefleet.com')";
}

/**
 * Refreshes the page.
 *
 * @author Lill Oddleif <lill@lilloddleif.com>
 * @since 20150827
 */
function refresh() {
    header('Location: '.$_SERVER['REQUEST_URI']);
}

?>
