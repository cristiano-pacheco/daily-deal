<?php

declare(strict_types=1);

namespace CristianoPacheco\DailyDeal\Model;

use CristianoPacheco\DailyDeal\Api\DailyDealRepositoryInterface;
use CristianoPacheco\DailyDeal\Api\Data;
use CristianoPacheco\DailyDeal\Model\ResourceModel\DailyDeal as ResourceDailyDeal;
use CristianoPacheco\DailyDeal\Model\ResourceModel\DailyDeal\Collection;
use CristianoPacheco\DailyDeal\Model\ResourceModel\DailyDeal\CollectionFactory as DailyDealCollectionFactory;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Api\SearchCriteriaInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Phrase;

class DailyDealRepository implements DailyDealRepositoryInterface
{
    /**
     * @var ResourceDailyDeal
     */
    private $resource;

    /**
     * @var DailyDealFactory
     */
    private $modelFactory;

    /**
     * @var DailyDealCollectionFactory
     */
    private $collectionFactory;

    /**
     * @var Data\DailyDealSearchResultsInterfaceFactory
     */
    private $searchResultsFactory;

    /**
     * @var CollectionProcessorInterface
     */
    private $collectionProcessor;

    /**
     * DailyDealRepository constructor.
     * @param ResourceDailyDeal $resource
     * @param DailyDealFactory $modelFactory
     * @param DailyDealCollectionFactory $collectionFactory
     * @param Data\DailyDealSearchResultsInterfaceFactory $searchResultsFactory
     * @param CollectionProcessorInterface $collectionProcessor
     */
    public function __construct(
        ResourceDailyDeal $resource,
        DailyDealFactory $modelFactory,
        DailyDealCollectionFactory $collectionFactory,
        Data\DailyDealSearchResultsInterfaceFactory $searchResultsFactory,
        CollectionProcessorInterface $collectionProcessor
    ) {
        $this->resource = $resource;
        $this->modelFactory = $modelFactory;
        $this->collectionFactory = $collectionFactory;
        $this->searchResultsFactory = $searchResultsFactory;
        $this->collectionProcessor = $collectionProcessor;
    }

    /**
     * @inheritDoc
     */
    public function save(Data\DailyDealInterface $model)
    {
        try {
            $this->resource->save($model);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__($exception->getMessage()));
        }
        return $model;
    }

    /**
     * @inheritDoc
     */
    public function getById($id)
    {
        $model = $this->modelFactory->create();
        $this->resource->load($model, $id);
        if (!$model->getId()) {
            throw new NoSuchEntityException(
                new Phrase(
                    __('The daily deal with the %1 ID doesn\'t exist.', $id)
                )
            );
        }
        return $model;
    }

    /**
     * @inheritDoc
     */
    public function getList(SearchCriteriaInterface $criteria)
    {
        /** @var Collection $collection */
        $collection = $this->collectionFactory->create();

        $this->collectionProcessor->process($criteria, $collection);

        /** @var Data\DailyDealSearchResultsInterface $searchResults */
        $searchResults = $this->searchResultsFactory->create();
        $searchResults->setSearchCriteria($criteria);
        $searchResults->setItems($collection->getItems());
        $searchResults->setTotalCount($collection->getSize());

        return $searchResults;
    }

    /**
     * @inheritDoc
     */
    public function delete(Data\DailyDealInterface $model)
    {
        try {
            $this->resource->delete($model);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__($exception->getMessage()));
        }
        return true;
    }

    /**
     * @inheritDoc
     */
    public function deleteById($id)
    {
        return $this->delete($this->getById($id));
    }
}
