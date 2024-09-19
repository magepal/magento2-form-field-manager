<?php
/**
 * Copyright © MagePal LLC. All rights reserved.
 * See COPYING.txt for license details.
 * https://www.magepal.com | support@magepal.com
 */

namespace MagePal\FormFieldManager\Plugin\Model\Customer;

use Magento\Customer\Model\Customer\DataProvider;
use Magento\Framework\Stdlib\DateTime\TimezoneInterface;
use MagePal\FormFieldManager\Helper\Data;

class DataProviderPlugin
{

    /* @var Data */
    private $_dataHelper;

    protected $timezone;

    /**
     * DataProviderPlugin constructor.
     * @param Data $dataHelper
     */
    public function __construct(
        Data $dataHelper,
        TimezoneInterface $timezone
    ) {
        $this->_dataHelper = $dataHelper;
        $this->timezone = $timezone;
    }

    /**
     * @param DataProvider $subject
     * @param $result
     * @return mixed
     */
    public function afterGetData(DataProvider $subject, $result)
    {
        //check if dob is hidden and need to change the date format
        if ($this->_dataHelper->isCustomerEditAdminPage() && $this->_dataHelper->isEnabled()) {
            if (is_array($result) && in_array('dob', $this->_dataHelper->getCustomerAttributeArray())) {
                if ($this->_dataHelper->arrayPathExists($result, '1/customer/dob')) {
                    $result[1]['customer']['dob'] = $this->timezone
                        ->date($result[1]['customer']['dob'])
                        ->format('m/d/Y');
                }
            }
        }

        return $result;
    }
}
