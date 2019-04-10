<?php
/**
 * Copyright © MagePal LLC. All rights reserved.
 * See COPYING.txt for license details.
 * http://www.magepal.com | support@magepal.com
 */
namespace MagePal\FormFieldManager\Plugin\Component;

use Magento\Ui\Component\AbstractComponent;
use MagePal\FormFieldManager\Helper\Data;

/**
 * Class AbstractComponentPlugin
 * @package MagePal\FormFieldManager\Plugin\Component
 */
class AbstractComponentPlugin
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
     * @param AbstractComponent $subject
     * @param $result
     * @return array
     */
    public function afterGetChildComponents(AbstractComponent $subject, $result)
    {
        if ($this->_dataHelper->isCustomerEditAdminPage() && $this->_dataHelper->isEnabled()) {
            if ($subject->getName() == 'customer') {
                $this->hideFields($result, $this->_dataHelper->getCustomerAttributeArray());
            } elseif ($subject->getName() == 'address') {
                $this->hideFields($result, $this->_dataHelper->getCustomerAddressAttributeArray());
            }
        }

        return $result;
    }

    /**
     * @param $result
     * @param $fields
     */
    private function hideFields(&$result, $fields)
    {
        if (is_array($result)) {
            foreach ($fields as $field) {
                if (array_key_exists($field, $result)) {
                    $temp = $result[$field]->getConfig();
                    $temp['visible'] = false;
                    $result[$field]->setConfig($temp);
                }
            }
        }
    }
}
