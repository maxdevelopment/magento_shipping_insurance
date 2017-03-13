<?php

class Itransition_ShippingInsurance_Model_Adminhtml_Value extends Mage_Core_Model_Config_Data
{
    public function save()
    {
        $insurance_value = $this->getValue();

        if (!is_numeric($insurance_value))
            Mage::getSingleton('core/session')->addError('Error: only numeric value');

        if (floatval($insurance_value) < 0)
            Mage::getSingleton('core/session')->addError('Error: only positive number value accept');


        return parent::save();
    }
}