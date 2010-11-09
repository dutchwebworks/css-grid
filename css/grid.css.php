<?php
// Settings
$nr_of_columns = $_GET['columns'] ? $_GET['columns'] : 10; // number of columns with a default
$grid_1 = $_GET['grid_1'] ? $_GET['grid_1'] : 90; // column width with a default width
$gutter = $_GET['gutter'] ? $_GET['gutter'] : 10; // gutter width with a default width
$debug_height = 90; // div height of debug mode

// Calculate the width of columns and gutters
function calc_width($nr_of_columns, $nr_of_gutters = false) {
	$width = $nr_of_columns * $GLOBALS['grid_1'];
	$gutter_width = $nr_of_gutters * $GLOBALS['gutter'];
	if($gutter_width > 0 ) $width += $gutter_width;
	return $width;
}

function calc_full_width() {
	$full_width = $GLOBALS['nr_of_columns'] * $GLOBALS['grid_1'] + ($GLOBALS['nr_of_columns'] -1) * $GLOBALS['gutter'];
	return $full_width;
}

// Sent the correct CSS file mime-type header
header("Content-type: text/css");
?>
/*
	Title:      		Grid system
	Author:     		Front-end
	Copyright:  		Poort80  All rights resevered

	Nr. of columns:		<?php echo($nr_of_columns); ?><?php echo("\n"); ?>
	Column width:	<?php echo("\t"); ?><?php echo($grid_1); ?>px<?php echo("\n"); ?>
	Gutter:		<?php echo("\t"); ?><?php echo($gutter); ?>px<?php echo("\n"); ?>
	Total width: <?php echo("\t\t"); ?><?php echo(calc_full_width()); ?>px<?php echo("\n"); ?>
*/

/* parent class to debug css grid system used on grid demo page
============================================================================= */

.cssDebug {
	margin-top: <?php echo($gutter); ?>px;
}

.cssDebug .gridContainer_<?php echo($nr_of_columns); ?> {
	background-color: #ccc;
	overflow: hidden;
	padding-top: <?php echo($gutter); ?>px;
}

<?php 
for($i = 1; $i <= $nr_of_columns; $i++) {
	echo('.cssDebug .gridContainer_'.$nr_of_columns.' .grid_'.$i.',');
	echo("\n");
}
for($j = 1; $j <= $nr_of_columns; $j++) {
	if($j == $nr_of_columns) {
		echo('.cssDebug .gridContainer_'.$nr_of_columns.' .grid_nm_'.$j.' {');
	} else {
		echo('.cssDebug .gridContainer_'.$nr_of_columns.' .grid_nm_'.$j.',');
	}
	echo("\n");
}
?>
	background-color: #eee;
	height: <?php echo($debug_height); ?>px;
	margin-bottom: <?php echo($gutter); ?>px;
	line-height: 25px;
	text-indent: 10px;
	font-weight: bold;
}

/* nested grid blocks */
<?php 
for($k = 1; $k <= $nr_of_columns; $k++) {
	if($k == $nr_of_columns) {
		echo('.cssDebug .grid_parent .grid_'.$k.' {');
	} else {
		echo('.cssDebug .grid_parent .grid_'.$k.',');
	}
	echo("\n");
}
?>
	background-color: #ddd;
}

.cssDebug .grid_row {
	background-color: #aaa;
	height: <?php echo($debug_height); ?>px;
}

.gridOutline {
	background-color: #eee;
	height: <?php echo($debug_height); ?>px;
}

/* grid container based on fixed 920px wide
============================================================================= */

.gridContainer_<?php echo($nr_of_columns); ?> {
	width: <?php echo(calc_full_width()); ?>px;
	overflow: hidden;
}

/* actually only used for wrapper background color(s) or repeating background images */
.gridContainer_<?php echo($nr_of_columns); ?> .grid_parent,
.cssDebug .gridContainer_10 .grid_parent {
	height: auto;
}

/* grid row, used i.c.w. prefixes and suffixes for clearing rows
============================================================================= */

.grid_row,
.grid_nm_row {
	overflow: hidden;
	clear: both;
	margin-bottom: <?php echo($gutter); ?>px;
}

.grid_nm_row {
	margin-bottom: 0;	
}

/* grid blocks
============================================================================= */

