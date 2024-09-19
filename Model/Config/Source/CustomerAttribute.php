<?php
/**
 * Copyright © MagePal LLC. All rights reserved.
 * See COPYING.txt for license details.
 * https://www.magepal.com | support@magepal.com
 */
namespace MagePal\FormFieldManager\Model\Config\Source;

use Magento\Customer\Api\CustomerMetadataInterface;
use Magento\Customer\Model\Metadata\FormFactory;
use Magento\Framework\Option\ArrayInterface;

/**
 * Class CustomerAttribute
 * @package MagePal\FormFieldManager\Model\Config\Source
 */
class CustomerAttribute implements ArrayInterface
{

    /**
     * Customer form factory
     *
     * @var FormFactory
     */
    protected $_customerFormFactory;

    /**
     * CustomerAttribute constructor.
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
            CustomerMetadataInterface::ENTITY_TYPE_CUSTOMER,
            'adminhtml_customer'
        );

        $attributes = $customerForm->getAttributes();

        $fields = [];

        $ignoreList = ['created_at', 'created_in', 'disable_auto_group_change'];

        foreach ($attributes as $attribute) {
            if (!$attribute->isRequired() && !in_array($attribute->getAttributeCode(), $ignoreList)) {
                $fields[] = ['value' => $attribute->getAttributeCode(), 'label' => $attribute->getStoreLabel()];
            }
        }

        return $fields;
    }
}
