<?php
class ImageBlock extends DataObject {

    private static $db = array(
        'SortOrder' => 'Int',
        'Title' => 'Varchar',
    );

    private static $default_sort = 'Sort';

    public function getCMSFields() {

        $fields = parent::getCMSFields();
        $fields = FieldList::create(
            TextField::create('Title')
        );

        return $fields;
    }
}