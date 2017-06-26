<?php

class SectionBlockImage extends Section {

    private static $db = array(
        'Title' => 'Varchar',
    );

    private static $has_one = array(
        'Photo' => 'Image'
    );

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields = FieldList::create(
            TextField::create('Title'),
            $uploader = UploadField::create('Photo')
        );

        $uploader->setFolderName('SectionBlockImages');
        $uploader->getValidator()->setAllowedExtensions(array(
            'png','gif','jpeg','jpg'
        ));

        return $fields;
    }

}