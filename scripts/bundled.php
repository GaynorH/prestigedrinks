<?php
mysql_query('SET foreign_key_checks = 0');
require_once('../includes/config.php');
require_once('../app/Mage.php');
$storeID = 1;
$websiteIDs = array(1);
$cats = array(5);
Mage::app()->setCurrentStore(Mage_Core_Model_App::ADMIN_STORE_ID);
/** @var $productCheck Mage_Catalog_Model_Product */
$productCheck = Mage::getModel('catalog/product');
$p = array(
    'sku_type' => 0,
    'sku' => '687',
    'name' => "BarProduct",
    'description' => 'Foo',
    'short_description' => 'Bar',
    'type_id' => 'bundle',
    'attribute_set_id' => 4,
    'weight_type' => 0,
    'visibility' => 4,
    'price_type' => 0,
    'price_view' => 0,
    'status' => 1,
    'created_at' => strtotime('now'),
    'category_ids' => $cats,
    'store_id' => $storeID,
    'website_ids' => $websiteIDs
);
$productCheck->setData($p);
Mage::register('product', $productCheck);
$optionRawData = array();
$optionRawData[0] = array(
    'required' => 1,
    'option_id' => '',
    'position' => 0,
    'type' => 'select',
    'title' => 'FooOption',
    'default_title' => 'FooOption',
    'delete' => '',
);
$selectionRawData = array();
$selectionRawData[0] = array();
$selectionRawData[0][] = array(
    'product_id' => 1,
    'selection_qty' => 1,
    'selection_can_change_qty' => 1,
    'position' => 0,
    'is_default' => 1,
    'selection_id' => '',
    'selection_price_type' => 0,
    'selection_price_value' => 0.0,
    'option_id' => '',
    'delete' => ''
);
Mage::register('productCheck', $productCheck);
Mage::register('current_product', $productCheck);
$productCheck->setCanSaveConfigurableAttributes(false);
$productCheck->setCanSaveCustomOptions(true);
// Set the Bundle Options & Selection Data
$productCheck->setBundleOptionsData($optionRawData);
$productCheck->setBundleSelectionsData($selectionRawData);
$productCheck->setCanSaveBundleSelections(true);
$productCheck->setAffectBundleProductSelections(true);
$productCheck->save();
