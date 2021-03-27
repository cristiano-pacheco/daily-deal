<?php

declare(strict_types=1);

namespace CristianoPacheco\DailyDeal\Model\ResourceModel;

use CristianoPacheco\DailyDeal\Api\Data\DailyDealInterface;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class DailyDeal extends AbstractDb
{
    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(DailyDealInterface::TABLE_NAME, DailyDealInterface::ID);
    }
}
