<?php
$numberOfColumns = $_POST['number_of_columns'] ? $_POST['number_of_columns'] : 10;
$columnWidth = $_POST['column_width'] ? $_POST['column_width'] : 95;
$gutterWidth = $_POST['gutter_width'] ? $_POST['gutter_width'] : 10;

function calc_full_width() {
	$full_width = $GLOBALS['numberOfColumns'] * $GLOBALS['columnWidth'] + ($GLOBALS['numberOfColumns'] -1) * $GLOBALS['gutterWidth'];
	return $full_width;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="nl" xml:lang="nl">
<!-- end include: default-html-dtd.inc.shtml -->
<head>

<!-- begin include: default-html-head.inc.shtml -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="content-language" content="nl" />

<meta http-equiv="content-style-type" content="text/css" />
<meta http-equiv="content-script-type" content="text/javascript" />

<meta name="robots" content="index all,follow all" />
<meta name="MSSmartTagsPreventParsing" content="true" />
<meta http-equiv="imagetoolbar" content="no" /> 

<meta name="author" content="Poort80 - Frontend" />
<meta name="copyright" content="&copy; Poort80 Vorm + Functie online" />

<!-- Rewritten URL: 10 column based CSS grid system, use the two numbers in the CSS file URL to change the 'column' width and the 'gutter' width, like: 'grid-120-10.css' -->
<link href="css/grid-<?php echo($numberOfColumns); ?>-<?php echo($columnWidth); ?>-<?php echo($gutterWidth); ?>.css" type="text/css" rel="stylesheet" media="screen" />

<!--[if lt ie 7]><link href="css/ie6.css" type="text/css" rel="stylesheet" media="screen" /><![endif]-->

<meta name="description" content="Dynamic CSS grid system" />
<meta name="keywords" content="grid, demo, poort80, frontend" />

<style type="text/css" media="all">
body {
	font-family:Geneva, Arial, Helvetica, sans-serif;
	font-size: 14px;
}

.bodyCopy,
form input {
	text-align: center;
}

.title {
	clear: both;
	margin-left: 12px;
	margin-top: 20px;
	margin-bottom: 5px;
	color: #00f;
}
strong {
	color: #f00;
}
#wrapper {
	margin: 0 auto;
}
</style>

<title>Poort80 CSS grid demo page for Summon</title>

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
		View the CSS file (with URL rewriting): <a href="css/grid-<?php echo($numberOfColumns); ?>-<?php echo($columnWidth); ?>-<?php echo($gutterWidth); ?>.css" target="_blank">grid-<?php echo($numberOfColumns); ?>-<?php echo($columnWidth); ?>-<?php echo($gutterWidth); ?>.css</a>
	</p>
	
	
	<h5 class="title"><?php echo($numberOfColumns); ?> columns is <?php echo($numberOfColumns); ?> blocks, each <?php echo($columnWidth); ?>px wide with a margin-right of <?php echo($gutterWidth); ?>px acting as gutters* (dark gray). Total is <?php echo(calc_full_width()); ?>px wide.</h5>
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