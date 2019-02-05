<?php include('header.php'); ?>
<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/02/2019
 * Time: 11:16
 */

/** MAAK 4 SECTIONS met elk hun eigen class.  2 sections dragen de classnaam
 * members.  De andere 2 non-members**/
$member = false;

/** Waneer ik enkel de variabele member wijzig naar respetievelijk true or false
 * worden ofwel de members sections getoond of de non-members van de pagina.**/
?>

<h1>LID OF GEEN LID</h1>

<p>if($member) {html}else{hmtl}</p>

<?php if($member) { ?>

	<section class="members">
		<p>LID: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium, aliquam eos exercitationem fugit
		   laborum magnam minus nemo optio pariatur porro possimus praesentium quasi quos sed sequi, tempora, totam ut?</p>
	</section>
	<section class="members">
		<p>LID: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium, aliquam eos exercitationem fugit
		   laborum magnam minus nemo optio pariatur porro possimus praesentium quasi quos sed sequi, tempora, totam ut?</p>

	</section>

<?php } else { ?>

	<section class="non-members">
		<p>NIET BETALEN, GEEN CONTENT!</p>
	</section>
	<section class="non-members">
		<p>NIET BETALEN, GEEN CONTENT!</p>
	</section>

<?php } ?>
<?php include('footer.php'); ?>
