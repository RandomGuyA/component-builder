<?php
class Page extends SiteTree {

    private static $has_many = array(
        'Sections' => 'Section'
    );

    public function getCMSFields() {

        $fields = parent::getCMSFields();

        /*
        $dataColumns = new GridFieldDataColumns();
        $dataColumns->setDisplayFields(
            array(
                'Title'     => 'Title',
                'ClassName' => 'Class Name'
            )
        );

        $multiClassConfig = new GridFieldAddNewMultiClass();
        $multiClassConfig->setClasses(
            array(
                'SectionBlockImage'    => SectionBlockImage::get_section_type(),
                'SectionBlockText' => SectionBlockText::get_section_type(),
            )
        );*/

        /*$sections = GridField::create('Sections', 'Sections', $this->Sections(),
            GridFieldConfig::create()->addComponents(
                new GridFieldToolbarHeader(),
                new GridFieldAddNewButton('toolbar-header-right'),
                new GridFieldDetailForm(),
                new GridFieldDataColumns(),
                new GridFieldEditButton(),
                new GridFieldDeleteAction('unlinkrelation'),
                new GridFieldDeleteAction(),
                new GridFieldTitleHeader(),
                new GridFieldAddExistingAutocompleter('before', array('Title'))
            )
        );*/

        /*if($this->ID) {
            $textBlocks->addComponents(
                new GridFieldOrderableRows('Sort')
            );
        }*/

        $c = GridFieldConfig_RelationEditor::create();
        $c->removeComponentsByType('GridFieldAddNewButton')
            ->addComponent(new GridFieldAddNewMultiClass());

        $c->getComponentByType('GridFieldAddNewMultiClass')
            ->setClasses(array(
                'SectionBlockImage'=> SectionBlockImage::get_section_type(),
                'SectionBlockText' => SectionBlockText::get_section_type()
            ));

        $f = GridField::create('Sections', "Sections", $this->Sections(), $c);
        $fields->addFieldToTab("Root.Sections", $f);


        /*
        $fields->addFieldsToTab('Root.Sections',
            array(
                $sections
            )
        );
        */

        return $fields;
    }
}