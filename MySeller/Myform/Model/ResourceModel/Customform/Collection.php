<?php
declare(strict_types=1);

namespace MySeller\Myform\Model\ResourceModel\Customform;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * @var string
     */
    protected $_idFieldName = 'id';
	protected $_previewFlag;
    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            \MySeller\Myform\Model\Customform::class,
            \MySeller\Mysform\Model\ResourceModel\Customform::class
        );
		$this->_map['fields']['id'] = 'main_table.id';
    }
}

