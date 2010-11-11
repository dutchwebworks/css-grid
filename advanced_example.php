<?php
include("includes/functions.php");
include("includes/settings.php");
include("includes/default-html-dtd.inc.php");
$fixedDemo = true; 	// Add a disabled=disabled attribute to the column input field for 'ddvanced example' page
?>
<head>

<?php include("includes/default-html-head.inc.php"); ?>

<meta name="description" content="Advanced demo of CSS grid system" />
<meta name="keywords" content="advanced, css, grid, demo" />

<title>Advanced CSS grid demo page</title>

</head>

<body class="cssDebug"><!-- class 'cssDebug' used to debug the css grid -->

<?php include("includes/header.inc.php"); ?>

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
	</div><!-- end .grid_8 -->

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
	</div><!-- end .grid_6 -->
	
	<div class="grid_2 grid_last">grid_2 grid_last</div><!-- sidebar -->
	
	<h5 class="title">Use a 'grid_row' to break out of nested grids thus creating a (cleared) footer</h5>
	
	<div class="grid_row">
		<div class="grid_2 grid_first">grid_3 grid_first</div>
		<div class="grid_3">grid_3</div>
		<div class="grid_5 grid_last">grid_7 grid_last</div>	
	</div><!-- end .grid_row -->
	
	<div class="grid_row">
		<div class="grid_10 grid_first">grid_10 grid_first</div>	
	</div><!-- end .grid_row -->
</div><!-- end #wrapper -->
</body>
</html>