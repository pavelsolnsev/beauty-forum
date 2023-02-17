<?php
/* Defaults */
$GTMID = "M7T7GF";
$title = '';
$desc = '';
$phone = '8 495 787 8767';
$phone_link = 'tel:'.preg_replace('![^+0-9]+!', '', $phone);
$autofocus = '';
$quote_id = '';
$btn = 'Участвовать бесплатно';

/* Form */
$lander_url = "https://syn.su/lander.php?r=land/index";
$unit = "synergy";
$type = 'uncertain';
$land = 'synergybeauty';
$graccount = '';
$grcampaign = '';
$grtag = '';

switch ($version) {
	case '':

	break;
} // $version

$action = $lander_url . "&amp;unit={$unit}&amp;land={$land}&amp;type={$type}&amp;version={$version}&amp;partner={$partner}&amp;graccount={$graccount}&amp;grcampaign={$grcampaign}&amp;grtag={$grtag}&amp;quote_id={$quote_id}&amp;ignore-thanksall=true";

$unit_payment = 'payments';

$action_payment = $lander_url . "&amp;unit={$unit_payment}&amp;land={$land}&amp;version={$version}&amp;partner={$partner}&amp;graccount={$graccount}&amp;grcampaign={$grcampaign}&amp;grtag={$grtag}&amp;quote_id={$quote_id}&amp;ignore-thanksall=true";


?>
