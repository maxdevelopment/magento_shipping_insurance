<?php

class Itransition_ShippingInsurance_Model_Adminhtml_Type
{
    public function toOptionArray()
    {
        return [
            ['value' => 0, 'label' => 'Percent from order'],
            ['value' => 1, 'label' => 'Absolute value']
        ];
    }
}