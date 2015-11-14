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
class Flint_Feefo_Block_Reviews_Product_Page extends Flint_Feefo_Block_Reviews_Abstract
{

    public function isEnabled() {
        return ( $this->getConfigProductReviews()->active() && !Mage::registry( 'current_product' )->getFeefoDisableFrontend() );
    }

    public function getSku() {
        if(Mage::registry( 'current_product' )->getFeefoSku()){
            return Mage::registry( 'current_product' )->getFeefoSku();
        }
        return Mage::registry( 'current_product' )->getSku();
    }

    public function getMode() {
        return $this->getConfigProduct()->getMode();
    }

    public function getForFeedback() {
        return $this->getConfigProduct()->getForfeedback();
    }

    public function getOrder() {
        return $this->getConfigProduct()->getOrder();
    }

    public function getSince() {
        return $this->getConfigProduct()->getSince();
    }

    public function getLimit() {
        if( $this->getConfigProductReviews()->getLimit() ) {
            return $this->getConfigProductReviews()->getLimit();
        }
        return $this->getConfigProduct()->getLimit();
    }

    public function getAdditional() {
        $this->getConfigProduct()->getAdditional();
    }

    public function getCssId() {
        return 'product_reviews';
    }

    public function getGoogleStarsActive() {
        return $this->getConfigProductReviews()->getGoogleStarsActive();
    }

}
