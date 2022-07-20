<?php


namespace MultiUom\I95DevConnect\Model;

use MultiUom\I95DevConnect\Api\Data\UomInterface;

class Uom extends \Magento\Framework\Model\AbstractModel implements UomInterface
{
    /**
     * CMS page cache tag.
     */
    const CACHE_TAG = 'MultiUom_I95DevConnect_Table';

    /**
     * @var string
     */
    protected $_cacheTag = 'MultiUom_I95DevConnect_Table';

    /**
     * Prefix of model events names.
     *
     * @var string
     */
    protected $_eventPrefix = 'MultiUom_I95DevConnect_Table';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('MultiUom\I95DevConnect\Model\ResourceModel\Uom');
    }
    /**
     * Get EntityId.
     *
     * @return int
     */
    public function getEntityId()
    {
        return $this->getData(self::ENTITY_ID);
    }

    /**
     * Set EntityId.
     */
    public function setEntityId($entityId)
    {
        return $this->setData(self::ENTITY_ID, $entityId);
    }

    /**
     * Get Title.
     *
     * @return varchar
     */
    public function getUom()
    {
        return $this->getData(self::UOM);
    }

    /**
     * Set Title.
     */
    public function setUom($uom)
    {
        return $this->setData(self::UOM, $uom);
    }

    /**
     * Get getContent.
     *
     * @return varchar
     */
    public function getDescription()
    {
        return $this->getData(self::DESCRIPTION);
    }

    /**
     * Set Content.
     */
    public function setDescription($description)
    {
        return $this->setData(self::CONTENT, $description);
    }

    /**
     * Get PublishDate.
     *
     * @return varchar
     */
    public function getPublishDate()
    {
        return $this->getData(self::PUBLISH_DATE);
    }

    /**
     * Set PublishDate.
     */
    public function setPublishDate($publishDate)
    {
        return $this->setData(self::PUBLISH_DATE, $publishDate);
    }

    /**
     * Get IsActive.
     *
     * @return varchar
     */
    public function getIsActive()
    {
        return $this->getData(self::IS_ACTIVE);
    }

    /**
     * Set IsActive.
     */
    public function setIsActive($isActive)
    {
        return $this->setData(self::IS_ACTIVE, $isActive);
    }

    /**
     * Get UpdateTime.
     *
     * @return varchar
     */
    public function getUpdateTime()
    {
        return $this->getData(self::UPDATE_TIME);
    }

    /**
     * Set UpdateTime.
     */
    public function setUpdateTime($updateTime)
    {
        return $this->setData(self::UPDATE_TIME, $updateTime);
    }

    /**
     * Get CreatedAt.
     *
     * @return varchar
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * Set CreatedAt.
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }
}