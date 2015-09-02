<?php
require_once "core/IGBFunctions.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Commanders | Spectre Fleet</title>
        <?php include "includes/static-header.php"; ?>
    </head>
    <body id="landing" class="animate">
        <?php include "includes/nav.php"; ?>
       <main class="main-content" id="mainstuff" role="main">
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
                        <div class="col-sm-6-command">
                            <?php include "includes/profiles/jayne.php"; ?>
                        </div>
                        <div class="col-sm-6-command">
                            <?php include "includes/profiles/nonnak.php"; ?>
                        </div>
                        <div class="col-sm-6-command">
                            <?php include "includes/profiles/douglas.php"; ?>
                        </div>
                    </div>
                </div>
            </section>
            <div class="clearfix"></div>
            </main>
            <?php include "includes/footer.php"; ?>
