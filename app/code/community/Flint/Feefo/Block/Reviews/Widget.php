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
class Flint_Feefo_Block_Reviews_Widget extends Flint_Feefo_Block_Reviews_Abstract implements Mage_Widget_Block_Interface
{

    public function _prepareLayout() {
        $this->setTemplate( 'flint_feefo/reviews.phtml' );
        return parent::_prepareLayout();
    }

    public function isEnabled() {
        return true;
    }
    
    public function getLogon() {
        return $this->getConfigGeneral()->getLogon().$this->getBusinessCategory();
    }

    public function getSku() {
        if( $this->getData( 'detect_sku' ) ) {
            $sku = $this->detectSku();
            if($sku){
                if( $this->getData( 'sku_wildcard' ) ){
                    $sku .= "*";
                }
                return $sku;
            }
        }

        return $this->getData( 'sku' );
    }
    
    public function detectSku(){
        if( $this->getProduct() ) {
            return $this->getProduct()->getSku();
        }
        if( $this->getParentBlock() && $this->getParentBlock()->getProduct() ) {
            return $this->getParentBlock()->getProduct()->getSku();
        }
        if( $this->getRequest() && $this->getRequest()->getParam( 'vendorref' ) ) {
            return $this->getRequest()->getParam( 'vendorref' );
        }
        if( Mage::registry( 'current_product' ) ) {
            return Mage::registry( 'current_product' )->getSku();
        }
        return false;
    }
    
    public function getMode() {
        return $this->getData( 'mode' );
    }

    public function getForFeedback() {
        return $this->getData( 'forfeedback' );
    }

    public function getOrder() {
        return $this->getData( 'order' );
    }

    public function getSince() {
        return $this->getData( 'since' );
    }

    public function getLimit() {
        return $this->getData( 'limit' );
    }

    public function getAdditional() {
        return $this->getData( 'additional' );
    }

    public function getCssId() {
        if( $this->getData( 'cssid' ) )
            return $this->getData( 'cssid' );
        return 'widget';
    }
    
    public function getCurrentCategory() {
        if( $this->getData( 'detect_category' ) ) {
            if(Mage::registry('current_category')){
                return Mage::registry('current_category');
            }
        }
        return false;
    }
    
    public function getBusinessCategory(){
        if($this->getCurrentCategory()){
            return '/'.Mage::app()->getStore()->getCode().'/'.$this->getFeefoBusinessCategory($this->getCurrentCategory());
        }elseif($this->getData( 'category' )){
            return '/'.Mage::app()->getStore()->getCode().'/'.$this->getData( 'category' );
        }
        return '';
    }
    
    public function getFeefoBusinessCategory($category){
        if($category->getFeefoBusinessCategory()){
            return $category->getFeefoBusinessCategory();
        }elseif($this->getData( 'category' )){
            return $this->getData( 'category' );
        }
        return '';
    }

}
