<?php
//This is a configuration file for DB and slack integration.

////////
// Slack
////////
// The xoxs-xxxxx- long string for external integrations from Slack
$TOKEN = "xoxs-3152905981-3224893926-11018690439-c27cb88354";
// Slack registration requires "default channels"
$CHANNELS = "C09H8EPS8,C0A2RJMRU,C0A2RR95Y,C0A2RBURW"; 
// Auth URL
$TEAM_NAME = "spectrefleet";
$BASE_URL = "https://{$TEAM_NAME}.slack.com/api/users.admin.invite?t=";

///////////
// Database
///////////
$DB = "";
$HOST = "localhost";
$USER = "";
$PW = "";

?>
