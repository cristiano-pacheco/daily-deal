<?php

declare(strict_types=1);

namespace CristianoPacheco\DailyDeal\Model;

use CristianoPacheco\DailyDeal\Api\Data\DailyDealInterface;
use CristianoPacheco\DailyDeal\Model\ResourceModel\DailyDeal as ResourceModel;
use Magento\Framework\Model\AbstractModel;

class DailyDeal extends AbstractModel implements DailyDealInterface
{
    /**
     * @inheritDoc
     */
    public function _construct()
    {
        $this->_init(ResourceModel::class);
    }

    /**
     * @inheritDoc
     */
    public function getProductId()
    {
        return $this->getData(DailyDealInterface::PRODUCT_ID);
    }

    /**
     * @inheritDoc
     */
    public function setProductId($value)
    {
        $this->setData(DailyDealInterface::PRODUCT_ID, $value);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getTitle()
    {
        return $this->getData(DailyDealInterface::TITLE);
    }

    /**
     * @inheritDoc
     */
    public function setTitle($value)
    {
        $this->setData(DailyDealInterface::TITLE, $value);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getQuantity()
    {
        return $this->getData(DailyDealInterface::QUANTITY);
    }

    /**
     * @inheritDoc
     */
    public function setQuantity($value)
    {
        $this->setData(DailyDealInterface::QUANTITY, $value);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getStartTime()
    {
        return $this->getData(DailyDealInterface::START_TIME);
    }

    /**
     * @inheritDoc
     */
    public function setStartTime($value)
    {
        $this->setData(DailyDealInterface::START_TIME, $value);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getEndTime()
    {
        return $this->getData(DailyDealInterface::END_TIME);
    }

    /**
     * @inheritDoc
     */
    public function setEndTime($value)
    {
        $this->setData(DailyDealInterface::END_TIME, $value);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getStatus()
    {
        return $this->getData(DailyDealInterface::STATUS);
    }

    /**
     * @inheritDoc
     */
    public function setStatus($value)
    {
        $this->setData(DailyDealInterface::STATUS, $value);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getCreatedAt()
    {
        return $this->getData(DailyDealInterface::CREATE_AT);
    }

    /**
     * @inheritDoc
     */
    public function setCreatedAt($value)
    {
        $this->setData(DailyDealInterface::CREATED_AT, $value);
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getUpdatedAt()
    {
        return $this->getData(DailyDealInterface::UPDATED_AT);
    }

    /**
     * @inheritDoc
     */
    public function setUpdatedAt($value)
    {
        $this->setData(DailyDealInterface::UPDATED_AT, $value);
        return $this;
    }
}
