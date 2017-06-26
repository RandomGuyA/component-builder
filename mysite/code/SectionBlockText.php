<?php

class SectionBlockText extends Section {

    private static $db = array(
        'Title' => 'Varchar',
        'Content' => 'HTMLText'
    );

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields = FieldList::create(
            TextField::create('Title'),
            HtmlEditorField::create('Content')
        );

        return $fields;
    }



}