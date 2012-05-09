# Theming Omeka

## Default Theme Files
_Explain the default theme files in Omeka's core. These are the theme files that are used if a theme does not supply an overiding file, following the same directory path structure._


Located in
	Omeka/application/sites/views/scripts

* collections: theme files for displaying Omeka collections
* common: templates used across all theme files (like header.php and footer.php)
* css: CSS files
* error: error pages
* file: theme files for displaying files
* images: jquery-ui and other icons used when displaying images 
* items: theme files for displaying Omeka items
* javascripts: jquery and tinymce files
* upgrade: pages used during Omeka's upgrade process
* users: pages used during registration and (public) login

Most important files are usually

*	show.php -- used when displaying a single thing (collection, item, etc.)
*	browse.php -- used when displaying several of a thing
	
### Compare 'Griddy' to "Seasons"

* Seasons overrides few of the default files, Griddy overrides many

## Override the item/show page

_Demonstrate the typical functions, CSS classes, and structures used in a show page_

[Functions](http://omeka.org/codex/Functions)

* __() : translates text. best not to change the text, as translations will break!
* head() : data passed to the header.php file for display
* item() : displays element set data

## Override the item/browse page

_Demonstrate the typical functions, CSS classes, and structures used in a browse page_

* loop_items() : used in a <?php while(); ?> structure to loop through items
* item_tags_as_string() : echo out the tags
* item_has_tags() : checks if an item has tags using a  <?php if(): ?> structure
 

### Omeka's loop record structure

_Explain Omeka's looping of records (similar to WordPress')_


## Override the header/footer

_Demonstrate the typical functions, CSS classes, and structures used in header and footer_

* queue_css() : use before display_css() to queue CSS files to be added
* queue_js() : use before display_js() to queue javascript files to be added


## Plugin hooks

_Explain the plugin hook system, and why it is important for themers_

[Hooks](http://omeka.org/codex/Hooks)

Functions beginning with plugin_ provide mechanisms for plugins to add content to pages. Not including theme in your theme may cause plugins to lose functionality. Usually, it is safe to move them around though.

Hook public_theme_header() is fired by plugin_theme_header() in the theme. Similarly for all hooks.


## Theme Configuration
















