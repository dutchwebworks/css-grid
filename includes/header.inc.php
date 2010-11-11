<!-- begin include: header.inc.php -->
<div class="bodyCopy">
	<h1>Dynamic CSS grid system (based on the 960.gs system)</h1>
	
	<div class="formElements">
		<form action="" method="post">
			<p>
				<label>Number of columns:</label><input type="text" name="number_of_columns" value="<?php echo($numberOfColumns); ?>" <?php if($fixedDemo) echo('disabled="disabled"'); ?> />
				<label>Column width:</label> <input type="text" name="column_width" value="<?php echo($columnWidth); ?>" />
				<label>Gutter width:</label> <input type="text" name="gutter_width" value="<?php echo($gutterWidth); ?>" />
				<input type="submit" name="submit" value="Change" />
			</p>
		</form>
	</div>
		
	<p class="menu">
		<a href="/">Basic example</a> <span>|</span>
		<a href="/advanced-example">View advanced (fixed) 10 column CSS Grid system example</a> <span>|</span>
		<a href="/themes/base/css/grid-<?php echo($numberOfColumns); ?>-<?php echo($columnWidth); ?>-<?php echo($gutterWidth); ?>.css" target="_blank">View the CSS file: grid-<?php echo($numberOfColumns); ?>-<?php echo($columnWidth); ?>-<?php echo($gutterWidth); ?>.css</a>
	</p>
	
	<h3 class="title">
		<?php echo($numberOfColumns); ?> columns, each
		<?php echo($columnWidth); ?>px wide with a gutter of <?php echo($gutterWidth); ?>px, total width is <?php echo(calc_full_width()); ?>px
	</h3>
</div><!-- end .bodyCopy -->
<!-- end include: header.inc.php -->