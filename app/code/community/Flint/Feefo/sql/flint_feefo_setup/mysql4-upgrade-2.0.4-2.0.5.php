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

$this->removeAttribute(Mage_Catalog_Model_Category::ENTITY, 'feefo_business_category');

if($eavConfig->getAttribute(Mage_Catalog_Model_Category::ENTITY, 'feefo_business_category')) {
    $this->addAttribute(Mage_Catalog_Model_Category::ENTITY, 'feefo_business_category', array(
        'group'         => 'Feefo',
        'input'         => 'text',
        'type'          => 'text',
        'label'         => 'Business category (example : "Furniture" or "Chair" )',
        'backend'       => '',
        'visible'       => true,
        'required'      => false,
        'visible_on_front' => true,
        'global'        => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    ));
}

$installer->endSetup();
