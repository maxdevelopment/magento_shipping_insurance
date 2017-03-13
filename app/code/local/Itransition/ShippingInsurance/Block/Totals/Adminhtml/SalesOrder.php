<?php

class Itransition_ShippingInsurance_Block_Totals_Adminhtml_SalesOrder extends Mage_Adminhtml_Block_Sales_Order_Totals
{
    protected function _initTotals()
    {
        parent::_initTotals();
        $order = $this->getOrder();
        $label = Mage::getStoreConfig(
            'customconfig_options/section_one/shipping_insurance_label'
        );

        if ($order->getInsuranceShippingMethod()) {
            $amount = $order->getShippingInsurance();
            $this->addTotalBefore(
                new Varien_Object(
                    [
                        'code' => 'shipping_insurance',
                        'value' => $amount,
                        'base_value' => $amount,
                        'label' => $this->helper('shipping_insurance')->__($label)
                    ],
                    'grand_total'
                )
            );
        }

        return $this;
    }
}