<?php
/**
 * Copyright © MagePal LLC. All rights reserved.
 * See COPYING.txt for license details.
 * http://www.magepal.com | support@magepal.com
*/
namespace MagePal\FormFieldManager\Plugin\Model\Metadata;

class FormPlugin
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

    public function afterGetAttributes(\Magento\Customer\Model\Metadata\Form $subject, $result)
    {
        if ($this->_dataHelper->isOrderCreationAdminPage() && $this->_dataHelper->isEnabled() && is_array($result)) {
            foreach ($this->_dataHelper->getCustomerAddressAttributeArray() as $field) {
                if (array_key_exists($field, $result)) {
                    unset($result[$field]);
                }
            }
        }

        return $result;
    }
}
