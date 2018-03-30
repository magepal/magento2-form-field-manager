<?php
/**
 * Copyright © MagePal LLC. All rights reserved.
 * See COPYING.txt for license details.
 * http://www.magepal.com | support@magepal.com
*/

namespace MagePal\FormFieldManager\Plugin\Model\Customer;

class DataProviderPlugin
{

    /* @var \MagePal\FormFieldManager\Helper\Data */
    private $_dataHelper;

    protected $timezone;

    /**
     * DataProviderPlugin constructor.
     * @param \MagePal\FormFieldManager\Helper\Data $dataHelper
     */
    public function __construct(
        \MagePal\FormFieldManager\Helper\Data $dataHelper,
        \Magento\Framework\Stdlib\DateTime\TimezoneInterface $timezone
    ) {
        $this->_dataHelper = $dataHelper;
        $this->timezone = $timezone;
    }

    /**
     * @param \Magento\Customer\Model\Customer\DataProvider $subject
     * @param $result
     * @return mixed
     */
    public function afterGetData(\Magento\Customer\Model\Customer\DataProvider $subject, $result)
    {
        //check if dob is hidden and need to change the date format
        if ($this->_dataHelper->isCustomerEditAdminPage() && $this->_dataHelper->isEnabled()) {
            if (is_array($result) && in_array('dob', $this->_dataHelper->getCustomerAttributeArray())) {
                if ($this->_dataHelper->array_path_exists($result, '1/customer/dob')) {
                    $result[1]['customer']['dob'] = $this->timezone->date($result[1]['customer']['dob'])->format('m/d/Y');
                }
            }
        }

        return $result;
    }
}