<?php 
for($l = 1; $l <= $nr_of_columns; $l++) {
	if($l == $nr_of_columns) {
		echo('.gridContainer_'.$nr_of_columns.' .grid_'.$l.' {');
	} else {
		echo('.gridContainer_'.$nr_of_columns.' .grid_'.$l.',');
	}
	echo("\n");
}
?>
	margin-right: <?php echo($gutter); ?>px; /* gutter width */
	float: left;
}

/* grid block width and trigger classes for other elements
============================================================================= */

<?php
for($u = 1; $u<= $nr_of_columns; $u++) {
	if($u == $nr_of_columns) {
		echo('.gridContainer_'.$nr_of_columns.' .grid_'.$u.', .wGrid_'.$u.', .gridContainer_'.$nr_of_columns.' .grid_nm_'.$u.' { width: '.calc_width($u, $u -1).'px; float: none; margin-right:0; }');		
	} else {
		echo('.gridContainer_'.$nr_of_columns.' .grid_'.$u.', .wGrid_'.$u.', .gridContainer_'.$nr_of_columns.' .grid_nm_'.$u.' { width: '.calc_width($u, $u -1).'px; }');	
	}
	echo("\n");
}
?>

/* suffix when there is 'no margin-left', used in absence of class 'grid_first'
============================================================================= */

<?php
for($b = 1; $b <= $nr_of_columns -1; $b++) {
	if($b == $nr_of_columns -1) {
		echo('.gridContainer_'.$nr_of_columns.' .grid_nm_'.$b.' {');
	} else {
		echo('.gridContainer_'.$nr_of_columns.' .grid_nm_'.$b.',');
	}
	echo("\n");
}
?>
	float: left;
	margin-left: 0;
	margin-right: <?php echo($gutter); ?>px; /* gutter width */
}

/* grid block prefixes to shift blocks to the right
============================================================================= */

<?php
for($f = 1; $f <= $nr_of_columns -1; $f++) {
	if($f == $nr_of_columns-1) {
		echo('.gridContainer_'.$nr_of_columns.' .grid_prefix_'.$f.' { margin-left: '.calc_width($f, $f).'px; float: right; margin-right: 0; }');
	} else {
		echo('.gridContainer_'.$nr_of_columns.' .grid_prefix_'.$f.' { margin-left: '.calc_width($f, $f).'px;}');
	}
	echo("\n");
}
?>

/* grid block suffix to create empty space to the right
============================================================================= */

<?php
for($g = 1; $g <= $nr_of_columns -1; $g++) {
	switch($g) {
		case 1:
			echo('.gridContainer_'.$nr_of_columns.' .grid_suffix_'.$g.' { margin-right: '.calc_width(2, 1).'px; }');
			break;
		case  $nr_of_columns -1:
			echo('.gridContainer_'.$nr_of_columns.' .grid_suffix_'.$g.' { margin-right: '.calc_width($g, $g+1).'px; float: right; margin-right: 0; }');
			break;
		default:
			echo('.gridContainer_'.$nr_of_columns.' .grid_suffix_'.$g.' { margin-right: '.calc_width($g, $g+1).'px; }');
			break;
	}
	echo("\n");
}
?>

/* wider outer most right column
============================================================================= */

<?php
for($m = 1; $m <= $nr_of_columns -1; $m++) {
	if($m == $nr_of_columns -1) {
		echo('.grid_nm_'.$m.'.grid_nm_last {');
	} else {
		echo('.grid_nm_'.$m.'.grid_nm_last, ');
	}
	echo("\n");
}
?>
	margin-right: 0;
}

/* last column on the right
============================================================================= */

.gridContainer_<?php echo($nr_of_columns); ?> .grid_last,
.gridContainer_<?php echo($nr_of_columns); ?> .grid_nm_last {
	float: right;
	margin-right: 0;
}

.gridContainer_<?php echo($nr_of_columns); ?> .grid_nm_last {
	margin-right: 0;
}

/* removing the margin-right for nested blocks
============================================================================= */

.gridContainer_<?php echo($nr_of_columns); ?> .grid_parent .grid_first {
	margin-left: 0;
}

.gridContainer_<?php echo($nr_of_columns); ?> .grid_parent .grid_last {
	margin-right: 0;
}