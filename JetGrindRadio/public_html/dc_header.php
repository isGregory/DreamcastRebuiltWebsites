<?php
//dc_header.php

$tBG = "#6E6E6E";
$tHead = "#CCCCCC";
$indexHead = "#47B247";
$indexSub = "#222222";
$C1 = "#B2FFB2";
$C2 = "#E0FFE0";
$cur = $C1;

// Get browser information
// Example. Planetweb 2.6 returns:
// Mozilla/3.0 (Planetweb/2.606 JS SSL VoIP US; Dreamcast US)
// Example. Jet Grind Radio returns:
// Mozilla/3.0 (DreamKey/1.0; SEGA/JETSETRADIO)
$browser = $_SERVER['HTTP_USER_AGENT'];

// Check if their browser is dreamcast.
// This allows us the option to serve pages
// differently to dreamcast than we would to a PC
if ( false !== strpos( strtolower( $browser ), 'dream' ) ) {
	$dreamBrowser = true;
} else {
	$dreamBrowser = false;
}

function resetAC() {
	global $cur, $C1;
	$cur = $C1;
}

// Used to alternate colors (ac) between the
// two main ones for the rows of tables.
function ac() {
	global $cur, $C1, $C2;

	if ( $cur == $C1 ) {
		$cur = $C2;
	} else {
		$cur = $C1;
	}
	return $cur;
}
?>
<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">

	<html>

		<head>
			<title><?php echo $pageTitle; ?></title>
		</head>

		<body link="#0022EE" vlink="#0022EE" alink="red" text="black" bgcolor="grey" background='<?php echo $dirImages; ?>tile.gif'>
			<?php
				if ( $dreamBrowser ) {
				?>
				<EMBED type=application/x-dreamcast-lcdticker
					text="Pirate Radio!"
					behavior=alternate
					font=24
					loop=10
					hidden=true>
				<?php
				}
			?>
			<font face="Helvetica">
				<table cellpadding="2" cellspacing="1" border="0" width="500" align="center" bgcolor="#EEEEEE">

					<!-- Main Title Image -->
					<tr bgcolor="<?php echo $tHead; ?>">
						<th align="center"><img src="<?php echo $dirImages; ?>title_dc.gif" alt="" align="center" width="500" height="50"></th>
					</tr>

					<!-- Body -->
					<tr background="<?php echo $dirImages; ?>tile2.gif"><td align="center">

						<table cellpadding="2" cellspacing="0" border"0" width="100%">
							<tr>
								<!-- Left Directory Box -->
								<td style="padding:0px;" valign="top" width="120" height="1">
									<table cellpadding="3" cellspacing="1" border="0" width="120" height="100%" bgcolor="<?php echo $tBG; ?>">
										<tr align="center" height="20px" bgcolor="<?php echo $indexHead; ?>">
											<td><b>Contents</b></td>
										</tr>
										<tr height="20px" bgcolor="<?php echo ac(); ?>">
											<td><a href="<?php echo $root; ?>index.php">Home</a></td>
										</tr>
										<tr height="20px" bgcolor="<?php echo ac(); ?>">
											<td><a href="<?php echo $root; ?>tags.php">Graffiti</a></td>
										</tr>
										<tr height="20px" bgcolor="<?php echo ac(); ?>">
											<td><a href="<?php echo $root; ?>help.php">Help</a></td>
										</tr>
										<tr height="20px" bgcolor="<?php echo ac(); ?>">
											<td><a href="http://www.sega.com">DC Site</a></td>
										</tr>
										<?php // The following row is a buffer ?>
										<tr bgcolor="<?php echo $C1; ?>">
											<td></td>
										</tr>
									</table>
								</td>
								<!-- Right Side Body Content -->
								<td>
