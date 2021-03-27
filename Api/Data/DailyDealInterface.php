<?php

declare(strict_types=1);

namespace CristianoPacheco\DailyDeal\Api\Data;

interface DailyDealInterface
{
    const TABLE_NAME = 'daily_deal';
    const ID = 'entity_id';
    const PRODUCT_ID = 'product_id';
    const TITLE = 'title';
    const QUANTITY = 'quantity';
    const START_TIME = 'start_time';
    const END_TIME = 'end_time';
    const STATUS = 'status';
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    /**
     * @return int
     */
    public function getId();

    /**
     * @param int $value
     * @return $this
     */
    public function setId($value);

    /**
     * @return int
     */
    public function getProductId();

    /**
     * @param int $value
     * @return $this
     */
    public function setProductId($value);

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @param string $value
     * @return $this
     */
    public function setTitle($value);

    /**
     * @return int
     */
    public function getQuantity();

    /**
     * @param int $value
     * @return $this
     */
    public function setQuantity($value);

    /**
     * @return string
     */
    public function getStartTime();

    /**
     * @param string $value
     * @return $this
     */
    public function setStartTime($value);

    /**
     * @return string
     */
    public function getEndTime();

    /**
     * @param string $value
     * @return $this
     */
    public function setEndTime($value);

    /**
     * @return int
     */
    public function getStatus();

    /**
     * @param int $value
     * @return $this
     */
    public function setStatus($value);

    /**
     * @return int
     */
    public function getCreatedAt();

    /**
     * @param int $value
     * @return $this
     */
    public function setCreatedAt($value);

    /**
     * @return int
     */
    public function getUpdatedAt();

    /**
     * @param int $value
     * @return $this
     */
    public function setUpdatedAt($value);
}
