<?php

$installer = $this;
$installer->startSetup();

$installer->addAttribute('catalog_category', 'left_title', array(
    'type' => 'text',
    'label'=> 'Left title',
    'input' => 'text',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    'visible' => true,
    'required' => false,
    'user_defined' => true,
    'default' => "",
    'group' => "General Information"
));

$installer->addAttribute('catalog_category', 'left_content', array(
    'type' => 'text',
    'label'=> 'Left text',
    'input' => 'textarea',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    'visible' => true,
    'required' => false,
    'user_defined' => true,
    'default' => "",
    'group' => "General Information"
));

$installer->addAttribute('catalog_category', 'right_title', array(
    'type' => 'text',
    'label'=> 'Right title',
    'input' => 'text',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    'visible' => true,
    'required' => false,
    'user_defined' => true,
    'default' => "",
    'group' => "General Information"
));

$installer->addAttribute('catalog_category', 'right_content', array(
    'type' => 'text',
    'label'=> 'Right text',
    'input' => 'textarea',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    'visible' => true,
    'required' => false,
    'user_defined' => true,
    'default' => "",
    'group' => "General Information"
));

$installer->endSetup();
