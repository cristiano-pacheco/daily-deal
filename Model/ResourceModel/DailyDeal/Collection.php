<?php

declare(strict_types=1);

namespace CristianoPacheco\DailyDeal\Model\ResourceModel\DailyDeal;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use CristianoPacheco\DailyDeal\Model\ResourceModel\DailyDeal as ResourceModel;
use CristianoPacheco\DailyDeal\Model\DailyDeal as Model;

class Collection extends AbstractCollection
{
    /**
     * @inheritdoc
     */
    protected function _construct()
    {
        $this->_init(Model::class, ResourceModel::class);
    }
}
