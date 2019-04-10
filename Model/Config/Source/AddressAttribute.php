<?php
/**
 * Copyright © MagePal LLC. All rights reserved.
 * See COPYING.txt for license details.
 * http://www.magepal.com | support@magepal.com
 */
namespace MagePal\FormFieldManager\Model\Config\Source;

use Magento\Customer\Api\AddressMetadataInterface;
use Magento\Customer\Model\Metadata\FormFactory;
use Magento\Framework\Option\ArrayInterface;

/**
 * Class AddressAttribute
 * @package MagePal\FormFieldManager\Model\Config\Source
 */
class AddressAttribute implements ArrayInterface
{

    /**
     * Customer form factory
     *
     * @var FormFactory
     */
    protected $_customerFormFactory;

    /**
     * AddressAttribute constructor.
     * @param FormFactory $customerFormFactory
     */
    public function __construct(
        FormFactory $customerFormFactory
    ) {
        $this->_customerFormFactory = $customerFormFactory;
    }

    /**
     * @return array
     */
    public function toOptionArray()
    {
        //todo: rewrite using eav config see Magento/Customer/Model/Customer/DataProvider.php
        //$this->eavConfig->getEntityType('customer')->getAttributeCollection()

        $customerForm = $this->_customerFormFactory->create(
            AddressMetadataInterface::ENTITY_TYPE_ADDRESS,
            'adminhtml_customer_address'
        );

        $attributes = $customerForm->getAttributes();

        $fields = [];

        $ignoreList = ['created_at', 'created_in', 'disable_auto_group_change', 'region', 'region_id', 'postcode'];

        foreach ($attributes as $attribute) {
            if (!$attribute->isRequired() && !in_array($attribute->getAttributeCode(), $ignoreList)) {
                $fields[] = ['value' => $attribute->getAttributeCode(), 'label' => $attribute->getStoreLabel()];
            }
        }

        return $fields;
    }
}
