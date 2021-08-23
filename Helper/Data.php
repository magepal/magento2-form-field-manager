<?php
/**
 * Copyright © MagePal LLC. All rights reserved.
 * See COPYING.txt for license details.
 * http://www.magepal.com | support@magepal.com
 */

namespace MagePal\FormFieldManager\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

/**
 * Class Data
 * @package MagePal\FormFieldManager\Helper
 */
class Data extends AbstractHelper
{
    const XML_PATH_ACTIVE = 'magepal_formfieldmanager/general/active';
    const XML_CUSTOMER_ATTRIBUTE = 'magepal_formfieldmanager/general/customer_attribute';
    const XML_CUSTOMER_ADDRESS_ATTRIBUTE = 'magepal_formfieldmanager/general/customer_address_attribute';

    /**
     * If enabled
     *
     * @return bool
     */
    public function isEnabled()
    {
        return $this->scopeConfig->isSetFlag(self::XML_PATH_ACTIVE, ScopeInterface::SCOPE_STORE);
    }

    /**
     * Check page type
     * @return bool
     */
    public function isCustomerEditAdminPage()
    {
        return $this->_request->getFullActionName() === 'customer_index_edit' ||
            (
                $this->_request->getFullActionName() === 'mui_index_render_handle' &&
                $this->_request->getParam('handle') === 'customer_address_edit'
            ); // Address form uses MUI renderer since ~2.4
    }

    /**
     * Check page type
     * @return bool
     */
    public function isSalesOrderFormAdminPage()
    {
        return $this->_request->getFullActionName() === 'sales_order_create_index'
            || $this->_request->getFullActionName() === 'sales_order_create_loadBlock'
            || $this->_request->getFullActionName() === 'sales_order_edit_index'
            || $this->_request->getFullActionName() === 'sales_order_edit_loadBlock';
    }

    /**
     * Get list of customer attribute to disabled
     * @return string|null
     */
    public function getCustomerAttribute()
    {
        return $this->scopeConfig->getValue(self::XML_CUSTOMER_ATTRIBUTE, ScopeInterface::SCOPE_STORE);
    }

    /**
     * Get list of customer attribute to disabled
     * @return string|null
     */
    public function getCustomerAddressAttribute()
    {
        return $this->scopeConfig->getValue(
            self::XML_CUSTOMER_ADDRESS_ATTRIBUTE,
            ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get Array of customer attribute to disabled
     * @return array
     */
    public function getCustomerAttributeArray()
    {
        $list = $this->getCustomerAttribute();

        return empty($list) ? [] : explode(',', $list);
    }

    /**
     * Get Array of customer attribute to disabled
     * @return array
     */
    public function getCustomerAddressAttributeArray()
    {
        $list = $this->getCustomerAddressAttribute();

        return empty($list) ? [] : explode(',', $list);
    }

    /**
     * check if array path exists
     * @param $array
     * @param $path
     * @param string $separator
     * @return bool
     */
    public function arrayPathExists($array, $path, $separator = '/')
    {
        $paths = explode($separator, $path);

        foreach ($paths as $sub) {
            if (!is_array($array) || !array_key_exists($sub, $array)) {
                return false;
            }

            $array = $array[$sub];
        }

        return true;
    }
}
