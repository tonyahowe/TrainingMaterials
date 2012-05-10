<?php
class ModelExamplePlugin extends Omeka_Plugin_Abstract
{
    protected $_hooks = array(
        'public_append_to_collections_show',
	'install',
	'uninstall'
         
    );
    
    public function hookPublicAppendToCollectionsShow($collection)
    {
	$db = get_db();
	// first example uses the simple, straightforward method in CollectorTable
	$collectors = $db->getTable('Collector')-> findForCollectionId($collection->id);
	if(count($collectors) != 0) {
	    foreach($collectors as $collector) {
	      echo "<h4>" . $collector->name  . "</h4>";
	      echo "<div>" . $collector->bio . "</div>";
	    }
	}
    }


    public function hookInstall()
    {

	//set up my Collectors table
	$db = get_db();
	$sql = "
	CREATE TABLE IF NOT EXISTS `$db->Collector` (
	  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
	  `collection_id` int(10) unsigned NOT NULL,
	  `name` TEXT NOT NULL,
	  `bio` TEXT NOT NULL,
	  `public` tinyint(1) default '0',
	  PRIMARY KEY (`id`),
	) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";

	$db->query($sql);    

	//set up some fake data to work with 
	$collection = new Collection();
	$collection->name = "Fake Collection";
	$collection->owner_id = 1;
	$collection->save();

	$collector = new Collector();
	$collector->name = "Mr. Fake Collector";
	$collector->collection_id = $collection->id;
	$collector->bio = "I collected stuff for the Fake Collection";
	$collector->public = 1;

	$collector = new Collector();
	$collector->name = "Mysterious Ghost Collector";
	$collector->collection_id = $collection->id;
	$collector->bio = "I collected stuff for the Fake Collection, but in secret so I don't want the public to know";
	$collector->public = 0;


	$collection = new Collection();
	$collection->name = "Pseudo Collection";
	$collection->owner_id = 1;
	$collection->save();

	$collector = new Collector();
	$collector->name = "Mrs. Pseudo Collector";
	$collector->collection_id = $collection->id;
	$collector->bio = "I collected stuff for the Pseudo Collection";
	$collector->public = 1;
    }

    public function hookUninstall()
    {
	$db = get_db();
	$sql = "DROP TABLE IF EXISTS `$db->Collector`";
	$db->query($sql);    
    }

}
