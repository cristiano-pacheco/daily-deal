<?php

declare(strict_types=1);

namespace CristianoPacheco\DailyDeal\Api;

interface DailyDealRepositoryInterface
{
    /**
     * Save daily deal.
     *
     * @param \CristianoPacheco\DailyDeal\Api\Data\DailyDealInterface $data
     * @return \CristianoPacheco\DailyDeal\Api\Data\DailyDealInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(Data\DailyDealInterface $data);

    /**
     * Retrieve daily deal.
     *
     * @param int $id
     * @return \CristianoPacheco\DailyDeal\Api\Data\DailyDealInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getById($id);

    /**
     * Retrieve daily deals matching the specified criteria.
     *
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \CristianoPacheco\DailyDeal\Api\Data\DailyDealSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);

    /**
     * Delete daily deal.
     *
     * @param \CristianoPacheco\DailyDeal\Api\Data\DailyDealInterface $data
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(Data\DailyDealInterface $data);

    /**
     * Delete daily deal by ID.
     *
     * @param int $id
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($id);
}
