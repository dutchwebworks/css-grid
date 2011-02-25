<?php
// Settings for CSS Grid system, with default values if there is no POST
$numberOfColumns = $_POST['number_of_columns'] ? $_POST['number_of_columns'] : 10;
$columnWidth = $_POST['column_width'] ? $_POST['column_width'] : 95;

if($_POST['gutter_width'] >= 0) {
	$gutterWidth = $_POST['gutter_width'];
} else {
	$gutterWidth = 10;
}
?>
