<?php
declare(strict_types=1);

namespace MySeller\Myform\Api\Data;

interface CustomformSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get Customform list.
     * @return \Magelearn\Customform\Api\Data\CustomformInterface[]
     */
    public function getItems();

    /**
     * Set id list.
     * @param \Magelearn\Customform\Api\Data\CustomformInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

