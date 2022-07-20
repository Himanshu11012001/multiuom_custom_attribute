<?php
declare(strict_types=1);

namespace MySeller\Myform\Model;

use MySeller\Myform\Api\Data\CustomformInterface;
use MySeller\Myform\Api\Data\CustomformInterfaceFactory;
use Magento\Framework\Api\DataObjectHelper;

class Customform extends \Magento\Framework\Model\AbstractModel

{

    protected $_eventPrefix = 'magelearn_customform';
    protected $dataObjectHelper;

    protected $customformDataFactory;


    /**
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param CustomformInterfaceFactory $customformDataFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param \Magelearn\Customform\Model\ResourceModel\Customform $resource
     * @param \Magelearn\Customform\Model\ResourceModel\Customform\Collection $resourceCollection
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        CustomformInterfaceFactory $customformDataFactory,
        DataObjectHelper $dataObjectHelper,
        \Magelearn\Customform\Model\ResourceModel\Customform $resource,
        \Magelearn\Customform\Model\ResourceModel\Customform\Collection $resourceCollection,
        array $data = []
    ) {
        $this->customformDataFactory = $customformDataFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * Retrieve customform model with customform data
     * @return CustomformInterface
     */
    public function getDataModel()
    {
        $customformData = $this->getData();
        
        $customformDataObject = $this->customformDataFactory->create();
        $this->dataObjectHelper->populateWithArray(
            $customformDataObject,
            $customformData,
            CustomformInterface::class
        );
        
        return $customformDataObject;
    }
}

