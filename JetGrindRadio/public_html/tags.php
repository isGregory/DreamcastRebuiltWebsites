<?php
	// tags.php
	require_once 'directories.php';

	$pageTitle = "Graffiti";
	include 'dc_header.php';
?>

<h3 align="left"><u><?php echo $pageTitle; ?></u></h3>
<p align="left">
	<table align="center" cellpadding="3" cellspacing="1" border="0" style="min-width:300px;max-width:540px;" bgcolor="<?php echo $tBG; ?>">
		<tr>
			<th bgcolor="<?php echo $tHead; ?>">Graffiti Size</th>
		</tr>
		<tr bgcolor="<?php echo ac(); ?>">
			<td align='center'>
				<a href='tag_list.php?s=<?php echo TAG_SMALL; ?>'
					style='text-decoration:none'>
					Small
				</a>
			</td>
		</tr>
		<tr bgcolor="<?php echo ac(); ?>">
			<td align='center'>
				<a href='tag_list.php?s=<?php echo TAG_LARGE; ?>'
					style='text-decoration:none'>
					Large
				</a>
			</td>
		</tr>
		<tr bgcolor="<?php echo ac(); ?>">
			<td align='center'>
				<a href='tag_list.php?s=<?php echo TAG_XTRA_LARGE; ?>'
					style='text-decoration:none'>
					Xtra-Large
				</a>
			</td>
		</tr>

	</table>
</p>

<?php
	$from = "tags.php";
	include 'dc_footer.php';
?>
