<?php
/**
 * Webkul_Grid Grid Interface.
 *
 * @category    Webkul
 *
 * @author      Webkul Software Private Limited
 */
namespace MultiUom\I95DevConnect\Api\Data;

interface UomInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case.
     */
    const ENTITY_ID = 'entity_id';
    const UOM = 'uom';
    const DESCRIPTION = 'description';
    const PUBLISH_DATE = 'publish_date';
    const IS_ACTIVE = 'is_active';
    const UPDATE_TIME = 'update_time';
    const CREATED_AT = 'created_at';

    /**
     * Get EntityId.
     *
     * @return int
     */
    public function getEntityId();

    /**
     * Set EntityId.
     */
    public function setEntityId($entityId);

    /**
     * Get Title.
     *
     * @return varchar
     */
    public function getUom();

    /**
     * Set Title.
     */
    public function setUom($uom);

    /**
     * Get Content.
     *
     * @return varchar
     */
    public function getDescription();

    /**
     * Set Content.
     */
    public function setDescription($description);

    /**
     * Get Publish Date.
     *
     * @return varchar
     */
    public function getPublishDate();

    /**
     * Set PublishDate.
     */
    public function setPublishDate($publishDate);

    /**
     * Get IsActive.
     *
     * @return varchar
     */
    public function getIsActive();

    /**
     * Set StartingPrice.
     */
    public function setIsActive($isActive);

    /**
     * Get UpdateTime.
     *
     * @return varchar
     */
    public function getUpdateTime();

    /**
     * Set UpdateTime.
     */
    public function setUpdateTime($updateTime);

    /**
     * Get CreatedAt.
     *
     * @return varchar
     */
    public function getCreatedAt();

    /**
     * Set CreatedAt.
     */
    public function setCreatedAt($createdAt);
}