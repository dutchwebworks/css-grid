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

<div class="bodyCopy">
	<h1>Dynamic CSS grid system based on URL rewriting of the CSS grid file</h1>
	<form action="" method="post">
		<p>
			Number of columns:<br /> <input type="text" name="number_of_columns" value="<?php echo($numberOfColumns); ?>" /><br /><br /><br />
			Column (grid_1) width:<br /> <input type="text" name="column_width" value="<?php echo($columnWidth); ?>" /><br /><br /><br />
			Gutter width:<br /> <input type="text" name="gutter_width" value="<?php echo($gutterWidth); ?>" />
		</p>
		
		<p>
			<input type="submit" name="submit" value="Change" />
		</p>
	</form>
	
	<p>
		View the CSS file (with URL rewriting): <a href="/themes/base/css/grid-<?php echo($numberOfColumns); ?>-<?php echo($columnWidth); ?>-<?php echo($gutterWidth); ?>.css" target="_blank">grid-<?php echo($numberOfColumns); ?>-<?php echo($columnWidth); ?>-<?php echo($gutterWidth); ?>.css</a>
	</p>
	
	<p>
		<a href="/advanced-example">View advanced CSS Grid system example with a fixed 10 column grid with variable column and gutter sizes</a>.
	</p>
	
	<h5 class="title"><?php echo($numberOfColumns); ?> columns is <?php echo($numberOfColumns); ?> blocks, each <?php echo($columnWidth); ?>px wide with a margin-right of <?php echo($gutterWidth); ?>px acting as gutters* (dark gray). Total width is <?php echo(calc_full_width()); ?>px.</h5>
</div><!-- end .bodyCopy -->

<div id="wrapper" class="gridContainer_<?php echo($numberOfColumns); ?> contentCentered"><!-- alignment on page 'contentLeft', 'contentCentered' or 'contentRight' -->

	<div class="grid_row"><!-- class 'grid_row' used for clearing -->
		<?php 
			// Render the columns
			for($i = 1; $i <= $numberOfColumns; $i++) {
				switch($i) {
					case 1:
						echo('<div class="grid_1 grid_first">grid_1 grid_first</div>');
						break;
					case $numberOfColumns:
						echo('<div class="grid_1 grid_last">grid_1 grid_last</div>');
						break;
					default:
						echo('<div class="grid_1">grid_1</div>');
						break;
				}
			}
		?>
	</div><!-- end .grid_row -->	
</div><!-- end #wrapper -->
</body>
</html>