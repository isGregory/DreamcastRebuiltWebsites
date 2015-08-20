<?php
	// help.php
	require_once 'directories.php';

	$pageTitle = "Help";
	include 'dc_header.php';
?>

<h3 align="left"><u><?php echo $pageTitle; ?></u></h3>
<p align="left">
	<h3 align="left"><u>Web Browser</u></h3>
	<p align="left">
		In order to unlock more browsing functions:
		<br><br>
		<table bgcolor="<?php echo $tHead; ?>" align="center" border="0">
			<tr>
				<td>
					<pre>Hold 'A' and press 'Start' 10 times.</pre>
				</td>
			</tr>
		</table>
		<br>

		<b>Unlocked Controls:</b><br>
		<table bgcolor="<?php echo $tHead; ?>" align="center" border="0">
			<tr>
				<td>
					<code>
						Press 'B' + 'Start' for Bookmarks<br>
						Press 'Y' + 'Start' for History<br>
						Press 'X' + 'Start' to Connect
					</code>
				</td>
			</tr>
		</table>
		<br>
		<table align="center" cellpadding="3" cellspacing="1" border="0" bgcolor="<?php echo $tBG; ?>">
			<tr bgcolor="<?php echo $tHead; ?>">
				<th colspan="2">
					To display a URL bar
				</th>
			</tr>
			<tr bgcolor="<?php echo ac(); ?>">
				<td>
					Controller
				</td>
				<td>
					<code>
						Place the cursor near the status bar at the bottom
						of the screen. While holding 'X' press 'A'.
					</code>
				</td>
			</tr>
			<tr bgcolor="<?php echo ac(); ?>">
				<td>
					Keyboard
				</td>
				<td>
					<code>
						Control + 'O'
					</code>
				</td>
			</tr>
		</table>
		<br>
		<b>To bookmark a page:</b><br>
		Navigate to the desired page and then enter the following in the URL bar:<br><br>
		<table bgcolor="<?php echo $tHead; ?>" align="center" border="0">
			<tr>
				<td>
					<pre>x-avefront://---.dream/proc/menu/add-bookmark</pre>
				</td>
			</tr>
		</table>
	</p>
</p>
<br>
<br>

<?php
	$from = "help.php";
	include 'dc_footer.php';
?>
