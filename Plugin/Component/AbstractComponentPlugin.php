<?php
/**
 * Copyright © 2017 MagePal LLC. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace MagePal\FormFieldManager\Plugin\Component;

class AbstractComponentPlugin
{

    /* @var \MagePal\FormFieldManager\Helper\Data */
    private $_dataHelper;


    /**
     * DataProviderPlugin constructor.
     */
    public function __construct(
        \MagePal\FormFieldManager\Helper\Data $dataHelper

    ) {
        $this->_dataHelper = $dataHelper;
    }

    /**
     * @param \Magento\Ui\Component\AbstractComponent $subject
     * @param $result
     * @return array
     */
    public function afterGetChildComponents(\Magento\Ui\Component\AbstractComponent $subject, $result)
    {

        if($this->_dataHelper->isCustomerEditAdminPage() && $this->_dataHelper->isEnabled()){
            if($subject->getName() == 'customer'){
                $this->hideFields($result, $this->_dataHelper->getCustomerAttributeArray());
            }
            else if($subject->getName() == 'address'){
                $this->hideFields($result, $this->_dataHelper->getCustomerAddressAttributeArray());
            }
        }


        return $result;
    }

    /**
     * @param $result
     * @param $fields
     */
    private function hideFields(&$result, $fields){
        if(is_array($result)){
            foreach($fields as $field){
                if(array_key_exists($field, $result)){

                    $temp = $result[$field]->getConfig();
                    $temp['visible'] = false;
                    $result[$field]->setConfig($temp);
                }
            }

        }
    }
}