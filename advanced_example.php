<?php
$numberOfColumns = 10;
$columnWidth = $_POST['column_width'] ? $_POST['column_width'] : 80;
$gutterWidth = $_POST['gutter_width'] ? $_POST['gutter_width'] : 10;
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

<!-- Rewritten URL: <?php echo($numberOfColumns); ?> column based CSS grid system, use the two numbers in the CSS file URL to change the 'column' width and the 'gutter' width, like: 'grid-10-120-10.css' -->
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
			Number of columns:<br /> <input type="text" name="number_of_columns" value="<?php echo($numberOfColumns); ?>" disabled="disabled" /><br /><br /><br />
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
</div><!-- end .bodyCopy -->

<div id="wrapper" class="gridContainer_10 contentCentered"><!-- alignment on page 'contentLeft', 'contentCentered' or 'contentRight' -->

	<h5 class="title">Full width of the grid</h5>

	<div class="grid_row">

		<div class="grid_10 grid_first">grid_10 grid_first</div><!-- full width of the grid -->
	</div>
	
	<h5 class="title">10 columns is 10 blocks, each 87px wide with a margin-right of 12px acting as gutters* (dark gray)</h5>

	<div class="grid_row"><!-- class 'grid_row' used for clearing -->
		<div class="grid_1 grid_first">grid_1 grid_first</div>
		<div class="grid_1">grid_1</div>

		<div class="grid_1">grid_1</div>
		<div class="grid_1">grid_1</div>
		<div class="grid_1">grid_1</div>
		<div class="grid_1">grid_1</div>
		<div class="grid_1">grid_1</div>
		<div class="grid_1">grid_1</div>

		<div class="grid_1">grid_1</div>
		<div class="grid_1 grid_last">grid_1 grid_last</div>
	</div><!-- end .grid_row -->	

	<h5 class="title">5 columns: 1 column is 2x 'grid_1' + 1x gutter is 186px wide</h5>
	
	<div class="grid_row"><!-- class 'grid_row' used for clearing -->
		<div class="grid_2 grid_first">grid_2  grid_first</div>
		<div class="grid_2">grid_2</div>

		<div class="grid_2">grid_2</div>
		<div class="grid_2">grid_2</div>
		<div class="grid_2 grid_last">grid_2 grid_last</div>	
	</div><!-- end .grid_row -->	

	<h5 class="title">Class 'grid_row' is a parent (wrapper) div (dark gray) used for clearing floats and creating seperate rows</h5>
	
	<div class="grid_row"><!-- used for clearing i.c.w. grid prefixes and suffixes -->
		<div class="grid_2 grid_first">grid_2  grid_first</div>

		<div class="grid_4">grid_4</div>
		<div class="grid_1">grid_1</div>
		<div class="grid_2">grid_3</div>	
		<div class="grid_1 grid_last">grid_1 grid_last</div>
	</div><!-- end .grid_row -->	
	
	<h5 class="title">Class 'grid_last' float's right thus creates a gap</h5>
	
	<div class="grid_row"><!-- used for clearing i.c.w. grid prefixes and suffixes -->

		<div class="grid_1 grid_first">grid_1  grid_first</div>
		<div class="grid_3">grid_3</div>
		<div class="grid_3 grid_last">grid_3 grid_last</div>
	</div><!-- end .grid_row -->	
	
	<h5 class="title">Prefixing and suffixing block spaces used for shifting blocks</h5>
	
	<div class="grid_row"><!-- used for clearing i.c.w. grid prefixes and suffixes -->
		<div class="grid_2 grid_first">grid_2 grid_first</div>

		<div class="grid_3 grid_prefix_2">grid_3 grid_prefix_2</div>
	</div><!-- end .grid_row -->	

	<div class="grid_row"><!-- used for clearing i.c.w. grid prefixes and suffixes -->
		<div class="grid_2 grid_first grid_suffix_3">grid_2 grid_first grid_suffix_3</div>
		<div class="grid_4">grid_4</div>
		<div class="grid_1 grid_last">grid_1 grid_last</div>
	</div><!-- end .grid_row -->

	<div class="grid_row"><!-- class 'grid_row' used for clearing -->
		<div class="grid_1 grid_first">grid_1 grid_first</div>
		<div class="grid_1">grid_1</div>
		<div class="grid_1">grid_1</div>
		<div class="grid_1">grid_1</div>
		<div class="grid_1">grid_1</div>

		<div class="grid_1">grid_1</div>
		<div class="grid_1">grid_1</div>
		<div class="grid_1">grid_1</div>
		<div class="grid_1">grid_1</div>
		<div class="grid_1 grid_last">grid_1 grid_last</div>
	</div><!-- end .grid_row -->

	<h5 class="title">No margin ('nm' in classname) used on the first and last column to place it to the left- and rightside edge</h5>
	
	<div class="grid_row"><!-- class 'grid_row' used for clearing -->
		<div class="grid_nm_1 grid_first">grid_nm_1 grid_first</div>
		<div class="grid_1">grid_1</div>
		<div class="grid_1">grid_1</div>
		<div class="grid_1">grid_1</div>

		<div class="grid_1">grid_1</div>
		<div class="grid_1">grid_1</div>
		<div class="grid_1">grid_1</div>
		<div class="grid_1">grid_1</div>
		<div class="grid_1">grid_1</div>
		<div class="grid_nm_1 grid_nm_last">grid_nm_1 grid_nm_last</div>

	</div><!-- end .grid_row -->	
	
	<div class="grid_row"><!-- used for clearing i.c.w. grid prefixes and suffixes -->
		<div class="grid_nm_2 grid_first">grid_nm_2 grid_first</div>
		<div class="grid_6">grid_6 grid_prefix_2</div>
		<div class="grid_nm_2 grid_nm_last">grid_nm_2 grid_nm_last</div>
	</div><!-- end .grid_row -->	

	<h5 class="title">Variations</h5>
	
	<div class="grid_row">	<!-- class 'grid_row' used for clearing -->

		<div class="grid_1 grid_first">grid_1 grid_first</div>
		<div class="grid_9 grid_last">grid_9 grid_last</div>
	</div><!-- end .grid_row -->	
	
	<div class="grid_row"><!-- class 'grid_row' used for clearing -->
		<div class="grid_2 grid_first">grid_2 grid_first</div>
		<div class="grid_8 grid_last">grid_8 grid_last</div>	
	</div><!-- end .grid_row -->	
	
	<div class="grid_row"><!-- class 'grid_row' used for clearing -->

		<div class="grid_3 grid_first">grid_3 grid_first</div>
		<div class="grid_7 grid_last">grid_7 grid_last</div>
	</div><!-- end .grid_row -->	
	
	<div class="grid_row"><!-- class 'grid_row' used for clearing -->
		<div class="grid_4 grid_first">grid_4 grid_first</div>
		<div class="grid_6 grid_last">grid_6 grid_last</div>
	</div><!-- end .grid_row -->	
	
	<div class="grid_row"><!-- class 'grid_row' used for clearing -->

		<div class="grid_5 grid_first">grid_5 grid_first</div>
		<div class="grid_5 grid_last">grid_5 grid_last</div>
	</div><!-- end .grid_row -->	
		
	<div class="grid_row"><!-- class 'grid_row' used for clearing -->
		<div class="grid_6 grid_first">grid_6 grid_first</div>
		<div class="grid_4 grid_last">grid_4 grid_last</div>
	</div><!-- end .grid_row -->	
	
	<div class="grid_row"><!-- class 'grid_row' used for clearing -->

		<div class="grid_7 grid_first">grid_7 grid_first</div>
		<div class="grid_3 grid_last">grid_3 grid_last</div>
	</div><!-- end .grid_row -->	
	
	<div class="grid_row"><!-- class 'grid_row' used for clearing -->
		<div class="grid_8 grid_first">grid_8 grid_first</div>
		<div class="grid_2 grid_last">grid_2 grid_last</div>
	</div><!-- end .grid_row -->	
	
	<div class="grid_row">	<!-- class 'grid_row' used for clearing -->

		<div class="grid_9 grid_first">grid_9 grid_first</div>
		<div class="grid_1 grid_last">grid_1 grid_last</div>
	</div><!-- end .grid_row -->	
	
	<h5 class="title">Common layouts</h5>
	
	<div class="grid_row"><!-- class 'grid_row' used for clearing -->
		<div class="grid_2 grid_first">grid_2 grid_first</div>
		<div class="grid_6">grid_6</div>

		<div class="grid_2 grid_last">grid_2 grid_last</div>
	</div><!-- end .grid_row -->	
	
	<div class="grid_row"><!-- class 'grid_row' used for clearing -->
		<div class="grid_3 grid_first">grid_3 grid_first</div>
		<div class="grid_4">grid_4</div>
		<div class="grid_3 grid_last">grid_3 grid_last</div>
	</div><!-- end .grid_row -->	
	
	<div class="grid_row"><!-- class 'grid_row' used for clearing -->

		<div class="grid_4 grid_first">grid_4 grid_first</div>
		<div class="grid_3">grid_3</div>
		<div class="grid_3 grid_last">grid_3 grid_last</div>	
	</div><!-- end .grid_row -->	

	<h5 class="title">Nested grid blocks, use a class 'grid_parent' to nest grid blocks</h5>
	
	<div class="grid_2 grid_first">grid_2 grid_first</div><!-- sidebar -->
	
	<!-- 'maincontent area -->

	<div class="grid_8 grid_parent grid_last"><!-- class 'grid_parent' is optional, only used for CSS debugging and clearing floats -->
		<strong>grid_8 grid_parent grid_last</strong>
		<div class="grid_row"><!-- class 'grid_row' used for clearing -->
			<div class="grid_1 grid_first">grid_1 grid_first</div>
			<div class="grid_2">grid_2</div>
			<div class="grid_3">grid_3</div>
			<div class="grid_1">grid_1</div>

			<div class="grid_1 grid_last">grid_1 grid_last</div>
		</div><!-- end .grid_row -->
		
		<div class="grid_row"><!-- class 'grid_row' used for clearing -->
			<div class="grid_2 grid_first">grid_2 grid_first</div>
			<div class="grid_4">grid_4</div>
			<div class="grid_2 grid_last">grid_2 grid_last</div>
		</div><!-- end .grid_row -->

	</div>	<!-- end .grid_8 -->
	
	<h5 class="title">Nested columns, by default the 'grid_first' and 'grid_last' blocks have no margin-left and no margin-right</h5>
	
	<div class="grid_2 grid_first">grid_2 grid_first</div><!-- sidebar -->
	
	<!-- 'maincontent area -->
	<div class="grid_8 grid_parent grid_last"><!-- class 'grid_parent' is optional, only used for CSS debugging and clearing floats -->
		<strong>grid_8 grid_parent grid_last</strong>
		<div class="grid_row"><!-- class 'grid_row' used for clearing -->

			<div class="grid_1 grid_first">grid_1 grid_first</div>
			<div class="grid_1">grid_1</div>
			<div class="grid_1">grid_1</div>
			<div class="grid_1">grid_1</div>
			<div class="grid_1">grid_1</div>
			<div class="grid_1">grid_1</div>

			<div class="grid_1">grid_1</div>
			<div class="grid_1 grid_last">grid_1 grid_last</div>
		</div><!-- end .grid_row -->
		
		<div class="grid_row"><!-- class 'grid_row' used for clearing -->
			<div class="grid_2 grid_first">grid_2 grid_first</div>
			<div class="grid_2">grid_2</div>
			<div class="grid_2">grid_2</div>

			<div class="grid_2 grid_last">grid_2 grid_last</div>
		</div><!-- end .grid_row -->
	</div>	<!-- end .grid_8 -->
	
	<h5 class="title">Nested columns with layout variations and shifting blocks</h5>
	
	<div class="grid_2 grid_first">grid_2 grid_first</div><!-- sidebar -->
	
	<!-- 'maincontent area -->
	<div class="grid_8 grid_parent grid_last"><!-- class 'grid_parent' is optional, only used for CSS debugging and clearing floats -->

		<strong>grid_8 grid_parent grid_last</strong>
		<div class="grid_row"><!-- class 'grid_row' used for clearing -->
			<div class="grid_1 grid_first">grid_1 grid_first</div>
			<div class="grid_2 grid_suffix_2">grid_1 grid_suffix_2</div>
			<div class="grid_1">grid_1</div>
			<div class="grid_1">grid_1</div>

			<div class="grid_1 grid_last">grid_1 grid_last</div>
		</div><!-- end .grid_row -->
		
		<div class="grid_row"><!-- class 'grid_row' used for clearing -->
			<div class="grid_2 grid_first">grid_2 grid_first</div>
			<div class="grid_2">grid_2</div>
			<div class="grid_2 grid_prefix_1">grid_2 grid_prefix_1</div>
			<div class="grid_1 grid_last">grid_1 grid_last</div>

		</div><!-- end .grid_row -->
	</div>	<!-- end .grid_8 -->

	<h5 class="title">Common layout with 2 sidebars and nested grid blocks</h5>
	
	<div class="grid_2 grid_first">grid_2 grid_first</div><!-- sidebar -->

	<div class="grid_6 grid_parent"><!-- class 'grid_parent' is optional, only used for CSS debugging and clearing floats / heights -->
		<strong>grid_6 grid_parent</strong>

		<div class="grid_row"><!-- class 'grid_row' used for clearing -->
			<div class="grid_1 grid_first">grid_1 grid_first</div>
			<div class="grid_2">grid_2</div>
			<div class="grid_1">grid_1</div>
			<div class="grid_2 grid_last">grid_2 grid_last</div>
		</div><!-- end .grid_row -->
		
		<div class="grid_row"><!-- class 'grid_row' used for clearing -->

			<div class="grid_3 grid_first">grid_3 grid_first</div>
			<div class="grid_3 grid_last">grid_3 grid_last</div>
		</div><!-- end .grid_row -->
	</div>	<!-- end .grid_6 -->
	
	<div class="grid_2 grid_last">grid_2 grid_last</div><!-- sidebar -->
	
	<h5 class="title">Use a 'grid_row' to break out of nested grids thus creating a (cleared) footer</h5>

	
	<div class="grid_row">
		<div class="grid_2 grid_first">grid_3 grid_first</div>
		<div class="grid_3">grid_3</div>
		<div class="grid_5 grid_last">grid_7 grid_last</div>	
	</div>
	
	<div class="grid_row">
		<div class="grid_10 grid_first">grid_10 grid_first</div>	
	</div>

</div><!-- end #wrapper -->
</body>
</html>