<?php
	// tag_list.php
	require_once 'directories.php';

	$size = isset($_GET["s"]) ? $_GET["s"] : false;

	// Make sure a size is specified
	if ( !$size ) {
		header( 'Location: tags.php' );
	}

	$nameSize = false;
	$minWidth = 0;
	$maxWidth = 0;
	$targetWidth = 0;
	$tableCols = 1;
	if ( TAG_SMALL == $size ) { // 128 x 128
		$nameSize = "Small";
		$minWidth = 0;
		$maxWidth = 192;
		$targetWidth = 128;
		$tableCols = 4;
	} else if ( TAG_LARGE == $size ) { // 256 x 128
		$nameSize = "Large";
		$minWidth = 192;
		$maxWidth = 384;
		$targetWidth = 256;
		$tableCols = 2;
	} else if ( TAG_XTRA_LARGE == $size ) { // 512 x 128
		$nameSize = "Xtra-Large";
		$minWidth = 384;
		$maxWidth = 1024;
		$targetWidth = 512;
	}

	// Make sure 'size' is valid
	if ( !$nameSize ) {
		header( 'Location: tags.php' );
	}

	$filename = "*.[jJ][pP]{[eE],[gG],[eE][gG]}";
	$files = glob( $dirTags . $filename, GLOB_BRACE );
	$pics = array();
	foreach ( $files as $filefound ) {
		list($width, $height) = getimagesize($filefound);
		if ( $width > $maxWidth || $width <= $minWidth ) {
			continue;
		}
		array_push( $pics, $filefound );
	}

	$headSpan = count( $pics );
	if ( $headSpan < 1 ) {
		$headSpan = 1;
	} else if ( $headSpan > $tableCols ) {
		$headSpan = $tableCols;
	}

	$pageTitle = $nameSize . " Graffiti";
	include 'dc_header.php';

?>

<h3 align="left"><?php echo $pageTitle; ?></h3>
<p align="left">
	To download an image, place the cursor over
	it, while holding 'X' press 'A'.
	<br><br>
	<table align="center" cellpadding="3" cellspacing="1" border="0" style="min-width:300px;max-width:540px;" bgcolor="<?php echo $tBG; ?>">
		<tr>
			<th colspan="<?php echo $headSpan; ?>" bgcolor="<?php echo $tHead; ?>"><?php echo $nameSize; ?> Graffiti</th>
		</tr>
		<tr bgcolor="<?php echo ac(); ?>">
		<?php
			$index = 0;
			foreach ( $pics as $filefound ) {
				$index++;
				?>
					<td align='center'>
						<img width="<?php echo $targetWidth; ?>" height="128" src="<?php echo $filefound; ?>">
					</td>
				<?php
				if ( $index % $tableCols === 0 ) {
					?>
					</tr>
					<tr bgcolor="<?php echo ac(); ?>">
					<?php
				}
			}
			if ( 0 === count( $pics ) ) {
				?>
				<td align='center'>No files found.</td>
				<?php
			}
		?>
		</tr>
	</table>
</p>

<?php
	$from = "tags.php";
	include 'dc_footer.php';
?>
