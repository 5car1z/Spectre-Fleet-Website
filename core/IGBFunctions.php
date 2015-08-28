<?php

/**
 * Checks whether or not the client is using the EVE IGB.
 *
 * @author Lill Oddleif <lill@lilloddleif.com>
 * @return boolean Whether or not the IGB is used.
 * @since 20150827
 */
function checkIGB() {
    if (preg_match('/EVE-IGB/', $_SERVER['HTTP_USER_AGENT'])) {
        return true;
    } else {
        return false;
    }
}

/**
 * Checks whether or not the client has issued trust.
 * 
 * @author Lill Oddleif <lill@lilloddleif.com>
 * @return boolean Whether or not trust is issues.
 * @since 20150828
 */
function checkTrust() {
	return (isset($_SERVER['HTTP_EVE_TRUST']) && $_SERVER['HTTP_EVE_TRUST'] == "Yes");
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
 * Prints a JavaScript function used in the IGB to open a showInfo
 * blob.
 * 
 * @author Lill Oddleif <lill@lilloddleif.com>
 * @param integer $typeID Type ID of item to show info on.
 * @param integer $itemID Optional itemID of specific item of type
 *                        $typeID to show info on. This is required for
 *                        specific types of items, such as solar
 *                        systems, stations, regions and
 *                        constellations. Passing 0 will not print an
 *                        itemID in the JavaScript function.
 * @since 20150828
 */
function printShowInfo() {
    if ($itemID == "0") {
    	echo "CCPEVE.showInfo(" . $typeID . ")";
    } else {
    	echo "CCPEVE.showInfo(" . $typeID . ", " . $itemID . ")";
    }
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
