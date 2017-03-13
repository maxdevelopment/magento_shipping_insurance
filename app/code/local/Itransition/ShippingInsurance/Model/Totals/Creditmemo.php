<?php

class Itransition_ShippingInsurance_Model_Totals_Creditmemo extends Mage_Sales_Model_Order_Creditmemo_Total_Abstract
{
    public function collect(Mage_Sales_Model_Order_Creditmemo $creditmemo)
    {
        $order = $creditmemo->getOrder();
        $amount = $order->getShippingInsurance();
        $enabled = Mage::getStoreConfig(
            'customconfig_options/section_one/module_enabled'
        );

        if ($enabled && $order->getInsuranceShippingMethod()) {
            $creditmemo->setGrandTotal($creditmemo->getGrandTotal() + $amount);
            $creditmemo->setBaseGrandTotal($creditmemo->getBaseGrandTotal() + $amount);
        }

        return $this;
    }
}