<?php
// gzip all php output
ob_start("ob_gzhandler");

include("../../../includes/functions.php");

// Get the values for the URL rewriting query string or use default values
$numberOfColumns= $_GET['columns'] ? $_GET['columns'] : 10; // number of columns with a default
$columnWidth = $_GET['grid_1'] ? $_GET['grid_1'] : 90;		// column width with a default width
$gutterWidth = $_GET['gutter'] ? $_GET['gutter'] : 10; 		// gutter width with a default width
$debugHeight = 200; 										// div height of HTML debug mode (relates to the HTML body.cssDebug class)

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

/* parent class for debugging the grid system
============================================================================= */

.cssDebug .grid_container_<?php echo($numberOfColumns); ?> {
	overflow: hidden;
}

<?php 
for($j = 1; $j <= $numberOfColumns; $j++) {
	if($j == $numberOfColumns) {
		echo('.cssDebug .grid_container_'.$numberOfColumns.' .grid_'.$j.' {');
	} else {
		echo('.cssDebug .grid_container_'.$numberOfColumns.' .grid_'.$j.',');
	}
	echo("\n");
}
?>
	background-color: #ffb2b2;
	height: <?php echo($debugHeight); ?>px;
	line-height: 25px;
	text-align: center;
	font-weight: bold;
}

.cssDebug .grid_row {
	background-color: #fff;
}

.cssDebug .grid_row:last-child {
	margin-bottom: 0;
}

.cssDebug .grid_container_<?php echo($numberOfColumns); ?> .grid_parent {
	background-color: #ffdbdb;
}

/* grid container
============================================================================= */

.grid_container_<?php echo($numberOfColumns); ?> {
	width: <?php echo(calc_full_width()); ?>px; /* full width of the grid */
	overflow: hidden;
}

/* actually only used for wrapper background color(s) or repeating background images */
.grid_container_<?php echo($numberOfColumns); ?> .grid_parent,
.cssDebug .grid_container_<?php echo($numberOfColumns); ?> .grid_parent {
	height: auto;
	overflow: hidden;
}

/* grid row, used i.c.w. prefixes and suffixes for clearing rows
============================================================================= */

.grid_row {
	clear: both;
	margin-bottom: <?php echo($gutterWidth); ?>px; /* same as the gutter width */
}

/* another way to get the effect of 'overflow:hidden' without using 'overflow:hidden' because is chops-off / hides content */
.grid_row:before,
.grid_row:after {
  content: "."; 
  display: block; 
  height: 0; 
  overflow: hidden;	
} 

.grid_row:after { clear: both; }

/* Fix clearfix Win/IE: blueprintcss.lighthouseapp.com/projects/15318/tickets/5-extra-margin-padding-bottom-of-page */
.grid_row { zoom: 1; }


/* grid blocks defaults
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

/* last grid block on the right
============================================================================= */

.grid_container_<?php echo($numberOfColumns); ?> .grid_last {
	float: right;
	margin-right: 0;
}

/* grid block width's and trigger classes for other elements
============================================================================= */

<?php
for($u = 1; $u<= $numberOfColumns; $u++) {
	if($u == $numberOfColumns) {
		echo('.grid_container_'.$numberOfColumns.' .grid_'.$u.', .width_grid_'.$u.' { width: '.calc_width($u, $u -1).'px; float: none; margin-right:0; }');		
	} else {
		echo('.grid_container_'.$numberOfColumns.' .grid_'.$u.', .width_grid_'.$u.' { width: '.calc_width($u, $u -1).'px; }');	
	}
	echo("\n");
}
?>

/* grid block prefixes: shift the block to the right
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

/* grid block suffix: shift adjacent block to the right
============================================================================= */

<?php
for($g = 1; $g <= $numberOfColumns-1; $g++) {
	switch($g) {
		case 1:
			echo('.grid_container_'.$numberOfColumns.' .grid_suffix_'.$g.' { margin-right: '.calc_width(1, 2).'px; }');
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