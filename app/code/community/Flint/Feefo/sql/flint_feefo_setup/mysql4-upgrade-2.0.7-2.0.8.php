<?php
/**
 * Flint Technology Ltd
 *
 * This module was developed by Flint Technology Ltd (http://www.flinttechnology.co.uk).
 * For support or questions, contact us via feefo@flinttechnology.co.uk 
 * Support website: https://www.flinttechnology.co.uk/support/projects/feefo/
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA bundled with this package in the file LICENSE.txt.
 * It is also available online at http://www.flinttechnology.co.uk/store/module-license-1.0
 *
 * @package     flint_feefo-ce-2.0.9.zip
 * @registrant  Andi Briggs, Prestige Drinks
 * @license     E5824A84-C060-4C80-8D33-0293B407325E
 * @eula        Flint Module Single Installation License (http://www.flinttechnology.co.uk/store/module-license-1.0
 * @copyright   Copyright (c) 2014 Flint Technology Ltd (http://www.flinttechnology.co.uk)
 */
?>
<?php
$this->startSetup();
$installer = $this;
$eavConfig = Mage::getSingleton('eav/config');

$this->removeAttribute('catalog_product', 'feefo_sku');
    $installer->addAttribute( 'catalog_product', 'feefo_sku', array(
        'group' => 'Feefo',
        'type' => 'varchar',
        'backend' => '',
        'label' => 'Use SKU: (If set - Feefo integration will use this insted of product SKU)',
        'frontend' => '',
        'table' => '',
        'input' => 'text',
        'class' => '',
        'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_STORE,
        'visible' => false,
        'required' => false,
        'user_defined' => true,
        'default' => '0',
        'searchable' => false,
        'filterable' => false,
        'comparable' => false,
        'visible_on_front' => false,
        'unique' => false,
        'used_in_product_listing' => true,
        'is_configurable' => false
    ) );


/*
 * setting quote and order attributes
 */
$entities = array(
    'quote',
    'quote_address',
    'quote_item',
    'quote_address_item',
    'order',
    'order_item'
);

$options = array(
    'type' => Varien_Db_Ddl_Table::TYPE_VARCHAR,
    'visible' => true,
    'required' => false
);

foreach( $entities as $entity ) {
    $installer->addAttribute( $entity, 'feefo_sku', $options );
}
$installer->endSetup();
