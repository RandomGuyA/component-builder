<?php

class Section extends DataObject {

    private static $has_one = array(
        'Page' => 'Page'
    );

    public static function get_section_type()
    {
        return trim(preg_replace('/([A-Z])/', ' $1', str_ireplace('Section', '', get_called_class())));
    }

}