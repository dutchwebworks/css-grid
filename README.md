# Dynamic CSS grid

## Based upon 960.gs css-grid system

## Usage

Basic **PHP scripting** with Apache mod_rewrite to create a dynamic CSS grid file using simple `for()` loops. Grid system is based on the [960.gs grid system](http://960.gs/).

* Uses **Apache** `mod_rewrite module` (`/themes/base/css/.htaccess`) to modify the number of columns, unit width and the gutter width
* In `/themes/base/css/.htaccess` the `grid.css` file is rewritten to `grid.css.php`
* Uses basic PHP `for()` loops to generate the CSS.
