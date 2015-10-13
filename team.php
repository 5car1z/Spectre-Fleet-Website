<?php
require_once "core/IGBFunctions.php";

$team = array();
$team[] = array('id' => 91688663, 'name' => 'Jayne', 'title' => 'CEO and President');
$team[] = array('id' => 92092845, 'name' => 'Nonnak', 'title' => 'Vice President');
$team[] = array('id' => 145536783, 'name' => 'Vorn', 'title' => 'Chief of Staff');
$team[] = array('id' => 91089809, 'name' => 'Doug', 'title' => 'COO');
$team[] = array('id' => 1978535095, 'name' => 'Ibn', 'title' => 'CTO');
$team[] = array('id' => 328194260, 'name' => 'Aeonz', 'title' => 'CMO');
$team[] = array('id' => 94633294, 'name' => 'Elo', 'title' => 'CPO');

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Team | Spectre Fleet</title>
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
					<?php
						foreach($team as $member)
						{
							?><div class="col-sm-6-command">
								<h4><?php echo $member['name']; ?></h4>
								<p>
									<img src="//image.eveonline.com/Character/<?php echo $member['id']; ?>_256.jpg" alt="<?php echo $member['name']; ?>" onclick="<?=printShowInfo(1377,$member['id'])?>">
								</p>
							</div>
							<?
						}
					?>
                    </div>
                </div>
            </section>
            <div class="clearfix"></div>
            </main>
            <?php include "includes/footer.php"; ?>
