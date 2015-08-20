<?php
	// tag_list.php
	require_once 'directories.php';

	$size = isset($_GET["s"]) ? $_GET["s"] : false;

	// Make sure a size is specified
	if ( !$size ) {
		header( 'Location: tags.php' );
	}

	$nameSize = false;
	$targetWidth = 0;
	$targetHeight = 0;
	if ( TAG_SMALL == $size ) {
		$nameSize = "Small";
		$targetWidth = 128;
		$targetHeight = 128;
	} else if ( TAG_LARGE == $size ) {
		$nameSize = "Large";
		$targetWidth = 256;
		$targetHeight = 128;
	} else if ( TAG_XTRA_LARGE == $size ) {
		$nameSize = "Xtra-Large";
		$targetWidth = 512;
		$targetHeight = 128;
	}

	// Make sure size is valid
	if ( !$nameSize ) {
		header( 'Location: tags.php' );
	}

	$filename = "*.[jJ][pP]{[eE],[gG],[eE][gG]}";
	$files = glob( $dirTags . $filename, GLOB_BRACE );

	$pageTitle = $nameSize . " Graffiti";
	include 'dc_header.php';

?>

<h3 align="left"><u><?php echo $pageTitle; ?></u></h3>
<p align="left">
	To download an image, place the cursor over
	it, while holding 'X' press 'A'.
	<br><br>
	<table align="center" cellpadding="3" cellspacing="1" border="0" style="min-width:300px;max-width:540px;" bgcolor="<?php echo $tBG; ?>">
		<tr>
			<th bgcolor="<?php echo $tHead; ?>"><?php echo $nameSize; ?> Graffiti</th>
		</tr>

		<?php
			foreach ( $files as $filefound ) {
				list($width, $height) = getimagesize($filefound);
				if ( $width !== $targetWidth || $height !== $targetHeight ) {
					continue;
				}
				?>
				<tr bgcolor="<?php echo ac(); ?>">
					<td align='center'>
						<img src="<?php echo $filefound; ?>">
					</td>
				</tr>
				<?php
			}
			if ( 0 === count( $files ) ) {
				?>
				<tr bgcolor="<?php echo ac(); ?>">
					<td align='center'>
						No files found.
					</td>
				</tr>
				<?php
			}
		?>
	</table>
</p>

<?php
	$from = "tags.php";
	include 'dc_footer.php';
?>
