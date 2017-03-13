<?php
class Itransition_ShippingInsurance_Block_Checkout_Onepage_Insurance extends Mage_Checkout_Block_Onepage_Abstract
{
    public function getInsuranceValue()
    {
        $quote = $this->getQuote();
        $value = Mage::helper('core')->currency($quote->getShippingInsurance(), true, false);

        return $value;
    }

    public function isEnabled() {
        return Mage::getStoreConfig(
            'customconfig_options/section_one/module_enabled'
        );
    }
}
