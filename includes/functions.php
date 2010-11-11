<?php
// Calculate full width of the grid
function calc_full_width() {
	$full_width = $GLOBALS['numberOfColumns'] * $GLOBALS['columnWidth'] + ($GLOBALS['numberOfColumns'] -1) * $GLOBALS['gutterWidth'];
	return $full_width;
}

// Calculate the width of columns and gutters
function calc_width($nr_of_columns, $nr_of_gutters = 0) {
	$width = $nr_of_columns * $GLOBALS['columnWidth'];
	$gutter_width = $nr_of_gutters * $GLOBALS['gutterWidth'];
	if($gutter_width > 0 ) $width += $gutter_width;
	return $width;
}
?>