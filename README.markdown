Button-down
===========

Crisp, clean php template
----------------------------------------------------

### Why?
I made button down in an attempt to learn how to separate functionality, layout and content. I was inspired by the organizational hierarchy of [Jekyll](https://github.com/mojombo/jekyll) and wanted to see if I could do something similar with PHP--removing the *export to static*, feature of course--but what the hell, right?

### Thread
*Thread* (or `_thread.php`) brings the whole thing together. It contains all of the functions that deliver modular elements and handles functionality (like the form handler script). The way it works is that *thread* is simply pulled in each file. Variables that are defined get converted into global variables that are used in various functions.

### Files
The file structure is basic. Files are arranged just as they would be on a static site. My preference is to have directories that contain `index.php` files (to create a cleaner URL strings), but it's totally up to the you. Each file in the system contains a PHP header that defines variables pertaining to content and layout. The header also pulls in the *thread* (controller). The header, footer and other modular elements are pulled in as function calls. 

### Layouts
Layouts are determined by a variable defined in the PHP header of each page. The top and bottom of each layout exist in the `_layouts` directory that determines the name of the layout. `top.php` and `bttm.php` are each called from the `includes/header.php` and `includes/footer.php` respectively. These layout submodules separate the layouts from the header, footer and other includes in the `_includes` directory. This way, content, meta tags, links, and analytics information is kept clean and separate from the code that determines the layout.
