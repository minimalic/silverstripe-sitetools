<?php

namespace minimalic\SiteTools\Extensions;

use SilverStripe\ORM\DataExtension;

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\CheckboxField;

/**
 * Extension for the "SiteTree" class.
 * Extends "Settings" tab by "ShowInFooter" option.
 *
 * @property bool $ShowInFooter
 */
class SiteTreeExtension extends DataExtension
{

    private static $db = [
        "ShowInFooter" => "Boolean",
    ];

    private static $defaults = [
        "ShowInFooter" => 0,
    ];

    /**
     * Update settings tab
     */
    public function updateSettingsFields(FieldList $fields)
    {
        $fieldShowInFooter = CheckboxField::create("ShowInFooter", _t(__CLASS__ . '.ShowInFooter', 'Show in footer?'));

        $fields->addFieldsToTab('Root.Settings.Visibility', [
            $fieldShowInFooter,
        ], "ShowInSearch");
    }

}
