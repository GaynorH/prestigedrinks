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
class Flint_Feefo_Model_Config_General extends Flint_Feefo_Model_Config_Abstract
{

    protected $_defaultPath = 'flint_feefo/general';

    public function enabled( $store = null ) {
        return $this->getConfigData( $store, 'enabled' );
    }

    public function getLogon( $store = null ) {
        return $this->getConfigData( $store, 'logon' );
    }

    public function getKey( $store = null ) {
        return $this->getConfigData( $store, 'key' );
    }

    public function getFirewall( $store = null ) {
        return $this->getConfigData( $store, 'firewall' );
    }

    public function getQueryDate( $store = null ) {
        return $this->getConfigData( $store, 'query_date' );
    }

    public function getQueryDateOffset( $store = null ) {
        return $this->getConfigData( $store, 'query_date_offset' );
    }

    public function getBusinessCategory( $store = null ) {
        return $this->getConfigData( $store, 'business_category' );
    }

    public function getBusinessCategoryAttribute( $store = null ) {
        return $this->getConfigData( $store, 'business_category_attribute' );
    }

    public function getIncludeStoreCode( $store = null ) {
        return $this->getConfigData( $store, 'include_store_code' );
    }

}
