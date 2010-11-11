<?php
include("../../../includes/functions.php");

// Get the values for the URL rewriting query string or use default values
$numberOfColumns= $_GET['columns'] ? $_GET['columns'] : 10; // number of columns with a default
$columnWidth = $_GET['grid_1'] ? $_GET['grid_1'] : 90;		// column width with a default width
$gutterWidth = $_GET['gutter'] ? $_GET['gutter'] : 10; 		// gutter width with a default width
$debugHeight = 90; 											// div height of HTML debug mode (relates to the HTML body.cssDebug class)

// Sent the correct CSS file content-type header
header("Content-type: text/css");
?>
/*
	Title:      		Dynamic CSS grid system
	Author:     		D. Burger
	Copyright:  		D. Burger, 2010

	Nr. of columns:		<?php echo($numberOfColumns); ?><?php echo("\n"); ?>
	Column width:	<?php echo("\t"); ?><?php echo($columnWidth); ?>px<?php echo("\n"); ?>
	Gutter:		<?php echo("\t"); ?><?php echo($gutterWidth); ?>px<?php echo("\n"); ?>
	Total width: <?php echo("\t\t"); ?><?php echo(calc_full_width()); ?>px<?php echo("\n"); ?>
*/

/* parent class to debug css grid system
============================================================================= */

.cssDebug {
	margin-top: <?php echo($gutterWidth); ?>px;
}

.cssDebug .grid_container_<?php echo($numberOfColumns); ?> {
	background-color: #ccc;
	overflow: hidden;
	padding-top: <?php echo($gutterWidth); ?>px;
}

<?php 
for($i = 1; $i <= $numberOfColumns; $i++) {
	echo('.cssDebug .grid_container_'.$numberOfColumns.' .grid_'.$i.',');
	echo("\n");
}
for($j = 1; $j <= $numberOfColumns; $j++) {
	if($j == $numberOfColumns) {
		echo('.cssDebug .grid_container_'.$numberOfColumns.' .grid_nm_'.$j.' {');
	} else {
		echo('.cssDebug .grid_container_'.$numberOfColumns.' .grid_nm_'.$j.',');
	}
	echo("\n");
}
?>
	background-color: #eee;
	height: <?php echo($debugHeight); ?>px;
	margin-bottom: <?php echo($gutterWidth); ?>px;
	line-height: 25px;
	text-align: center;
	font-weight: bold;
}

/* nested grid blocks */
<?php 
for($k = 1; $k <= $numberOfColumns; $k++) {
	if($k == $numberOfColumns) {
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
	height: <?php echo($debugHeight); ?>px;
}

.gridOutline {
	background-color: #eee;
	height: <?php echo($debugHeight); ?>px;
}

/* grid container
============================================================================= */

.grid_container_<?php echo($numberOfColumns); ?> {
	width: <?php echo(calc_full_width()); ?>px;
	overflow: hidden;
}

/* actually only used for wrapper background color(s) or repeating background images */
.grid_container_<?php echo($numberOfColumns); ?> .grid_parent,
.cssDebug .grid_container_10 .grid_parent {
	height: auto;
}

/* grid row, used i.c.w. prefixes and suffixes for clearing rows
============================================================================= */

.grid_row,
.grid_nm_row {
	overflow: hidden;
	clear: both;
	margin-bottom: <?php echo($gutterWidth); ?>px;
}

.grid_nm_row {
	margin-bottom: 0;	
}

/* grid blocks
============================================================================= */

<?php 
for($l = 1; $l <= $numberOfColumns; $l++) {
	if($l == $numberOfColumns) {
		echo('.grid_container_'.$numberOfColumns.' .grid_'.$l.' {');
	} else {
		echo('.grid_container_'.$numberOfColumns.' .grid_'.$l.',');
	}
	echo("\n");
}
?>
	margin-right: <?php echo($gutterWidth); ?>px; /* gutter width */
	float: left;
}

/* grid block width and trigger classes for other elements
============================================================================= */

<?php
for($u = 1; $u<= $numberOfColumns; $u++) {
	if($u == $numberOfColumns) {
		echo('.grid_container_'.$numberOfColumns.' .grid_'.$u.', .wGrid_'.$u.', .grid_container_'.$numberOfColumns.' .grid_nm_'.$u.' { width: '.calc_width($u, $u -1).'px; float: none; margin-right:0; }');		
	} else {
		echo('.grid_container_'.$numberOfColumns.' .grid_'.$u.', .wGrid_'.$u.', .grid_container_'.$numberOfColumns.' .grid_nm_'.$u.' { width: '.calc_width($u, $u -1).'px; }');	
	}
	echo("\n");
}
?>

/* suffix when there is 'no margin-left', used in absence of class 'grid_first'
============================================================================= */

<?php
for($b = 1; $b <= $numberOfColumns-1; $b++) {
	if($b == $numberOfColumns-1) {
		echo('.grid_container_'.$numberOfColumns.' .grid_nm_'.$b.' {');
	} else {
		echo('.grid_container_'.$numberOfColumns.' .grid_nm_'.$b.',');
	}
	echo("\n");
}
?>
	float: left;
	margin-left: 0;
	margin-right: <?php echo($gutterWidth); ?>px; /* gutter width */
}

/* grid block prefixes to shift blocks to the right
============================================================================= */

<?php
for($f = 1; $f <= $numberOfColumns-1; $f++) {
	if($f == $numberOfColumns-1) {
		echo('.grid_container_'.$numberOfColumns.' .grid_prefix_'.$f.' { margin-left: '.calc_width($f, $f).'px; float: right; margin-right: 0; }');
	} else {
		echo('.grid_container_'.$numberOfColumns.' .grid_prefix_'.$f.' { margin-left: '.calc_width($f, $f).'px;}');
	}
	echo("\n");
}
?>

/* grid block suffix to create empty space to the right
============================================================================= */

<?php
for($g = 1; $g <= $numberOfColumns-1; $g++) {
	switch($g) {
		case 1:
			echo('.grid_container_'.$numberOfColumns.' .grid_suffix_'.$g.' { margin-right: '.calc_width(2, 1).'px; }');
			break;
		case  $numberOfColumns-1:
			echo('.grid_container_'.$numberOfColumns.' .grid_suffix_'.$g.' { margin-right: '.calc_width($g, $g+1).'px; float: right; margin-right: 0; }');
			break;
		default:
			echo('.grid_container_'.$numberOfColumns.' .grid_suffix_'.$g.' { margin-right: '.calc_width($g, $g+1).'px; }');
			break;
	}
	echo("\n");
}
?>

/* wider outer most right column
============================================================================= */

<?php
for($m = 1; $m <= $numberOfColumns-1; $m++) {
	if($m == $numberOfColumns-1) {
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

.grid_container_<?php echo($numberOfColumns); ?> .grid_last,
.grid_container_<?php echo($numberOfColumns); ?> .grid_nm_last {
	float: right;
	margin-right: 0;
}

.grid_container_<?php echo($numberOfColumns); ?> .grid_nm_last {
	margin-right: 0;
}

/* removing the margin-right for nested blocks
============================================================================= */

.grid_container_<?php echo($numberOfColumns); ?> .grid_parent .grid_first {
	margin-left: 0;
}

.grid_container_<?php echo($numberOfColumns); ?> .grid_parent .grid_last {
	margin-right: 0;
}