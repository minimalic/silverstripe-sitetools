<?php

namespace minimalic\SiteTools\Extensions;

use SilverStripe\ORM\DataExtension;
use SilverStripe\ORM\ArrayList;
use SilverStripe\CMS\Model\SiteTree;
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

    /**
     * Generates footer menu from 1st level pages
     *
     * @return ArrayList<SiteTree>
     */
    public function getFooterMenu()
    {
        $pages = SiteTree::get()->filter([
            "ShowInFooter" => 1,
            "ParentID" => 0,
        ]);

        $visiblePages = [];

        if (isset($visiblePages)) {
            foreach ($pages as $page) {
                if ($page->canView()) {
                    $visiblePages[] = $page;
                }
            }
        }

        return new ArrayList($visiblePages);
    }

}
