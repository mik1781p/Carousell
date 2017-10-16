<?php


class Acierno_Carousell_Model_Adminhtml_System_Config_Form_Selectconfig
{
    public function toOptionArray()
    {
        return array(
            array(
                'value' => 'fullwidth',
                'label' => 'Full Width'
            ),
            array(
                'value' => 'bootstrap',
                'label' => 'Wrapped'
            )

        );
    }
}