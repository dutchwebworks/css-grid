<?php
include("includes/functions.php");
include("includes/settings.php");
include("includes/default-html-dtd.inc.php");
?>
<head>

<?php include("includes/default-html-head.inc.php"); ?>

<meta name="description" content="Dynamic CSS grid system" />
<meta name="keywords" content="css, grid, demo" />

<title>CSS grid demo page</title>

</head>

<body class="cssDebug"><!-- class 'cssDebug' used to debug the css grid -->

<?php include("includes/header.inc.php"); ?>

<div id="wrapper" class="grid_container_<?php echo($numberOfColumns); ?> contentCentered"><!-- alignment on page 'contentLeft', 'contentCentered' or 'contentRight' -->
	<div class="grid_row"><!-- class 'grid_row' used for clearing -->
		<?php 
			// Render the columns
			for($i = 1; $i <= $numberOfColumns; $i++) {
				switch($i) {
					case 1:
						echo('<div class="grid_1 grid_first">grid_1 grid_first <span>'.$columnWidth.'px</span></div>');
						break;
					case $numberOfColumns:
						echo('<div class="grid_1 grid_last">grid_1 grid_last <span>'.$columnWidth.'px</span></div>');
						break;
					default:
						echo('<div class="grid_1">grid_1 <span>'.$columnWidth.'px</span></div>');
						break;
				}
				echo("\n");
			}
		?>
	</div><!-- end .grid_row -->	
</div><!-- end #wrapper -->
</body>
</html>