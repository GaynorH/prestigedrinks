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
abstract class Flint_Feefo_Block_Reviews_Abstract extends Flint_Feefo_Block_Abstract
{

    const REVIEWS_BASE_URL = 'http://www.feefo.com/feefo/xmlfeed.jsp';

    public $reviews;

    public function getReviewsData() {
        $helper = Mage::helper( 'flint_feefo/reviews' );
        $data = array(
            '_escape' => true,
            'logon' => $this->getLogon(),
            'vendorref' => $this->getSku(),
            'mode' => $this->getMode(),
            //'forfeedback' => $this->getForFeedback(),
            'order' => $this->getOrder(),
            'since' => $this->getSince(),
            'limit' => $this->getLimit(),
        );

        $reveiws = $helper->getReviews( self::REVIEWS_BASE_URL . '?' . http_build_query( $data ) . $this->getAdditional() );

        return $reveiws;
    }

    public function getReviews() {
        if( !$this->reviews ) {
            $this->reviews = $this->getReviewsData();
        }
        return $this->reviews;
    }

    public function getFeedbacks() {
        return $this->getReviews()->xpath( "//FEEDBACK" );
    }

    public function getLogoTemplate() {
        return $this->getConfigProductReviews()->getLogoTemplateReviews();
    }

    public function getReviewAverage() {
        return ( string ) $this->reviews->SUMMARY->AVERAGE;
    }

    public function getReviewCount() {
        return ( string ) $this->reviews->SUMMARY->COUNT;
    }

    public function getTotalProductCount() {
        return ( string ) $this->reviews->SUMMARY->TOTALPRODUCTCOUNT;
    }

    public function getSummary() {
        return $this->reviews->SUMMARY;
    }

    public function getGoogleStarsActive() {
        return false;
    }

}
