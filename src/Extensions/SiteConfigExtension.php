<?php

namespace minimalic\SiteTools\Extensions;

use SilverStripe\ORM\DataExtension;

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

class SiteConfigExtension extends DataExtension
{

    private static $db = [
        'FooterCopyright' => 'Varchar',
        'FooterDisclaimer' => 'HTMLText',
    ];

    private static $has_one = [
    ];

    private static $has_many = [
    ];

    private static $owns = [
    ];

    private static $defaults = [
    ];

    public function updateCMSFields(FieldList $fields)
    {

        $footerCopyright = TextField::create('FooterCopyright', _t(__CLASS__ . '.FooterCopyright', 'Footer copyright text (short), after year'));
        $footerDisclaimer = HTMLEditorField::create('FooterDisclaimer', _t(__CLASS__ . '.FooterDisclaimer', 'Footer disclaimer/trademarks text');

        $fields->addFieldsToTab('Root.Footer', array(
            $footerCopyright,
            $footerDisclaimer,
        ));

    }
}
