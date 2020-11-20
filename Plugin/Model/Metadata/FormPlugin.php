<?php
/**
 * Copyright © MagePal LLC. All rights reserved.
 * See COPYING.txt for license details.
 * http://www.magepal.com | support@magepal.com
 */
namespace MagePal\FormFieldManager\Plugin\Model\Metadata;

use Magento\Customer\Model\Metadata\Form;
use MagePal\FormFieldManager\Helper\Data;

/**
 * Class FormPlugin
 * @package MagePal\FormFieldManager\Plugin\Model\Metadata
 */
class FormPlugin
{
    /* @var Data */
    private $_dataHelper;

    /**
     * DataProviderPlugin constructor.
     * @param Data $dataHelper
     */
    public function __construct(
        Data $dataHelper
    ) {
        $this->_dataHelper = $dataHelper;
    }

    /**
     * @param Form $subject
     * @param $result
     * @return array
     */
    public function afterGetAttributes(Form $subject, $result)
    {
        if ($this->_dataHelper->isSalesOrderFormAdminPage() && $this->_dataHelper->isEnabled() && is_array($result)) {
            foreach ($this->_dataHelper->getCustomerAddressAttributeArray() as $field) {
                if (array_key_exists($field, $result)) {
                    unset($result[$field]);
                }
            }
        }

        return $result;
    }
}
