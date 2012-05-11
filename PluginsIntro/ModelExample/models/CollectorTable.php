<?php

class CollectorTable extends Omeka_Db_Table
{

    // demonstrates straightforward finding records

    public function findForCollectionId($id)
    {
        $select = $this->getSelect();
        $select->where('collection_id = ?', $id);
        return $this->fetchObjects($select);
    }


    //together, the following methods demonstrate taking advantage of goodness in Omeka_Db_Table class
    //this fits patterns used in Omeka
    // this would use the parent's findBy($params) method

    public function applySearchFilters($select, $params)
    {
        if(isset($params['collection_id'])) {
            $this->filterByCollection($select, $params['collection_id']);
        }
    }


    public function filterByCollection($select, $collection_id)
    {
        $select->where('collection_id = ?', $collection_id);
    }

}