#Dynamic CSS grid

##Based upon 960.gs css-grid system

## Usage

Basic PHP scripting with Apache mod_rewrite to create a dynamic CSS grid file using simple for() loops. Grid system is based on the 960.gs grid system.i

<ul>
<li>Uses Apache mod_rewrite module (<code>/themes/base/css/.htaccess</code>) to modify the number of columns, unit width and the gutter width</li>
<li>In <code>/themes/base/css/.htaccess</code> the <code>grid.css</code> file is rewritten to <code>grid.css.php</code></li>
<li>Uses basic PHP for() loops to generate the CSS.</li>
</ul>


