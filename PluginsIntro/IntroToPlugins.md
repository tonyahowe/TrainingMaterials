# Intro to Omeka Plugins

_Provide an overview of how plugins in Omeka work, conventions of the Zend Framework that are important, Model-View-Controller pattern, how Zend does MVC_

_Pedagogically, some might prefer to start with high-level concepts first, some might prefer to start with quick hacks first and build up to the concepts._

## Simple Plugin: add text to item pages
_Explain how the hook and filter system works in plugins._

Install HookFilterExample

### Activities

* Change the text of output based on information in the item
* Add a hook onto the collections show page


## Plugin Directory Structure

_Explain how views directory structure aligns with public, admin, and common._
_Explain how subdirectory names align with Controller names_
_Explain how php files in subdirectories align with actionMethod names_

ControllerViewExample plugin is designed for this

### Activities

* Using ControllerViewExample plugin, build something into indexAction to display in the view.
	* set a variable in the action and echo it in the view
	* set a variable as an array and loop
* Create a new method and the view to go with it


## Models
_Explain how to use a model, including the modelTable pattern, to dig up and display stored data_

ModelExample plugin is designed for this

### Activities

* Using the Omeka applyFilters pattern, add another filter for public and change the query in the hook to use that instead of the straightforward one

## Omeka's Model-View-Controller structure
_Explain how the models, views, and controllers work together_


## The Omeka_Controller_Action and Zend_Controller_Action Classes

_Explain typical use cases for using methods on the superclasses_

application/libraries/Omeka/Controller/Action.php
application/libraries/Zend/Controller/Action.php

### Pre-made actions

* showAction : show an individual record
* indexAction : forwards to browse
* browseAction : show many records with pagination
* editAction : edit a record
* deleteAction : delete a record






