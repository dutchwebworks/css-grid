<!-- begin include: header.inc.php -->
<div class="bodyCopy">
	<h1>Dynamic CSS grid system based on URL rewriting of the CSS grid file</h1>
	<form action="" method="post">
		<p>
			Number of columns:<br /> <input type="text" name="number_of_columns" value="<?php echo($numberOfColumns); ?>" <?php if($fixedDemo) echo('disabled="disabled"'); ?> /><br /><br /><br />
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
<!-- end include: header.inc.php -->