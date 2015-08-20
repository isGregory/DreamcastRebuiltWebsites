<?php
	// index.php
	require_once 'directories.php';

	$pageTitle = "Jet Grind Radio";
	include 'dc_header.php';
?>

<h3 align="left"><u><?php echo $pageTitle; ?></u></h3>
<p align="left">
	Welcome to Jet Grind Radio!<br><br>
	If you arrived at this page through the in-game menu of Jet Grind Radio,
	click "Help" for a guide on how to unlock full browsing.<br><br>
	The Graffiti link will take you to a list of graffiti DLC.<br><br>
	The DC Site link will take you to the main dreamcast hub.
</p>
<br>
<br>

<?php
	$from = "index.php";
	include 'dc_footer.php';
?>
