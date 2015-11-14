<?php

$installer = $this;
$installer->startSetup();
$attribute  = array(
    'type' => 'varchar',
    'label'=> 'Category Image',
    'input' => 'image',
    'backend' => 'catalog/category_attribute_backend_image',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    'visible' => true,
    'required' => false,
    'user_defined' => true,
    'default' => "",
    'group' => "General Information"
);
$installer->addAttribute('catalog_category', 'category_image', $attribute);
$installer->endSetup();
?>
