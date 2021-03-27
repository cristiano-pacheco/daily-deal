<?php

declare(strict_types=1);

namespace CristianoPacheco\DailyDeal\Api\Data;

use Magento\Framework\Api\SearchResultsInterface;

interface DailyDealSearchResultsInterface extends SearchResultsInterface
{
    /**
     * @return \CristianoPacheco\DailyDeal\Api\Data\DailyDealInterface[]
     */
    public function getItems();

    /**
     * @param \CristianoPacheco\DailyDeal\Api\Data\DailyDealInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
