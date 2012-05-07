Button-down
===========

A crisp, clean php template made by a designer
----------------------------------------------

### Why?
I made button down in an attempt to learn how to separate functionality, layout and content. I already knew some php (like, conditionals, includes and variable) and I was familiar with frameworks like [Jekyll](https://github.com/mojombo/jekyll) and enjoyed its elegant simplicity.

### The Controller
*Thread* (or `_thread.textile`"`) is the basic controller and contains all of the functions that deliver modular elements as well as handle functionality (like the form handler script). The way it works is that *thread* is simply included in each file, variables that are defined get converted into global variables that are used in various functions.

### File Structure
The file structure is basic. Files are arranged just as they would be on a static site. My preference is to have directories that contain `index.php` files to create a cleaner URLs. Each file in the system contains a PHP header that defines variables pertaining to content and layout. The header also pulls in the *thread* (controller) and the header, footer and other modular elements are pulled in as function calls. Modules and includes are designated as `.textile` files to help separate them from the `.php` files.

### Layouts
Layouts are determined by a variable defined in the header of each page. The top and bottom of each layout exist in the `_layouts` in a directory that determines the name of the layout. `top.textile` and `bttm.textile` are each called from the `includes/header.textile` and `includes/footer.textile` respectively. These layout submodules separate the layouts from the header, footer and other includes in the `_includes` directory. The way, content, meta tags, links, and analytics information is kept clean and separate from the code that determines the layout.
