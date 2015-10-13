<?php
require_once "core/IGBFunctions.php";

$team = array();
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
                                <h2 style="text-align: left !important;">Our Team</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
						<div class="col-sm-6-command">
							<h4>Jayne</h4>
							<h1 style="margin-left: -10px;">President</h1>
							<p>
								<img src="//image.eveonline.com/Character/91688663_256.jpg" style="margin-top: -25px;" alt="Jayne" onclick="<?php printShowInfo(1377,91688663); ?>">
							</p>
						</div>
					</div>
                    <div class="row">
					<?php
						foreach($team as $member)
						{
							?><div class="col-sm-6-command">
								<h4><?php echo $member['name']; ?></h4>
								<h1 style="margin-left: -10px;"><?php echo $member['title']; ?></h1>
								<p>
									<img src="//image.eveonline.com/Character/<?php echo $member['id']; ?>_256.jpg" style="margin-top: -25px;" alt="<?php echo $member['name']; ?>" onclick="<?php printShowInfo(1377,$member['id']); ?>">
								</p>
							</div>
							<?php
						}
					?>
                    </div>
                </div>
            </section>
            <div class="clearfix"></div>
            </main>
            <?php include "includes/footer.php"; ?>
